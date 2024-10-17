<?php

namespace App\Http\Controllers;

use App\Division;
use App\Thana;
use App\Union;
use App\District;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Coupon;
use Illuminate\Support\Str;
// use Cart;
use Auth;
use Alert;
use Carbon\Carbon;
use Session;
use WisdomDiala\Countrypkg\Models\Country;
use Gloudemans\Shoppingcart\Facades\Cart;
use Gloudemans\Shoppingcart\Exceptions\InvalidRowIDException;
class CartController extends Controller
{
    public function index()
    {
    	$carts = Cart::content();
        $vouchers = Coupon::where('type', 'voucher')->latest()->take(4)->get();
        return view('theam.cart', compact('carts','vouchers'));
    }

    public function add_cart(Request $request)
    {
        // Validate the request inputs
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|integer|min:1',  // Ensure that qty is a positive integer
        ]);
    
        // Fetch the product using the product ID
        $product_id = $request->product_id;
        $product = Product::find($product_id);
    
        if ($product) {
            // Determine the price (apply discount if applicable)
            $price = $product->is_sale && $product->discount_price !== null
                        ? $product->discount_price 
                        : $product->price;
    
            // Add the product to the cart with the specified quantity
            Cart::add([
                'id' => $product->id,
                'qty' => $request->qty,  // Use the quantity from the request
                'price' => $price,
                'name' => $product->title,
                'weight' => $product->weight ?? 500,  // Use product weight or default to 500
                'options' => [
                    'image' => $product->image,
                    'color_name' => $request->color_id // Assuming color_id is sent in the request
                ],
            ]);
        } else {
            // Return an error if the product is not found
            return response()->json(['error' => 'Product not found'], 404);
        }
    
        // Optionally generate the updated cart or sidebar
        $cart_sidebar = $this->generate_cart();
    
        // Return a JSON response with the updated cart details
        return response()->json([
            'total_count' => Cart::count(),
            'total_amount' => env('CURRENCY') . number_format(Cart::subtotal(), 2),
            'cart_sidebar' => $cart_sidebar
        ]);
    }
    

    public function add_cart_form(Request $request, $id)
    {
//        return $request->all();
    	$product = Product::find($id);
    	if (!is_null($product)) {

    	    if ($request->qty <= $product->qty)
            {
                Cart::add([
                    'id' => $product->id,
                    'qty' => $request->qty,
                    'price' => ($product->is_sale == 1 ? ($product->discount_price != NULL ? $product->discount_price : $product->price) : $product->price),
                    'name' => $product->title,
                    'weight' => 500,
                    'options' => [
                        'image' => $product->image,
                        'color_name' => $request->color_id,
                        'size' => $request->size
                    ],
                ]);
            }
    	    else
            {
                Alert::error('You must be add to cart less then our stock product quantity !', '');
                return redirect()->back();
            }

    	}

        $cart_sidebar = $this->generate_cart();
    	return redirect()->back()->with($cart_sidebar);

//        return ['total_count' => Cart::count(), 'total_amount' => env('CURRENCY').Cart::subtotal(), 'cart_sidebar' => $cart_sidebar];
    }

    public function generate_cart()
    {
        $carts = Cart::content();
        $total = 0;
        $cart_sidebar = '';
        foreach ($carts as $cart){

            $total += $cart->price * $cart->qty;

            $cart_sidebar .= '<div class="product product-cart">
                                <div class="product-detail">
                                    <a href="' . route('single.product', [$cart->id, Str::slug($cart->name)]) .'" class="product-name">'. $cart->name .'</a>
                                    <div class="price-box">
                                        <span class="product-quantity">' .$cart->qty. '</span>
                                        <span class="product-price">' .env('CURRENCY').$cart->price. env('UAE_CURRENCY') . '</span>
                                    </div>
                                </div>
                                <figure class="product-media">
                                    <a href="' .route('single.product', [$cart->id, Str::slug($cart->name)]). '">
                                        <img src="' .asset('images/product/' . $cart->options->image). '" alt="product" height="84"
                                            width="94" />
                                    </a>
                                </figure>
                                <form action="' .route('cart.remove'). '" method="POST">
                                    ' .csrf_field(). '
                                    <input type="hidden" name="rowId" value="' .$cart->rowId. '">
                                    <button type="submit" class="btn btn-link btn-close"><i
                                        class="fas fa-times"></i></button>
                                </form>
                            </div>';

        }
        return $cart_sidebar;
    }

    public function show_cart()
    {
        $carts = Cart::content();
        return view('shopping-cart', compact('carts'));
        //dd($carts);
    }

    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        // Add the product to cart here.

        return response()->json(['message' => 'Product added to cart successfully!']);
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'quantity' => 'required|integer|min:1|max:999',
        ]);
    
        try {
            // Check if the cart item exists
            $cartItem = Cart::get($id); // Check for the specific item by row ID
    
            if (!$cartItem) {
                return response()->json(['message' => 'Item not found in cart.'], 404);
            }
    
            // Update the quantity of the cart item
            Cart::update($id, ['qty' => $request->input('quantity')]);
    
            return response()->json(['success' => true, 'message' => 'Cart updated successfully!']);
        } catch (InvalidRowIDException $e) {
            return response()->json(['message' => 'The cart does not contain this item.'], 404);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while updating the cart.'], 500);
        }
    }

    public function update_cart(Request $request)
{
   
    // Validate the incoming request data
    $request->validate([
        'cart' => 'required|array',
        'cart.*.product_id' => 'required|exists:products,id',
        'cart.*.qty' => 'required|integer|min:1',  // Ensure qty is a positive integer
    ]);

    // Loop through each item in the cart and update quantities
    foreach ($request->cart as $item) {
        $product = Product::find($item['product_id']);
        
        if ($product) {
            // Update the cart with the new quantity
            Cart::update($item['product_id'], [
                'qty' => $item['qty'],
                'price' => $product->is_sale && $product->discount_price ? $product->discount_price : $product->price,
                'name' => $product->title,
                'weight' => $product->weight ?? 500,
                'options' => [
                    'image' => $product->image,
                    // Include any other options if necessary
                ]
            ]);
        }
    }

    // Generate the updated cart sidebar or any other response data
    $cart_sidebar = $this->generate_cart();  // Assuming this method returns the cart sidebar HTML

    // Return a JSON response with updated cart details
    return response()->json([
        'cart_sidebar' => $cart_sidebar,
        'total_count' => Cart::count(),
        'total_amount' => env('CURRENCY') . number_format(Cart::subtotal(), 2), // Total amount for the cart
    ]);
}
public function updatePrice(Request $request, $productId)
{
    $request->validate([
        'qty' => 'required|integer|min:1',
    ]);

    $product = Product::findOrFail($productId);
    $quantity = $request->qty;

    // Assuming you have some logic to get the new price based on quantity
    // For example, apply a discount if quantity is greater than 10
    if ($quantity >= 10) {
        $newPrice = $product->discount_price; // Use discounted price for bulk purchase
    } else {
        $newPrice = $product->price; // Use regular price
    }

    return response()->json(['price' => $newPrice]);
}

    

    public function remove_cart(Request $request)
    {
        Cart::remove($request->rowId);
        return back();
    }

    public function check_discount()
    {
        $discount = Discount::where('is_active', 1)->first();
        $sale = false;
        if (!is_null($discount)) {
            $discount_from = Carbon::createFromFormat('Y-m-d H:i:s', $discount->from.'00:00:00');
            $discount_to = Carbon::createFromFormat('Y-m-d H:i:s', $discount->to.' 23:59:59');
            if (($discount_from->isPast()) && !($discount_to->isPast())) {
                $sale = true;
            }
            else {
                $sale = false;
            }
        }
        else {
            $sale = false;
        }
        return $sale;
    }

    public function apply_coupon(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|string|max:255',
        ]);

        $code = $request->code;

        $coupon = Coupon::where('code', $code)->orderBy('id', 'DESC')->first();
        if (!is_null($coupon)) {
            $valid_to = Carbon::createFromFormat('Y-m-d H:i:s', $coupon->valid_to.' 23:59:59');
            if ($valid_to->isPast()) {
                session()->flash('invalid','Invalid Coupon');
                return back();
            }
            else {
                $discount = 0;
                if ($coupon->discount == NULL) {
                    $discount = $coupon->amount;
                }
                if ($coupon->amount == NULL) {
                    $discount = ($coupon->discount/100) * Cart::subtotal();
                }
                Session::forget('coupon_discount', 'coupon_code');
                if ($discount > Cart::subtotal()) {
                    session([
                        'coupon_discount' => Cart::subtotal(),
                        'coupon_code' => $coupon->code
                    ]);
                }
                else {
                    session(['coupon_discount' => $discount, 'coupon_code' => $coupon->code]);
                }
                if ($coupon->single_use == 1) {
                    session(['coupon_single_use' => $coupon->single_use]);
                }
                session()->flash('success','Coupon Applied');
                return back();
            }

        }
        else {
            Session::forget('coupon_discount', 'coupon_code');
            session()->flash('invalid','Invalid Coupon');
            return back();
        }
    }

    public function remove_coupon()
    {
        Session::forget('coupon_discount');
        Session::forget('coupon_code');
        return back();
    }

    public function checkout()
    {
        $divisions = Division::all();
        $districts = District::all();
        $thanas = Thana::all();
        $unions = Union::all();
        $countries = Country::all();


//        $district = District::first(); // A district

//        $division = $district->division; // Division for a district

//        $thanas = $district->thanas; // All thana in a district
        $carts = Cart::content();
        $vouchers = Coupon::where('type', 'voucher')->latest()->take(4)->get();
        return view('theam.checkout', compact('carts', 'districts', 'divisions' , 'thanas', 'unions', 'vouchers', 'countries'));
    }

    public function getDivision()
    {
        $this->countryId       = $_GET['id'];
        $this->divisions    = Division::where('country_id', $this->countryId)->get();
        return response()->json($this->divisions);
    }

    public function getDistrict()
    {
        $this->divisionId       = $_GET['id'];
        $this->districts    = District::where('division_id', $this->divisionId)->get();
        return response()->json($this->districts);
    }

    public function getThana()
    {
        $this->districtId       = $_GET['id'];
        $this->thanas    = Thana::where('district_id', $this->districtId)->get();
        return response()->json($this->thanas);
    }
}
