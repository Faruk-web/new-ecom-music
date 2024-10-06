@extends('frontand.master')
@section('content')
<section class="main-banner mv-wrap">
        <div data-image-src="{{ asset('/') }}music_source/images/background/demo_bg_1920x1680.png" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
          <div class="page-name mv-caption-style-6">
            <div class="container">
              <div class="mv-title-style-9"><span class="main">Complete</span><img src="{{ asset('/') }}music_source/images/icon/icon_line_polygon_line.png" alt="icon" class="line"/></div>
            </div>
          </div>
        </div>
      </section>
      <section class="mv-main-body cart-empty-main mv-bg-gray mv-wrap">
        <div class="container">
          <div class="cart-empty-inner">
            <div class="mv-well-style-3 mv-box-shadow-gray-1 mv-bg-white mv-mb-30">
              <div class="well-3-header text-center">
                <div class="well-header-icon"><i class="icon-fa fa fa-shopping-cart"></i></div>
                <div class="well-header-text">Your Order is successfully completed</div>
              </div>
              <div class="well-3-body">
                <ul class="well-3-list">
                  <li>Your shopping cart selection will be automatically removed in-7 days.</li>
                  <li>Explicabo expedita atque ullam tempora harum temporibus unde nam aliquam velit iste</li>
                  <li>Explicabo expedita atque ullam tempora harum temporibus unde nam aliquam velit iste</li>
                  <li>Explicabo expedita atque ullam tempora harum temporibus unde nam aliquam velit iste</li>
                  <li>Explicabo expedita atque ullam tempora harum temporibus unde nam aliquam velit iste</li>
                </ul>
              </div>
            </div>

            <div class="cart-empty-footer text-center"><a href="product-grid-3.html" class="mv-btn mv-btn-style-1 responsive-btn-1-type-2"><span class="btn-inner"><i class="btn-icon fa fa-cart-plus"></i><span class="btn-text">continue shopping</span></span></a></div>
          </div>
        </div>
      </section>
      <!-- .mv-main-body-->
@endsection