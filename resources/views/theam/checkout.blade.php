@extends('frontand.master')
@section('content')
@php
    $discount = 0;
if(Session::has('coupon_discount')){
    $discount = Session::get('coupon_discount');
}
@endphp
<section class="main-banner mv-wrap">
        <div data-image-src="{{ asset('/') }}music_source/theme/1.jpg" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
          <div class="page-name mv-caption-style-6">
            <div class="container">
              <div class="mv-title-style-9"><span class="main">Checkout</span><img src="{{ asset('/') }}music_source/images/icon/icon_line_polygon_line.png" alt="icon" class="line"/></div>
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
              <li><a>Checkout</a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- .main-breadcrumb-->

      <section class="mv-main-body checkout-main mv-bg-gray mv-wrap">
        <div class="container">
          <div class="checkout-block block-billing-address mv-mb-50">
            <div class="mv-form-style-2 mv-box-shadow-gray-1">
            <form action="{{ route('order.create') }}" method="post" id="placeOrderForm">
            @csrf
              <div class="row">
                <div class="col-sm-6 col-billing-address">
                  <div class="form-billing-address">
                    <div class="form-header">
                      <div class="mv-title-style-13">
                        <div class="text-main">Billing address</div>
                      </div>
                    </div>
                    <!-- .form-header-->

                    <div class="form-body">
                      <div class="mv-form-group">
                        <div class="mv-label"> <strong class="text-uppercase">First Name <span class="mv-color-primary">*</span></strong></div>
                        <div class="mv-field">
                          <div class="mv-inputbox-list">
                            <input type="text" name="first_name" value="{{ optional(Auth::user())->first_name }}" placeholder="First Name" data-mv-placeholder="First Name" class="mv-inputbox mv-inputbox-style-2"/>
                            
                          </div>
                        </div>
                      </div>
                      <div class="mv-form-group">
                        <div class="mv-label"> <strong class="text-uppercase">Last Name <span class="mv-color-primary">*</span></strong></div>
                        <div class="mv-field">
                          <div class="mv-inputbox-list">
                            <input type="text" name="last_name" value="{{ optional(Auth::user())->last_name }}" placeholder="Last Name" data-mv-placeholder="Last Name" class="mv-inputbox mv-inputbox-style-2"/>
                            
                          </div>
                        </div>
                      </div>
                      <div class="mv-form-group">
                        <div class="mv-label"> <strong class="text-uppercase">Phone <span class="mv-color-primary">*</span></strong></div>
                        <div class="mv-field">
                          <div class="mv-inputbox-list">
                          <input type="text" name="phone" value="{{ optional(Auth::user())->phone }}" placeholder="Enter your mobile number" class="mv-inputbox mv-inputbox-style-2"/>
                          </div>
                        </div>
                      </div>
                      <div class="mv-form-group">
                        <div class="mv-label"> <strong class="text-uppercase">Email Address <span class="mv-color-primary">*</span></strong></div>
                        <div class="mv-field">
                          <div class="mv-inputbox-list">
                          <input type="email" name="email" value="{{ optional(Auth::user())->email }}" placeholder="Enter your valid email " class="mv-inputbox mv-inputbox-style-2"/>
                          </div>
                        </div>
                      </div>
                      <div class="mv-form-group">
                        <div class="mv-label"> <strong class="text-uppercase">Country <span class="mv-color-primary">*</span></strong></div>
                        <div class="mv-field">
                          <label class="mv-select mv-select-style-1 h-40">
                          <select name="country_id" onchange="getDivision(this.value)" class="form-control @error('country') is-invalid @enderror" required>
                            <option value="" selected disabled style="background-color: #5fa4cc; color: #0c525d">Please Chose country</option>
                            @foreach($countries as $country)
                            <option value="{{$country->id}}" {{$country->id == 18 ? 'selected' : ''}} style="background-color: #5fa4cc;color: #0c525d">{{$country->name}}</option>
                            @endforeach

                        </select>
                          </label>
                        </div>
                      </div>
                      <div class="mv-form-group">
                        <div class="mv-label"> <strong class="text-uppercase">Division <span class="mv-color-primary">*</span></strong></div>
                        <div class="mv-field">
                          <label class="mv-select mv-select-style-1 h-40">
                          <select name="division_id" id="getDivisionId" onchange="getDistrict(this.value)" class="form-control @error('division_id') is-invalid @enderror" required>
                            <option value="" selected disabled style="background-color: #5fa4cc; color: #0c525d">Please Chose a Division</option>
                            @foreach($divisions as $item)
                            <option value="{{ $item->id }}" style="background-color: #5fa4cc; color: #0c525d">{{ $item->name }}</option>
                            @endforeach

                        </select>
                          </label>
                        </div>
                      </div>
                      <div class="mv-form-group">
                        <div class="mv-label"> <strong class="text-uppercase">State/District <span class="mv-color-primary">*</span></strong></div>
                        <div class="mv-field">
                          <label class="mv-select mv-select-style-1 h-40">
                          <select name="district_id" id="getDistrictId" onchange="getThana(this.value)" class="form-control @error('district_id') is-invalid @enderror" required>
                             <option value="" selected disabled >Please Chose a State/District</option>
                        </select>
                          </label>
                        </div>
                      </div>
                      <div class="mv-form-group">
                        <div class="mv-label"> <strong class="text-uppercase">City/Thana <span class="mv-color-primary">*</span></strong></div>
                        <div class="mv-field">
                          <label class="mv-select mv-select-style-1 h-40">
                          <select  name="thana_id" id="getThanaId" class="form-control @error('thana_id') is-invalid @enderror" required>
                            <option value="" selected disabled>Please Chose a City/Thana</option>
                        </select>
                          </label>
                        </div>
                      </div>
                      <div class="mv-form-group">
                        <div class="mv-label"> <strong class="text-uppercase">House No & Address <span class="mv-color-primary">*</span></strong></div>
                        <div class="mv-field">
                          <div class="mv-inputbox-list">
                            <input type="text" name="house_no_and_name" value="{{ optional(Auth::user())->address }}" placeholder="Street address" data-mv-placeholder="Street address" class="mv-inputbox mv-inputbox-style-2"/>
                            
                          </div>
                        </div>
                      </div>
                      <div class="mv-form-group submit-button mv-mt-30">
                        <button type="submit" class="mv-btn mv-btn-style-5 btn-5-h-45 responsive-btn-5-type-1 btn-save-address">Save address</button>
                      </div>
                    </div>
                    <!-- .form-body-->
                  </div>
                  <!-- .form-billing-address-->
                </div>

                <div class="col-sm-6 col-shipping-address">
                  <div class="form-different-address">
                    <div class="form-header">
                      <div class="mv-title-style-13">
                        <div class="text-main">Shipping address</div>
                      </div>
                    </div>
                    <!-- .form-header-->

                    <div class="form-body">
                      <div class="mv-form-group">
                        <label class="mv-checkbox mv-checkbox-style-1">
                          <input type="checkbox" class="hidden checkbox-different-address"/><span class="checkbox-after-input"><span class="checkbox-visual-box"><span class="icon-checked fa fa-check"></span></span><span class="checkbox-text"><strong>Ship to a different address?</strong></span></span>
                        </label>
                      </div>

                      <div style="display: none;" class="block-different-address">
                        <div class="mv-form-group">
                          <div class="mv-label"> <strong class="text-uppercase">Country <span class="mv-color-primary">*</span></strong></div>
                          <div class="mv-field">
                            <label class="mv-select mv-select-style-1 h-40">
                              <select name="country_id" onchange="getDivision(this.value)" class="form-control @error('country') is-invalid @enderror" required>
                              @foreach($countries as $country)
                                <option value="{{$country->id}}" {{$country->id == 18 ? 'selected' : ''}} style="background-color: #5fa4cc;color: #0c525d">{{$country->name}}</option>
                                @endforeach
                              </select>
                            </label>
                          </div>
                        </div>

                        <div class="mv-form-group">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="mv-label"> <strong class="text-uppercase">First Name <span class="mv-color-primary">*</span></strong></div>
                              <div class="mv-field">
                                <input type="text" name="first_name" value="{{ optional(Auth::user())->first_name }}" class="mv-inputbox mv-inputbox-style-2"/>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="mv-label"> <strong class="text-uppercase">Last Name <span class="mv-color-primary">*</span></strong></div>
                              <div class="mv-field">
                                <input type="text" value="{{ optional(Auth::user())->last_name }}" class="mv-inputbox mv-inputbox-style-2"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mv-form-group">
                          <div class="mv-label"> <strong class="text-uppercase">House No & name <span class="mv-color-primary">*</span></strong></div>
                          <div class="mv-field">
                            <div class="mv-inputbox-list">
                              <input type="text" name="house_no_and_name" value="{{ optional(Auth::user())->address }}" placeholder="House number and name" data-mv-placeholder="House number and name" class="mv-inputbox mv-inputbox-style-2"/>
                              
                            </div>
                          </div>
                        </div>

                        <div class="mv-form-group">
                          <div class="mv-label"> <strong class="text-uppercase">Address <span class="mv-color-primary">*</span></strong></div>
                          <div class="mv-field">
                            <div class="mv-inputbox-list">
                              <input type="text" name="test127" placeholder="Street address" data-mv-placeholder="Street address" class="mv-inputbox mv-inputbox-style-2"/>
                              <input type="text" name="test127" placeholder="Apartment, suite, unite ect. (optinal)" data-mv-placeholder="Apartment, suite, unite ect. (optinal)" class="mv-inputbox mv-inputbox-style-2"/>
                            </div>
                          </div>
                        </div>

                        <div class="mv-form-group">
                          <div class="mv-label"> <strong class="text-uppercase">Town / City <span class="mv-color-primary">*</span></strong></div>
                          <div class="mv-field">
                            <input type="text" name="test127" class="mv-inputbox mv-inputbox-style-2"/>
                          </div>
                        </div>

                        <div class="mv-form-group">
                          <div class="mv-label"> <strong class="text-uppercase">Postcode / Zip</strong></div>
                          <div class="mv-field">
                            <input type="text" name="test127" class="mv-inputbox mv-inputbox-style-2"/>
                          </div>
                        </div>

                        <div class="mv-form-group">
                          <div class="mv-label"> <strong class="text-uppercase">Email Address <span class="mv-color-primary">*</span></strong></div>
                          <div class="mv-field">
                            <input type="email" name="email" value="{{ optional(Auth::user())->email }}" class="mv-inputbox mv-inputbox-style-2"/>
                          </div>
                        </div>

                        <div class="mv-form-group">
                          <div class="mv-label"> <strong class="text-uppercase">Phone <span class="mv-color-primary">*</span></strong></div>
                          <div class="mv-field">
                            <input type="text" name="phone" value="{{ optional(Auth::user())->phone }}" class="mv-inputbox mv-inputbox-style-2"/>
                          </div>
                        </div>
                      </div>
                      <!-- .block-different-address-->

                      <div class="mv-form-group">
                        <div class="mv-label"> <strong class="text-uppercase">Order Notes</strong></div>
                        <div class="mv-field">
                          <textarea name="test127" rows="5" placeholder="Note about your order, e.g. special notes for delivery." data-mv-placeholder="Note about your order, e.g. special notes for delivery." class="mv-inputbox mv-inputbox-style-2 mv-resize-vertical"></textarea>
                        </div>
                      </div>

                      <div class="mv-form-group submit-button mv-mt-30">
                        <button type="submit" class="mv-btn mv-btn-style-5 btn-5-h-45 responsive-btn-5-type-1 btn-save-address">Save address</button>
                      </div>
                    </div>
                    <!-- .form-body-->
                  </div>
                  <!-- .form-shipping-address-->
                </div>
              </div>
             </form>
            </div>
          </div>
          <!-- .block-billing-address-->
          <div class="cart-block block-coupon-code mv-mb-50">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-coupon-code">
                  <div class="mv-well-style-2 mv-box-shadow-gray-1 mv-bg-white">
                    <div class="well-2-header">
                      <div class="mv-title-style-13">
                        <div class="text-main">Coupon code</div>
                      </div>
                    </div>
                    <div class="well-2-body">
                      <div class="form-apply-coupon">
                        <div class="form-body">
                            @if(Session::has('coupon_discount'))
                              @else
                                <tr class="cart-subtotal bb-no">
                                    <td>
                                        <b>Coupon</b>
                                    </td>
                                    <td>
                                        <button onclick="toggleRow('coupon')"><i class="fa fa-arrow-right"></i></button>
                                    </td>
                                </tr>
                                <tr data-rowname="coupon" style="display: none">
                                    <td>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <form class="coupon"  action="{{ route('coupon.apply') }}" method="POST" id="applyForm">
                                                            @csrf
                                                            <input type="text" name="code" class="form-control" placeholder="Enter coupon code here" class="mv-inputbox mv-inputbox-style-2"/>
                                                            @if(Session::has('success'))
                                                                <p class="alert alert-success">{{ Session::get('success') }} </p>
                                                            @endif

                                                            @if(Session::has('invalid'))
                                                                <p class="alert alert-danger">{{ Session::get('invalid') }}</p>
                                                            @endif
                                                            @if(Session::has('coupon_discount'))
                                                                <a href="{{ route('coupon.remove') }}" class="btn btn-dark btn-outline btn-rounded">Remove Coupon</a>
                                                            @endif
                                                        </form>
                                                        <button onclick="event.preventDefault(); document.getElementById('applyForm').submit();" class="mv-btn mv-btn-style-5 btn-5-h-40">Apply Coupon</button>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        </div>
                        <div style="margin-top:30px">
                        @if(Session::has('coupon_discount'))
                                <tr class="cart-subtotal bb-no">
                                    <td>
                                        <b>Voucher/Coupon</b>
                                    </td>
                                    <td>
                                        <p ><a href="{{route('coupon.remove')}}"><b style="color: #00cd5a">{{Session::get('coupon_code')}}</b></a>
                                            <a href="{{route('coupon.remove')}}"><span aria-hidden="true" style="color: red" >&times;</span></a></p>
                                    </td>
                                </tr>
                            @else
                                <tr class="cart-subtotal bb-no">
                                    <td>
                                        <b>Voucher</b>
                                    </td>
                                    <td>
                                        <button onclick="toggleRow('voucher')"><i class="fa fa-arrow-right"></i></button>
                                    </td>
                                </tr>
                                <tr data-rowname="voucher" style="display: none">
                                    <td>
                                        <form class="coupon"  action="{{ route('coupon.apply') }}" method="POST" id="applyForm">
                                            @csrf
                                            @foreach($vouchers as $voucher)
                                                <button type="submit" class="btn btn-warning btn-sm" name="code" value="{{$voucher->code}}" >{{$voucher->code}}</button>
                                            @endforeach
                                            @if(Session::has('success'))
                                                <p class="alert alert-success">{{ Session::get('success') }} </p>
                                            @endif

                                            @if(Session::has('invalid'))
                                                <p class="alert alert-danger">{{ Session::get('invalid') }}</p>
                                            @endif
                                            @if(Session::has('coupon_discount'))
                                                <a href="{{ route('coupon.remove') }}" class="btn btn-dark btn-outline btn-rounded">Remove Coupon</a>
                                            @endif
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        </div>
                      </div>
                    </div>
                  </div>
                 
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

          <div class="checkout-block block-button-place-order mv-box-shadow-gray-1">
            <div class="mv-dp-table align-middle">
              <div class="mv-dp-table-cell col-checkbox">
                <label class="mv-checkbox mv-checkbox-style-6">
                  <input type="checkbox" name="test138" class="hidden"/><span class="checkbox-after-input"><span class="checkbox-visual-box"><span class="icon-checked fa fa-check"></span></span><span class="checkbox-text">I have read and accept the Terms & Conditions</span></span>
                </label>
              </div>
              <div class="mv-dp-table-cell col-button text-right"><a href="#" class="mv-btn mv-btn-style-5 btn-5-h-45 responsive-btn-5-type-1">Place order</a></div>
            </div>
          </div>
          <!-- .block-button-place-order-->
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

      <script>

        function getDivision(id)
        {
            $.ajax({
                method: "GET",
                url: "{{url('/get-division-by-country-id')}}",
                data: {id: id},
                dataType: "JSON",
                success: function (response) {
                    console.log(response);

                    var getDivisionId = $('#getDivisionId');
                    getDivisionId.empty();

                    var option = '';
                    option += '<option value="" style="background-color: #5fa4cc; color: #0c525d"> Please Chose a Division </option>';
                    $.each(response, function (key, value) {
                        option += '<option value=" '+ value.id +' " style="background-color: #5fa4cc; color: #0c525d"> ' + value.name+ ' </option>';
                    });

                    getDivisionId.append(option);
                }
            });
        }

    </script>

    <script>

        function getDistrict(id)
        {
            $.ajax({
                method: "GET",
                url: "{{url('/get-district-by-division-id')}}",
                data: {id: id},
                dataType: "JSON",
                success: function (response) {
                    console.log(response);

                    var getDistrictId = $('#getDistrictId');
                    getDistrictId.empty();

                    var option = '';
                    option += '<option value="" style="background-color: #5fa4cc; color: #0c525d"> Please Chose a State/District </option>';
                    $.each(response, function (key, value) {
                        option += '<option value=" '+ value.id +' " style="background-color: #5fa4cc; color: #0c525d"> ' + value.name+ ' </option>';
                    });

                    getDistrictId.append(option);
                }
            });
        }

    </script>


    <script>

        function getThana(id)
        {
            $.ajax({
                method: "GET",
                url: "{{url('/get-thana-by-district-id')}}",
                data: {id: id},
                dataType: "JSON",
                success: function (response) {
                    console.log(response);

                    var getThanaId = $('#getThanaId');
                    getThanaId.empty();

                    var option = '';
                    option += '<option value="" style="background-color: #5fa4cc; color: #0c525d"> Please Chose a City/Thana </option>';
                    $.each(response, function (key, value) {
                        option += '<option value=" '+ value.id +' " style="background-color: #5fa4cc; color: #0c525d"> ' + value.name+ ' </option>';
                    });

                    getThanaId.append(option);
                }
            });
        }

    </script>

@endsection
