@extends('frontand.master')
@section('content')
@php
    $discount = 0;
    if(Session::has('coupon_discount')){
        $discount = Session::get('coupon_discount');
    }
@endphp
<section class="main-banner mv-wrap">
        <div data-image-src="{{ asset('/') }}music_source/images/background/demo_bg_1920x1680.png" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
          <div class="page-name mv-caption-style-6">
            <div class="container">
              <div class="mv-title-style-9"><span class="main">Shopping Cart</span><img src="{{ asset('/') }}music_source/images/icon/icon_line_polygon_line.png" alt="icon" class="line"/></div>
            </div>
          </div>
        </div>
      </section>
      <!-- .main-banner-->
         <section class="main-breadcrumb mv-wrap">
        <div class="mv-breadcrumb-style-1">
          <div class="container">
            <ul class="breadcrumb-1-list">
              <li><a href="home.html"><i class="fa fa-home"></i></a></li>
              <li><a>Shopping Cart</a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- .main-breadcrumb-->

      <section class="mv-main-body cart-main mv-bg-gray mv-wrap">
        <div class="container">
          <div class="cart-inner">
            <div class="cart-block block-cart-table mv-bg-white mv-box-shadow-gray-1 mv-mb-50">
              <div class="mv-table-responsive">
                <table class="mv-table-style-2">
                  <thead>
                    <tr>
                      <th>Product</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($carts as $cart)
                    <tr class="calculate-price-wrapper post">
                      <td>
                        <div class="mv-block-style-24">
                          <div class="block-24-list">
                            <article class="item item-cart">
                              <div class="item-inner">
                                <div class="mv-dp-table">
                                  <div class="mv-dp-table-cell block-24-thumb">
                                    <div class="thumb-inner mv-lightbox-style-1"><img src="{{ asset($cart->options->image) }}" alt="demo"/><a href="{{ asset($cart->options->image) }}" title="Alpinestar ST1 WP Boots" data-lightbox-href="product-detail.html" class="mv-lightbox-item"><i class="icon fa fa-search"></i></a></div>
                                  </div>
                                  <div class="mv-dp-table-cell block-24-main">
                                    <div class="block-24-title"><a href="{{ route('single.product', [$cart->id, Str::slug($cart->name)]) }}" title="Alpinestar ST1 WP Boots" class="mv-overflow-ellipsis">{{ $cart->name }}</a></div>
                                    <div class="block-24-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sint culpa laboriosam doloremque quam, tempora suscipit accusamus laudantium iusto eaque assumenda, cum nisi beatae pariatur temporibus odio. Nisi modi, fugit!</div>
                                  </div>
                                </div>
                              </div>
                            </article>
                          </div>
                        </div>
                      </td>
                      <td> 
                        <div class="mv-font-secondary mv-f-18"><strong>&#2547; <span class="calculate-price-unit">{{ number_format($cart->price) }}</span></strong></div>
                      </td>
                      <td>
                        <div class="mv-spinner-style-2">
                          <input type="text" name="test138" value="{{ $cart->qty }}" class="mv-inputbox mv-only-numeric input-quantity-cart"/>
                        </div>
                      </td>
                      <td> 
                        <div class="mv-font-secondary mv-f-18"><strong> <span class="calculate-price-output">{{number_format($cart->price * $cart->qty)}}</span></strong></div>
                      </td>
                      <td> 
                        <button type="button" title="Remove from Cart" class="mv-btn mv-btn-style-4 fa fa-close btn-delete-product"></button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- .block-cart-table-->

            <div class="cart-block block-button-update mv-bg-white mv-box-shadow-gray-1 mv-mb-50">
              <div class="row list-button">
                <div class="col-xs-12 col-sm-4 col-left">
                  <button type="button" class="mv-btn mv-btn-style-14 mv-btn-block btn-14-h-45">update totals</button>
                </div>
                <div class="col-xs-12 col-sm-4 col-center">
                  <button type="button" class="mv-btn mv-btn-style-6 mv-btn-block btn-6-h-45">update cart</button>
                </div>
                <div class="col-xs-12 col-sm-4 col-right">
                  <a href="{{ route('checkout') }}" class="mv-btn mv-btn-style-5 mv-btn-block btn-5-h-45">proceed to checkout</a>
                </div>
              </div>
            </div>
            <!-- .block-button-update-->

            <div class="cart-block block-coupon-code mv-mb-50">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-coupon-code">
                  <div class="mv-well-style-2 mv-box-shadow-gray-1 mv-bg-white">
                    <div class="well-2-header">
                      <div class="mv-title-style-13">
                        <div class="text-main">Coupon code</div>
                      </div>
                    </div>
                    <div class="well-2-body">
                      <div class="form-apply-coupon">
                        <div class="form-body">
                          <div class="mv-form-group">
                            <div class="mv-field">
                              <input type="text" name="test127" placeholder="Enter your coupon code" data-mv-placeholder="Enter your coupon code" class="mv-inputbox mv-inputbox-style-2"/>
                            </div>
                          </div>
                          <div class="mv-form-group">
                            <div class="mv-field">
                              <button type="button" class="mv-btn mv-btn-style-5 btn-5-h-40">apply coupon</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-calculate-shipping">
                  <div class="mv-well-style-2 mv-box-shadow-gray-1 mv-bg-white">
                    <div class="well-2-header">
                      <div class="mv-title-style-13">
                        <div class="text-main">Calculate shipping</div>
                      </div>
                    </div>
                    <div class="well-2-body">
                      <div class="form-billing-address">
                        <div class="form-body">
                          <div class="mv-form-group">
                            <div class="mv-label"> <strong class="text-uppercase">Country *</strong></div>
                            <div class="mv-field">
                              <label class="mv-select mv-select-style-1 h-40">
                                <select>
                                  <option>Afghanistan</option>
                                  <option>Albania</option>
                                  <option>Algeria</option>
                                  <option>Andorra</option>
                                  <option>Angola</option>
                                  <option>Antigua and Barbuda</option>
                                  <option>Argentina</option>
                                  <option>Armenia</option>
                                  <option>Australia</option>
                                  <option>Austria</option>
                                  <option>Azerbaijan</option>
                                  <option>Bahamas</option>
                                  <option>Bahrain</option>
                                  <option>Bangladesh</option>

                                </select>
                              </label>
                            </div>
                          </div>

                          <div class="mv-form-group">
                            <div class="mv-label"> <strong class="text-uppercase">State / Province *</strong></div>
                            <div class="mv-field">
                              <input type="text" name="test127" class="mv-inputbox mv-inputbox-style-2"/>
                            </div>
                          </div>

                          <div class="mv-form-group">
                            <div class="mv-label"> <strong class="text-uppercase">Zip / Postal code *</strong></div>
                            <div class="mv-field">
                              <input type="text" name="test127" class="mv-inputbox mv-inputbox-style-2"/>
                            </div>
                          </div>
                        </div>
                        <!-- .form-body-->
                      </div>
                      <!-- .form-billing-address-->
                    </div>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-cart-totals">
                  <div class="mv-well-style-2 mv-box-shadow-gray-1 mv-bg-white">
                    <div class="well-2-header">
                      <div class="mv-title-style-13">
                        <div class="text-main">Cart totals</div>
                      </div>
                    </div>
                    <div class="well-2-body">
                      <table class="mv-table-style-1">
                        <thead>
                          <tr>
                            <th class="text-uppercase">Cart Subtotal</th>
                            <th>
                              <div style="font-size: 18px; margin-bottom: -3px;" class="cart-subtotal-number">{{ env('CURRENCY') }}{{ Cart::subtotal() }} {{ env('UAE_CURRENCY') }}</div>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-uppercase title-row">Shipping and hardling</td>
                            <td>
                              <div class="mv-radio-list">
                                <label class="mv-radio mv-radio-style-5">
                                  <input type="radio" name="test138" class="hidden"/><span class="radio-after-input"><span class="radio-visual-box"><span class="icon-checked"></span></span><span class="radio-text">Free Shipping</span></span>
                                </label>
                                <label class="mv-radio mv-radio-style-5">
                                  <input type="radio" name="test138" checked="checked" class="hidden"/><span class="radio-after-input"><span class="radio-visual-box"><span class="icon-checked"></span></span><span class="radio-text">Out Site Dhaka <br/>120</span></span>
                                </label>
                                <label class="mv-radio mv-radio-style-5">
                                  <input type="radio" name="test138" class="hidden"/><span class="radio-after-input"><span class="radio-visual-box"><span class="icon-checked"></span></span><span class="radio-text">Local Delivery: <br/> $60.00</span></span>
                                </label>
                                <label class="mv-radio mv-radio-style-5">
                                  <input type="radio" name="test138" class="hidden"/><span class="radio-after-input"><span class="radio-visual-box"><span class="icon-checked"></span></span><span class="radio-text">Local Pickup <br/> (Free)</span></span>
                                </label>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td class="text-uppercase">Order Total</td>
                            <td> 
                              <div style="font-size: 18px; margin-bottom: -3px;" class="order-total-number">{{ env('CURRENCY') }}{{ Cart::subtotal() }} {{ env('UAE_CURRENCY') }}</div>
                            </td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- .block-coupon-code-->
          </div>
        </div>
      </section>
      <!-- .mv-main-body-->

      <section class="main-newsletter mv-newsletter-style-1 mv-wrap">
        <div style="background-image: url(images/background/demo_bg_1920x1680.png)" class="newsletter-bg">
          <div class="container">
            <form method="GET" class="form-newsletter">
              <label class="hidden-xs mv-label text-right text-uppercase">Newsletter</label>
              <div class="mv-field">
                <div class="mv-inputbox-group">
                  <input type="text" name="test138" placeholder="Subscribe your email here" data-mv-placeholder="Subscribe your email here" class="mv-inputbox mv-inputbox-style-3"/>
                  <div class="inputbox-addon">
                    <button type="button" class="mv-btn mv-btn-block mv-btn-style-13"><span class="btn-icon fa fa-long-arrow-right"></span></button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
      <!-- .mv-newsletter-style-1-->
@endsection