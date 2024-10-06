@extends('frontand.master')
@section('content')
<section class="main-banner mv-wrap">
        <div data-image-src="{{ asset('/') }}music_source/theme/1.jpg" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
          <div class="page-name mv-caption-style-6">
            <div class="container">
              <div class="mv-title-style-9"><span class="main">product detail</span><img src="{{ asset('/') }}music_source/images/icon/icon_line_polygon_line.png" alt="icon" class="line"/></div>
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
              <li><a>Product detail</a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- .main-breadcrumb-->

      <section class="mv-main-body product-detail-main mv-bg-gray mv-wrap">
        <div class="container">
          <div class="post">
            <div class="block-info mv-box-shadow-gray-1">
              <div class="mv-block-style-27">
                <div class="mv-col-wrapper">
                  <div class="mv-col-left block-27-col-slider">
                    <div class="mv-block-style-26">
                      <div class="product-detail-slider mv-slick-slide mv-lightbox-style-1">
                        <div class="block-26-gallery-main">
                          <div class="slider gallery-main">
                          @foreach($product->variation as $image)
                            <div class="slick-slide">
                              <div class="slick-slide-inner"><a href="{{ asset($image->variation_image) }}" title="" class="mv-lightbox-item"><img src="{{ asset($image->variation_image) }}" alt="demo" class="block-26-main-img"/></a></div>
                            </div>
                            <!-- .slick-slide-->
                            @endforeach
                          </div>
                        </div>
                        <!-- .block-26-gallery-main-->

                        <div class="block-26-gallery-thumbs">
                          <div class="block-26-gallery-thumbs-inner">
                            <div class="slider gallery-thumbs">
                            @foreach($product->variation as $image)
                              <div class="slick-slide">
                                <div class="slick-slide-inner mv-box-shadow-gray-2"><img src="{{ asset($image->variation_image) }}" alt="demo" class="block-26-thumbs-img"/></div>
                              </div>
                              @endforeach
                            </div>

                            <div class="slick-slide-control"></div>
                          </div>
                        </div>
                        <!-- .block-26-gallery-thumbs-->
                      </div>
                      <!-- .product-detail-slider-->
                    </div>
                    <!-- .mv-block-style-26-->

                    <div onclick="$(this).remove()" class="block-27-sale-off mv-label-style-2 text-center">
                      <div class="label-2-inner">
                        <ul class="label-2-ul">
                          <li class="number">-25%</li>
                          <li class="text">sale</li>
                        </ul>
                      </div>
                    </div>

                    <div><img style="height: 451px;width: 535px;" src="{{ asset($product->image) }}" alt="demo" onclick="$(this).remove()" class="block-27-logo"/></div>
                  </div>

                  <div class="mv-col-right block-27-col-info">
                    <div class="col-info-inner">
                      <div class="block-27-info">
                        <div class="block-27-title">{{ $product->title }}</div>

                        <div class="block-27-rate clearfix">
                          <div class="dropdown mv-dropdown-style-1 script-dropdown-2"><a href="#customer-review" class="btn-dropdown"><span data-rate="true" data-score="4.6" class="mv-rate"><span class="rate-inner mv-f-14 text-left"><span class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></span><span class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></span></span><span class="rate-score">(<span class="score-number">4.4</span>)</span></span></a>
                            <div class="dropdown-menu">
                              <div class="dropdown-menu-inner">
                                <div class="mv-block-style-42">
                                  <div class="block-42-header text-center">4.4 out of 5 stars</div>
                                  <div class="block-42-body">
                                    <div class="block-42-list">

                                      <div class="item">
                                        <div class="mv-dp-table align-middle">
                                          <div class="mv-dp-table-cell col-type-star">
                                            <div class="title-type-star"> <strong>5 star</strong></div>
                                          </div>
                                          <div class="mv-dp-table-cell col-progress-bar">
                                            <div class="mv-progress-bar thick-bars">
                                              <div class="progress">
                                                <div style="width: 69%;" class="progress-bar-wrap">
                                                  <div class="progress-bar progress-bar-primary mv-animated"></div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="mv-dp-table-cell col-percent">
                                            <div class="title-percent">69%</div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- .item-->

                                      <div class="item">
                                        <div class="mv-dp-table align-middle">
                                          <div class="mv-dp-table-cell col-type-star">
                                            <div class="title-type-star"> <strong>4 star</strong></div>
                                          </div>
                                          <div class="mv-dp-table-cell col-progress-bar">
                                            <div class="mv-progress-bar thick-bars">
                                              <div class="progress">
                                                <div style="width: 11%;" class="progress-bar-wrap">
                                                  <div class="progress-bar progress-bar-primary mv-animated"></div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="mv-dp-table-cell col-percent">
                                            <div class="title-percent">11%</div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- .item-->

                                      <div class="item">
                                        <div class="mv-dp-table align-middle">
                                          <div class="mv-dp-table-cell col-type-star">
                                            <div class="title-type-star"> <strong>3 star</strong></div>
                                          </div>
                                          <div class="mv-dp-table-cell col-progress-bar">
                                            <div class="mv-progress-bar thick-bars">
                                              <div class="progress">
                                                <div style="width: 6%;" class="progress-bar-wrap">
                                                  <div class="progress-bar progress-bar-primary mv-animated"></div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="mv-dp-table-cell col-percent">
                                            <div class="title-percent">6%</div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- .item-->

                                      <div class="item">
                                        <div class="mv-dp-table align-middle">
                                          <div class="mv-dp-table-cell col-type-star">
                                            <div class="title-type-star"> <strong>2 star</strong></div>
                                          </div>
                                          <div class="mv-dp-table-cell col-progress-bar">
                                            <div class="mv-progress-bar thick-bars">
                                              <div class="progress">
                                                <div style="width: 4%;" class="progress-bar-wrap">
                                                  <div class="progress-bar progress-bar-primary mv-animated"></div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="mv-dp-table-cell col-percent">
                                            <div class="title-percent">4%</div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- .item-->

                                      <div class="item">
                                        <div class="mv-dp-table align-middle">
                                          <div class="mv-dp-table-cell col-type-star">
                                            <div class="title-type-star"> <strong>1 star</strong></div>
                                          </div>
                                          <div class="mv-dp-table-cell col-progress-bar">
                                            <div class="mv-progress-bar thick-bars">
                                              <div class="progress">
                                                <div style="width: 10%;" class="progress-bar-wrap">
                                                  <div class="progress-bar progress-bar-primary mv-animated"></div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="mv-dp-table-cell col-percent">
                                            <div class="title-percent">10%</div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- .item-->
                                    </div>
                                  </div>
                                  <div class="block-42-footer text-center"><a href="#customer-review" class="btn-see-all">See all 405 reviews &nbsp;<i class="fa fa-caret-right"></i></a></div>
                                </div>
                                <!-- .mv-block-style-42-->
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="block-27-price">
                        @if($product->discount_price)
                              <ins class="content-price" style="color: #7f00ff;">   </ins>
                              <div class="content-price"><span class="new-price">&#2547; {{ $product->discount_price }}</span><del class="old-price text-danger float-right" > &#2547; {{ $product->price }} </del></div>
                              @else
                              <div class="content-price"><span class="new-price">&#2547; {{ $product->price }}</span></div>
                          @endif
                        </div>

                        <div class="block-27-desc">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc finibus sit amet ligula id gravida. Curabitur quis orci non leo varius dapibus in ornare tortor.</div>

                        <div class="block-27-table-info">
                          <form method="GET">
                            <table>
                              <tr>
                                <td>Select size:</td>
                                <td>
                                  <div class="mv-list-inline-style-1">
                                    <ul class="list-inline-1">
                                    @if($product->type == 'variation')
                                    <li class="active"><a href="#" class="mv-btn mv-btn-style-8">XXL</a></li>
                                      <li><a href="#" class="mv-btn mv-btn-style-8">XL</a></li>
                                      <li><a href="#" class="mv-btn mv-btn-style-8">L</a></li>
                                      <li><a href="#" class="mv-btn mv-btn-style-8">M</a></li>
                                      <li><a href="#" class="mv-btn mv-btn-style-8">S</a></li>
                                        @else
                                      <li class="active"><a href="#" class="mv-btn mv-btn-style-8">XXL</a></li>
                                      <li><a href="#" class="mv-btn mv-btn-style-8">XL</a></li>
                                      <li><a href="#" class="mv-btn mv-btn-style-8">L</a></li>
                                      <li><a href="#" class="mv-btn mv-btn-style-8">M</a></li>
                                      <li><a href="#" class="mv-btn mv-btn-style-8">S</a></li>
                                      @endif
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>Color:</td>
                                <td>
                                  <div class="mv-list-inline-style-1 space-10">
                                    <ul class="list-inline-1">
                                      <li class="active"><a href="#"><span style="background-color: #ffb535" class="icon-color"></span></a></li>
                                      <li><a href="#"><span style="background-color: #222222" class="icon-color"></span></a></li>
                                      <li><a href="#"><span style="background-color: #eeeeee" class="icon-color"></span></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>Quantity:</td>
                                <td>
                                  <div class="mv-spinner-style-1 input-quantity-wrapper">
                                   <!-- HTML for Quantity Buttons and Input -->
                                    <input type="button" value="-" onclick="quickViewQuantityDec(event);" class="button-minus faruk_qty" data-field="quantity">
                                    <input type="text" step="1" readonly max="" value="1" name="qty" class="quantity-field">
                                    <input type="button" value="+" onclick="quickViewQuantityIncr(event)" class="button-plus faruk_qty" data-field="quantity">

                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>Categories:</td>
                                <td>
                                  <div class="mv-list-inline-style-2">
                                    <ul class="list-inline-2">
                                      <li class="active"><a href="#" class="mv-btn">Women Shirts</a></li>
                                      <li><a href="#" class="mv-btn">Tops</a></li>
                                      <li><a href="#" class="mv-btn">Shirts & Blouses</a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>Tags: </td>
                                <td>
                                  <div class="mv-list-inline-style-2">
                                    <ul class="list-inline-2">
                                      <li><a href="#" class="mv-btn">Women</a></li>
                                      <li><a href="#" class="mv-btn">Black</a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </form>
                        </div>
                      </div>
                      <!-- .block-27-info-->

                      <div class="block-27-message content-message mv-message-style-1">
                        <div class="message-inner"></div>
                      </div>
                      <!-- .block-27-message-->
                    </div>

                    <div class="block-27-button">
                      <div class="mv-dp-table align-middle">
                        <div class="mv-dp-table-cell">
                          <div class="mv-btn-group text-left">
                            <div class="group-inner">
                            <div class="group-inner">
                                  <!-- Add to Cart Button -->
                                    <button type="button" onclick="addToCart({{$product->id}})" class="mv-btn mv-btn-style-1"><span class="btn-inner"><i class="btn-icon fa fa-cart-plus"></i><span class="btn-text">add to cart</span></span></button>
                                    <button type="button" onclick="addToWishlist({{$product->id}})" class="mv-btn mv-btn-style-1"><span class="btn-inner"><i class="btn-icon fa fa-heart-o"></i><span class="btn-text">wishlist</span></span></button>
                                    <!-- Add to Wishlist Button -->
                              </div>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- .mv-block-style-27-->
            </div>
            <!-- .block-info-->

            <div class="row block-info-more">
              <div class="col-sm-6 col-specification">
                <div class="specification-main mv-tab-style-3 mv-box-shadow-gray-1 mv-bg-white">
                  <ul role="tablist" class="tab-list nav nav-tabs">
                    <li role="presentation" class="active"><a href="#tab31" aria-controls="tab31" role="tab" data-toggle="tab">Description</a></li>
                    <li role="presentation"><a href="#tab32" aria-controls="tab32" role="tab" data-toggle="tab">Specification</a></li>
                    <li role="presentation"><a href="#tab33" aria-controls="tab33" role="tab" data-toggle="tab">Information</a></li>
                  </ul>

                  <div class="tab-content">
                    <div id="tab31" role="tabpanel" class="tab-pane active">
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                      <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc finibus sit amet ligula id gravida. Curabitur quis orci non leo varius dapibus in ortnare tortor. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                      <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc finibus sit amet ligula id gravida. Curabitur quis orci non leo varius dapibus in ortnare tortor. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                      <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc finibus sit amet ligula id gravida. Curabitur quis orci non leo varius dapibus in ortnare tortor. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                      <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc finibus sit amet ligula id gravida. Curabitur quis orci non leo varius dapibus in ortnare tortor. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    </div>
                    <div id="tab32" role="tabpanel" class="tab-pane">
                      <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc finibus sit amet ligula id gravida. Curabitur quis orci non leo varius dapibus in ortnare tortor. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div id="tab33" role="tabpanel" class="tab-pane">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint delectus magnam sunt. Aliquid laboriosam ipsa, fugiat sequi, corporis nesciunt reiciendis deleniti consequatur quos possimus iusto commodi officiis tempora porro et.</p>
                    </div>
                  </div>
                </div>
                <!-- .specification-main-->
              </div>

              <div id="customer-review" class="col-sm-6 col-review">
                <div class="review-main mv-well-style-1 mv-box-shadow-gray-1 mv-bg-white">
                  <div class="well-1-header">
                    <div class="mv-title-style-11">customer review</div>
                  </div>
                  <div class="well-1-body">
                    <div class="review-profile">
                      <div class="mv-block-style-37">
                        <div class="block-37-thumb"><a href="#"><span style="background-image: url(images/avatar/avatar_100x100.png);" class="block-37-thumb-img"></span></a></div>
                        <div class="block-37-main">
                          <div class="block-37-name"><a href="#">Roman Travis</a></div>
                        </div>
                      </div>
                      <!-- .mv-block-style-37-->
                    </div>
                    <!-- .review-profile-->

                    <div class="review-rating-field">
                      <form method="GET" class="form-review">
                        <div class="mv-form-group rating-field">
                          <div class="mv-field">
                            <div class="mv-rate enabled-rating"><strong class="label-rating">Rate this product: </strong>
                              <div class="rate-inner mv-f-28 text-left">
                                <div class="stars-wrapper"><a class="item-rate"></a><a class="item-rate"></a><a class="item-rate"></a><a class="item-rate"></a><a class="item-rate"></a></div>
                                <input type="hidden" name="test139" class="input-score-rate"/>
                              </div><span class="rate-text"></span>
                            </div>
                          </div>
                        </div>
                        <div class="mv-form-group">
                          <div class="mv-field">
                            <textarea name="test138" data-mv-placeholder="Description" placeholder="Description" class="mv-resize-vertical mv-inputbox mv-inputbox-style-1 textarea-desc"></textarea>
                          </div>
                        </div>
                        <div class="mv-form-group text-right">
                          <div class="mv-field">
                            <button type="submit" class="mv-btn mv-btn-style-5 responsive-btn-5-type-2">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!--.review-rating-field-->

                    <div class="review-list mv-block-style-28">
                      <div class="block-28-list">
                        <div class="item">
                          <div class="mv-dp-table">
                            <div class="mv-dp-table-cell block-28-thumb"><a href="#"><span style="background-image: url(images/avatar/avatar_100x100.png);" class="block-28-thumb-img"></span></a></div>
                            <div class="mv-dp-table-cell block-28-main">
                              <div class="block-28-main-header">
                                <div class="block-28-name"><a href="#">Jonathan Doe</a></div><span class="block-28-date">December 21, 2016</span>
                                <div data-rate="true" data-score="4" class="block-28-rate mv-rate">
                                  <div class="rate-inner mv-f-14 text-left">
                                    <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                    <div class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                  </div>
                                </div>
                              </div>
                              <div class="block-28-desc">Proin est purus, elementum eu tempus ut, molestie vel magnaauctor nibh. </div>
                            </div>
                          </div>
                        </div>
                        <!-- .item-->

                        <div class="item">
                          <div class="mv-dp-table">
                            <div class="mv-dp-table-cell block-28-thumb"><a href="#"><span style="background-image: url(images/avatar/avatar_100x100.png);" class="block-28-thumb-img"></span></a></div>
                            <div class="mv-dp-table-cell block-28-main">
                              <div class="block-28-main-header">
                                <div class="block-28-name"><a href="#">Louis Higgins</a></div>
                                <div class="block-28-date">December 01, 2016</div>
                                <div data-rate="true" data-score="5" class="block-28-rate mv-rate">
                                  <div class="rate-inner mv-f-14 text-left">
                                    <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                    <div class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                  </div>
                                </div>
                              </div>
                              <div data-mv-resize-height="none" class="block-28-desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta atque, voluptatem sapiente odit aperiam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta atque, voluptatem sapiente odit aperiam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta atque, voluptatem sapiente odit aperiam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta atque, voluptatem sapiente odit aperiam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta atque, voluptatem sapiente odit aperiam</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- .item-->
                      </div>
                    </div>
                    <!-- .review-list-->

                    <div class="review-pagination">
                      <div class="mv-pagination-style-2 text-right">
                        <ul class="pagination">
                          <li class="first"><a href="#" class="fa fa-angle-double-left"></a></li>
                          <li class="prev"><a href="#" class="fa fa-angle-left"></a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li class="active"><a>3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li class="next"><a href="#" class="fa fa-angle-right"></a></li>
                          <li class="last"><a href="#" class="fa fa-angle-double-right"></a></li>
                        </ul>
                      </div>
                      <!-- .mv-pagination-style-2-->
                    </div>
                    <!-- .review-pagination-->
                  </div>
                </div>
                <!-- .review-main-->
              </div>
            </div>
            <!-- .block-info-more-->
          </div>
          <!-- .post-->
        </div>
      </section>
      <!-- .mv-main-body-->

      <section class="product-detail-related mv-wrap">
        <div class="container">
          <div class="related-title mv-title-style-3">
            <div class="title-3-text"><span class="behind">related products</span><span class="main">related products</span></div>
          </div>
          <!-- .related-title-->

          <div class="related-main">
            <div class="related-list mv-block-style-9">
              <div class="block-9-list">
              @foreach($similar_products as $product)
                <article class="col-xs-6 col-sm-4 col-md-3 item post">
                  <div class="item-inner mv-effect-translate-1">
                    <div class="content-thumb">
                      <div class="thumb-inner mv-effect-relative"><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" title="RST Full Zipped Sweatshirt"><img src="{{asset($product->image)}}" alt="demo" class="mv-effect-item"/></a>
                        <div onclick="$(this).remove()" class="content-sale-off mv-label-style-2 text-center">
                          <div class="label-2-inner">
                            <ul class="label-2-ul">
                              <li class="number">-25%</li>
                              <li class="text">sale</li>
                            </ul>
                          </div>
                        </div>

                        <div class="content-message mv-message-style-1">
                          <div class="message-inner"></div>
                        </div>
                      </div>

                      <div class="content-hover">
                        <div class="content-button mv-btn-group text-center">
                          <div class="group-inner">
                            <button type="button" class="mv-btn mv-btn-style-3 btn-3-h-40 responsive-btn-3-type-1 btn-add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="mv-btn mv-btn-style-3 btn-3-h-40 responsive-btn-3-type-1 btn-add-to-cart"><i class="fa fa-cart-plus"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="content-default">
                      <div data-rate="true" data-score="5.0" class="content-rate mv-rate text-center">
                        <div class="rate-inner mv-f-14 text-left">
                          <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                          <div class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                        </div>
                      </div>

                      <div class="content-price"><span class="new-price">$ 128.24</span><span class="old-price">$ 170.99</span></div>
                      <div class="content-desc"><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" title="RST Full Zipped Sweatshirt" class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a></div>
                    </div>
                  </div>
                </article>
                <!-- .post-->
                @endforeach
              </div>
            </div>
          </div>
          <!-- .related-main-->
        </div>
      </section>
      <!-- .product-detail-related-->

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
    

@endsection