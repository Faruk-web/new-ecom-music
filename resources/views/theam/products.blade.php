@extends('frontand.master')
@section('content')
<section class="main-banner mv-wrap">
        <div data-image-src="{{ asset('/') }}music_source/theme/1.jpg" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
          <div class="page-name mv-caption-style-6">
            <div class="container">
              <div class="mv-title-style-9"><span class="main">product 4 columns</span><img src="{{ asset('/') }}music_source/images/icon/icon_line_polygon_line.png" alt="icon" class="line"/></div>
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
              <li><a href="product-grid-3.html">Product</a></li>
              <li><a>Product 4 columns no sidebar</a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- .main-breadcrumb-->

      <section class="mv-main-body product-grid-4-no-sb-main mv-bg-gray mv-wrap">
        <div class="container">
          <div class="row mv-list-product-wrapper mv-block-style-9">
            <div class="block-9-list mv-list-product">
            @foreach($products as $product)
              <article class="col-xs-6 col-sm-4 col-md-3 item item-product-grid-3 post">
                <div class="item-inner mv-effect-translate-1 mv-box-shadow-gray-1">
                  <div style="background-color: #fff;" class="content-thumb">
                    <div class="thumb-inner mv-effect-relative"><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" title="RST Full Zipped Sweatshirt"><img src="{{asset($product->image)}}" alt="demo" class="mv-effect-item"/></a><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" title="RST Full Zipped Sweatshirt" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

                      <div class="content-message mv-message-style-1">
                        <div class="message-inner"></div>
                      </div>

                      <div onclick="$(this).remove()" class="content-sale-off mv-label-style-2 text-center">
                        <div class="label-2-inner">
                          <ul class="label-2-ul">
                            <li class="number">-25%</li>
                            <li class="text">sale</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="content-default">
                    <div data-rate="true" data-score="5.0" class="content-rate mv-rate text-center">
                      <div class="rate-inner mv-f-14">
                        <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                        <div class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                      </div>
                    </div>

                    @if($product->discount_price)
                              <ins class="content-price" style="color: #7f00ff;">   </ins>
                              <div class="content-price"><span class="new-price">&#2547; {{ $product->discount_price }}</span><del class="old-price text-danger float-right" > &#2547; {{ $product->price }} </del></div>
                              @else
                              <div class="content-price"><span class="new-price">&#2547; {{ $product->price }}</span></div>
                          @endif
                    <div class="content-desc"><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a></div>
                  </div>

                  <div class="content-hover">
                    <div class="content-button mv-btn-group text-center">
                      <div class="group-inner">
                        <button type="button" class="mv-btn mv-btn-style-3 btn-3-h-40 responsive-btn-3-type-1 btn-add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                        <a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" type="button" class="mv-btn mv-btn-style-1 btn-1-h-40 responsive-btn-1-type-1 btn-compare"><span class="btn-inner"><i class="btn-icon fa fa-signal"></i><span class="btn-text">Dedatils</span></span></a>
                        <button type="button" class="mv-btn mv-btn-style-3 btn-3-h-40 responsive-btn-3-type-1 btn-add-to-cart"><i class="fa fa-cart-plus"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <!-- .post-->
              @endforeach
            </div>
          </div>
          <!-- .mv-list-product-wrapper-->

          <div class="mv-pagination-wrapper">
            <div class="mv-pagination-style-1 has-count-post">
              <div class="count-post mv-title-style-10"><span class="number">12</span> Products of <span class="number">5</span> Pages</div>
              <ul class="pagination">
                <li class="prev"><a href="#">prev</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li class="active"><a>3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li class="next"><a href="#">next</a></li>
              </ul>
            </div>
            <!-- .mv-pagination-style-1-->
          </div>
          <!-- .mv-pagination-wrapper-->
        </div>
      </section>
      <!-- .mv-main-body-->
@endsection