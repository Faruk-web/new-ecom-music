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
                              <input type="text" name="last_name" value="{{ optional(Auth::user())->last_name }}" class="mv-inputbox mv-inputbox-style-2"/>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="mv-form-group">
                        <div class="mv-label"> <strong class="text-uppercase">Company Name</strong></div>
                        <div class="mv-field">
                          <input type="text" name="test127" class="mv-inputbox mv-inputbox-style-2"/>
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
                          <input type="text" name="test127" class="mv-inputbox mv-inputbox-style-2"/>
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
                          <div class="mv-label"> <strong class="text-uppercase">Company Name</strong></div>
                          <div class="mv-field">
                            <input type="text" name="test127" class="mv-inputbox mv-inputbox-style-2"/>
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

          <div class="checkout-block block-coupon-code">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4 col-coupon-code mv-mb-50">
                <div class="mv-well-style-2 mv-box-shadow-gray-1 mv-bg-white">
                  <div class="well-2-header">
                    <div class="mv-title-style-13">
                      <div class="text-main">Coupon code</div>
                    </div>
                  </div>
                  <div class="well-2-body">
                    <table class="mv-table-style-1">
                      <thead>
                        <tr>
                          <th class="text-uppercase">Product</th>
                          <th class="text-uppercase">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Black Beanie Skate Girl x 1</td>
                          <td>$ 1200.00</td>
                        </tr>
                        <tr>
                          <td>Classic Black Telephone x 2  </td>
                          <td>$ 1200.00</td>
                        </tr>
                        <tr>
                          <td>Black and White Varsity Jacket x 1</td>
                          <td>$ 1200.00</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td class="text-uppercase">Cart Subtotal</td>
                          <td class="text-uppercase">$4600.00</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-4 col-calculate-shipping mv-mb-50">
                <div class="mv-well-style-2 mv-box-shadow-gray-1 mv-bg-white">
                  <div class="well-2-header">
                    <div class="mv-title-style-13">
                      <div class="text-main">Calculate shipping</div>
                    </div>
                  </div>
                  <div class="well-2-body">
                    <table class="mv-table-style-1">
                      <thead>
                        <tr>
                          <th class="text-uppercase">Shipping and hardling</th>
                          <th>
                            <div class="mv-radio-list">
                              <label class="mv-radio mv-radio-style-5">
                                <input type="radio" name="test138" checked="checked" class="hidden"/><span class="radio-after-input"><span class="radio-visual-box"><span class="icon-checked"></span></span><span class="radio-text">Flat Rate: <br/> $100.00</span></span>
                              </label>
                              <label class="mv-radio mv-radio-style-5">
                                <input type="radio" name="test138" class="hidden"/><span class="radio-after-input"><span class="radio-visual-box"><span class="icon-checked"></span></span><span class="radio-text">Free Shipping</span></span>
                              </label>
                              <label class="mv-radio mv-radio-style-5">
                                <input type="radio" name="test138" class="hidden"/><span class="radio-after-input"><span class="radio-visual-box"><span class="icon-checked"></span></span><span class="radio-text">International Delivery: <br/> $175.00</span></span>
                              </label>
                              <label class="mv-radio mv-radio-style-5">
                                <input type="radio" name="test138" class="hidden"/><span class="radio-after-input"><span class="radio-visual-box"><span class="icon-checked"></span></span><span class="radio-text">Local Delivery: <br/> $60.00</span></span>
                              </label>
                              <label class="mv-radio mv-radio-style-5">
                                <input type="radio" name="test138" class="hidden"/><span class="radio-after-input"><span class="radio-visual-box"><span class="icon-checked"></span></span><span class="radio-text">Local Pickup <br/> (Free)</span></span>
                              </label>
                            </div>
                          </th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <td class="text-uppercase">Order Total</td>
                          <td> 
                            <div style="font-size: 24px; margin-bottom: -3px;">$ 992.00</div>
                          </td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-4 col-cart-totals mv-mb-50">
                <div class="mv-well-style-2 mv-box-shadow-gray-1 mv-bg-white">
                  <div class="well-2-header">
                    <div class="mv-title-style-13">
                      <div class="text-main">Cart totals</div>
                    </div>
                  </div>
                  <div class="well-2-body">
                    <div class="mv-block-style-38">
                      <div class="block-38-list method-payment-list">
                        <div class="item">
                          <button type="button" class="block-38-header mv-btn mv-btn-style-4 btn-choose-method"><span class="block-38-visual-box"><span class="icon-checked"></span></span><span class="block-38-title"><span class="title-text">Direct Bank Transfer</span></span><span class="block-38-minus-plus fa fa-plus"></span></button>

                          <div class="block-38-body">
                            <div class="block-38-content">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</div>
                            <div class="radio-list">
                              <div class="radio-children">
                                <input type="radio" name="test678" checked="checked" class="hidden"/>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="item">
                          <button type="button" class="block-38-header mv-btn mv-btn-style-4 btn-choose-method"><span class="block-38-visual-box"><span class="icon-checked"></span></span><span class="block-38-title"><span class="title-text">Cheque Payment</span></span><span class="block-38-minus-plus fa fa-plus"></span></button>

                          <div class="block-38-body">
                            <div class="block-38-content">A cheque is a written document instructing a bank or building society to debit your account and pay someone. You can pay money in and out of your account with a cheque.</div>
                            <div class="radio-list">
                              <div class="radio-children">
                                <input type="radio" name="test678" class="hidden"/>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="item">
                          <button type="button" class="block-38-header mv-btn mv-btn-style-4 btn-choose-method"><span class="block-38-visual-box"><span class="icon-checked"></span></span><span class="block-38-title"><span class="title-text">PayPal</span><img src="images/demo/demo_134.png" alt="demo" class="title-img"/></span><span class="block-38-minus-plus fa fa-plus"></span></button>

                          <div class="block-38-body">
                            <div class="radio-list">
                              <label class="radio-children mv-radio mv-radio-style-5">
                                <input type="radio" name="test678" class="hidden"/><span class="radio-after-input"><span class="radio-visual-box"><span class="icon-checked"></span></span><span class="radio-text"><img src="images/icon/icon_master_card_2.png" alt="icon"/></span></span>
                              </label>
                              <label class="radio-children mv-radio mv-radio-style-5">
                                <input type="radio" name="test678" class="hidden"/><span class="radio-after-input"><span class="radio-visual-box"><span class="icon-checked"></span></span><span class="radio-text"><img src="images/icon/icon_maestro.png" alt="icon"/></span></span>
                              </label>
                              <label class="radio-children mv-radio mv-radio-style-5">
                                <input type="radio" name="test678" class="hidden"/><span class="radio-after-input"><span class="radio-visual-box"><span class="icon-checked"></span></span><span class="radio-text"><img src="images/icon/icon_visa_2.png" alt="icon"/></span></span>
                              </label>
                              <label class="radio-children mv-radio mv-radio-style-5">
                                <input type="radio" name="test678" class="hidden"/><span class="radio-after-input"><span class="radio-visual-box"><span class="icon-checked"></span></span><span class="radio-text"><img src="images/icon/icon_paypal_2.png" alt="icon"/></span></span>
                              </label>
                              <label class="radio-children mv-radio mv-radio-style-5">
                                <input type="radio" name="test678" class="hidden"/><span class="radio-after-input"><span class="radio-visual-box"><span class="icon-checked"></span></span><span class="radio-text"><img src="images/icon/icon_american_express_2.png" alt="icon"/></span></span>
                              </label>
                              <label class="radio-children mv-radio mv-radio-style-5">
                                <input type="radio" name="test678" class="hidden"/><span class="radio-after-input"><span class="radio-visual-box"><span class="icon-checked"></span></span><span class="radio-text"><img src="images/icon/icon_amazon.png" alt="icon"/></span></span>
                              </label>
                              <label class="radio-children mv-radio mv-radio-style-5">
                                <input type="radio" name="test678" class="hidden"/><span class="radio-after-input"><span class="radio-visual-box"><span class="icon-checked"></span></span><span class="radio-text"><img src="images/icon/icon_discover.png" alt="icon"/></span></span>
                              </label>
                              <label class="radio-children mv-radio mv-radio-style-5">
                                <input type="radio" name="test678" class="hidden"/><span class="radio-after-input"><span class="radio-visual-box"><span class="icon-checked"></span></span><span class="radio-text"><img src="images/icon/icon_bank_transfer.png" alt="icon"/></span></span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- .mv-block-style-38-->
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

@endsection