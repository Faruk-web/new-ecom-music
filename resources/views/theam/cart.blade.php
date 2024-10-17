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
                                                    <div class="thumb-inner mv-lightbox-style-1">
                                                        <img src="{{ asset($cart->options->image) }}" alt="demo" />
                                                        <a href="{{ asset($cart->options->image) }}" 
                                                          title="{{ $cart->name }}" 
                                                          class="mv-lightbox-item">
                                                          <i class="icon fa fa-search"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="mv-dp-table-cell block-24-main">
                                                    <div class="block-24-title">
                                                        <a href="{{ route('single.product', [$cart->id, Str::slug($cart->name)]) }}" 
                                                          title="{{ $cart->name }}" 
                                                          class="mv-overflow-ellipsis">
                                                          {{ $cart->name }}
                                                        </a>
                                                    </div>
                                                    <div class="block-24-content">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="mv-font-secondary mv-f-18">
                                <strong>&#2547; <span class="calculate-price-unit">{{ number_format($cart->price, 2) }}</span></strong>
                            </div>
                        </td>
                        <td>
                            <div class="mv-spinner-style-2">
                                <input type="number" name="qty" min="1" max="999" 
                                      value="{{ $cart->qty }}" 
                                      class="mv-inputbox mv-only-numeric input-quantity-cart"
                                      data-id="{{ $cart->rowId }}" 
                                      data-url="{{ route('cart.update', $cart->rowId) }}" />
                            </div>
                        </td>
                        <td>
                            <div class="mv-font-secondary mv-f-18">
                                <strong><span class="calculate-price-output">
                                    {{ number_format($cart->price * $cart->qty, 2) }}
                                </span></strong>
                            </div>
                        </td>
                        <td>
                            <button type="button" title="Remove from Cart" 
                                    class="mv-btn mv-btn-style-4 fa fa-close btn-delete-product">
                            </button>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- .block-cart-table-->

            
            <!-- .block-coupon-code-->
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

