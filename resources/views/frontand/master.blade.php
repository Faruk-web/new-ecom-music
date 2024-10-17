
    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Home 3 - Motor Vehikal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('/') }}music_source/images/icon/favicon.ico" type="image/x-icon">

    <!-- Web Fonts-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">

    <!-- Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}music_source/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}music_source/libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}music_source/libs/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}music_source/libs/superfish-menu/css/superfish.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}music_source/libs/slick-sider/slick.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}music_source/libs/slick-sider/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}music_source/libs/swiper-sider/dist/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}music_source/libs/magnific-popup/dist/magnific-popup.min.css">

    <!-- Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}music_source/css/main.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}music_source/css/shortcodes.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}music_source/css/home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}music_source/css/style-selector.css">
    <link id="style-main-color" rel="stylesheet" type="text/css" href="{{ asset('/') }}music_source/css/color/color1.css">

  </head>
  <body>
    <div class="mv-site">
      

    @include('frontand.body.header')
    <!-- navi wrapper End -->
    <!-- slider wrapper start -->
    @yield('content')
   
    @include('frontand.body.footer')

    <div class="off-canvas-wrapper-left hidden-md hidden-lg">
        <div class="off-canvas-left">
          <div class="off-canvas-header">
            <button class="btn-close-off-canvas click-close-off-canvas">x</button>
          </div>
          <div class="off-canvas-body">
            <nav class="main-nav">
              <ul class="nav sf-menu expand-all">
                <li class="mega-columns"><a href="{{route('index')}}"><span class="menu-text">Home <i class="menu-icon fa fa-angle-down"></i></span></a>
                </li>
                <li><a href="#"><span class="menu-text">Product <i class="menu-icon fa fa-angle-down"></i></span></a>
                  <ul>
                    <li><a href="product-list.html">Product List</a></li>
                    <li><a href="product-grid-2.html">Product Grid 2</a></li>
                    <li><a href="product-grid-3.html">Product Grid 3</a></li>
                    <li><a href="product-grid-3-no-sb.html">Product Grid 3 No Sidebar</a></li>
                    <li><a href="product-grid-4-no-sb.html">Product Grid 4 No Sidebar</a></li>
                    <li><a href="product-grid-5-fullwidth.html">Product Grid 5 Fullwidth</a></li>
                    <li><a href="product-detail.html">Product Detail</a></li>
                    <li><a href="product-detail-rated.html">Product Detail Rated</a></li>
                    <li><a href="search.html">Search</a></li>
                  </ul>
                </li>
                <li><a href="#"><span class="menu-text">Shop <i class="menu-icon fa fa-angle-down"></i></span></a>
                  <ul>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="compare.html">Compare</a></li>
                    <li><a href="track-your-order.html">Track Your Order</a></li>
                    <li><a href="cart-empty.html">Cart Empty</a></li>
                  </ul>
                </li>
                <li><a href="#"><span class="menu-text">Blog <i class="menu-icon fa fa-angle-down"></i></span></a>
                  <ul>
                    <li><a href="blog-list.html">Blog List</a></li>
                    <li><a href="blog-grid-2.html">Blog Grid 2</a></li>
                    <li><a href="blog-grid-3-no-sb.html">Blog Grid 3 No Sidebar</a></li>
                    <li><a href="blog-grid-3-mansory-no-sb.html">Blog Grid 3 Mansory No Sidebar</a></li>
                    <li><a href="blog-detail.html">Blog Detail</a></li>
                  </ul>
                </li>
                <li><a href="about-us.html"><span class="menu-text">About Us</span></a></li>
                <li><a href="contact.html"><span class="menu-text">Contact</span></a></li>
                <li><a href="#"><span class="menu-text">Pages <i class="menu-icon fa fa-angle-down"></i></span></a>
                  <ul class="dropdown-left">
                    <li><a href="login.html">Login & Register</a></li>
                    <li><a href="forgot-password.html">Forgot Password</a></li>
                    <li><a href="faqs.html">Faqs</a></li>
                    <li><a href="newsletter.html">Newsletter</a></li>
                    <li><a href="shortcodes.html">Shortcodes</a></li>
                    <li><a href="common-element.html">Common Element</a></li>
                    <li><a href="error-page.html">Error Page</a></li>
                    <li><a href="#"><span class="menu-text">Example menu item <i class="menu-icon fa fa-angle-down"></i></span></a>
                      <ul>
                        <li><a href="#">Example menu item</a></li>
                        <li><a href="#"><span class="menu-text">Example menu item <i class="menu-icon fa fa-angle-down"></i></span></a>
                          <ul>
                            <li><a href="#">Example menu item</a></li>
                            <li><a href="#">Example menu item</a></li>
                          </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Example menu item <i class="menu-icon fa fa-angle-down"></i></span></a>
                          <ul class="dropdown-left">
                            <li><a href="#">Example menu item</a></li>
                            <li><a href="#">Example menu item</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!-- .off-canvas-wrapper-left-->

      <div class="off-canvas-wrapper-right hidden-md hidden-lg">
        <div class="off-canvas-right">
          <div class="off-canvas-header">
            <button class="btn-close-off-canvas click-close-off-canvas">x</button>
          </div>

          <div class="off-canvas-body">
            <div class="mv-aside mv-aside-search">
              <div class="aside-title mv-title-style-11">search</div>
              <div class="aside-body">
                <form method="GET" class="form-aside-search">
                  <div class="mv-inputbox-icon right">
                    <input type="text" name="test138" class="mv-inputbox mv-inputbox-style-2"/>
                    <button type="submit" class="icon mv-btn mv-btn-style-4 fa fa-search"></button>
                  </div>
                </form>
              </div>
            </div>
            <!-- .mv-aside-search-->

            <div class="mv-aside mv-aside-filter-by-price">
              <div class="aside-title mv-title-style-11">filter by price</div>
              <div class="aside-body">
                <form method="GET" class="form-aside-filter-by-price">
                  <div class="mv-slider-range">
                    <div class="slider-range-wrapper mv-slider-range-style-1">
                      <div class="slider-range"></div>
                    </div>
                    <div class="mv-dp-table align-middle">
                      <div class="mv-dp-table-cell view-values">Price: $<span class="min-value"></span> - $<span class="max-value"></span></div>
                      <div class="mv-dp-table-cell filter-button">
                        <button type="submit" class="mv-btn mv-btn-style-5 btn-5-h-30">filter</button>
                      </div>
                    </div>
                  </div>
                </form>

                <nav class="filter-by-price-menu mv-menu-style-1">
                  <ul>
                    <li><a href="#" class="mv-icon-left-style-5">$10 - $50<span class="sub-text">&nbsp; (8)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">$50 - $100<span class="sub-text">&nbsp; (8)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">$100 - $500<span class="sub-text">&nbsp; (3)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">$500 - $1000<span class="sub-text">&nbsp; (16)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">$1000 - $5000<span class="sub-text">&nbsp; (6)</span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- .mv-aside-filter-by-price-->

            <div class="mv-aside mv-aside-product-type">
              <div class="aside-title mv-title-style-11">product type</div>
              <div class="aside-body">
                <nav class="product-type-menu mv-menu-style-1">
                  <ul>
                    <li><a href="#" class="mv-icon-left-style-5">Full Face Helmets<span class="sub-text">&nbsp; (8)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Flip Up Helmets<span class="sub-text">&nbsp; (3)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Open Face Helmets<span class="sub-text">&nbsp; (38)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Adventure Helmets<span class="sub-text">&nbsp; (12)</span></a>
                      <ul class="sub-menu">
                        <li><a href="#" class="mv-icon-left-style-5">AGV Helmets<span class="sub-text">&nbsp; (3)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5">Arai Helmets<span class="sub-text">&nbsp; (12)</span></a></li>
                        <li class="active"><a href="#" class="mv-icon-left-style-5">Bell Helmets<span class="sub-text">&nbsp; (8)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5">BOX Helmets<span class="sub-text">&nbsp; (15)</span></a></li>
                      </ul>
                    </li>
                    <li><a href="#" class="mv-icon-left-style-5">Trousers<span class="sub-text">&nbsp; (19)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Dresses<span class="sub-text">&nbsp; (34)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Shoes<span class="sub-text">&nbsp; (22)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Accessories<span class="sub-text">&nbsp; (17)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Sale<span class="sub-text">&nbsp; (3)</span></a></li>
                    <li><a href="#" class="mv-icon-left-style-5"> <strong>View More</strong><span class="sub-text">&nbsp; (50) &nbsp;</span><i class="fa fa-caret-down"></i></a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- .mv-aside-product-type-->

            <div class="mv-aside mv-aside-filter-by-size">
              <div class="aside-title mv-title-style-11">filter by</div>
              <div class="aside-body">
                <nav class="filter-by-price-menu mv-menu-style-1">
                  <ul>
                    <li><a href="#" class="mv-icon-left-style-5">Extra Large</a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Extra Small</a></li>
                    <li class="active"><a href="#" class="mv-icon-left-style-5">Large</a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Medium</a></li>
                    <li><a href="#" class="mv-icon-left-style-5">One Size Fits All</a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Small</a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Taille Unique</a></li>
                    <li><a href="#" class="mv-icon-left-style-5">Sale</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- .mv-aside-filter-by-size-->

            <div class="mv-aside mv-aside-size">
              <div class="aside-title mv-title-style-11">size</div>
              <div class="aside-body">
                <nav class="size-list">
                  <div class="mv-btn-group">
                    <div class="group-inner"><a href="#" class="mv-btn mv-btn-style-21">XXL</a><a href="#" class="mv-btn mv-btn-style-21 active">XL</a><a href="#" class="mv-btn mv-btn-style-21">L</a><a href="#" class="mv-btn mv-btn-style-21">M</a><a href="#" class="mv-btn mv-btn-style-21">S</a></div>
                  </div>
                </nav>
              </div>
            </div>
            <!-- .mv-aside-size-->

            <div class="mv-aside mv-aside-color">
              <div class="aside-title mv-title-style-11">color</div>
              <div class="aside-body">
                <div class="color-list mv-list-inline-style-1 space-10">
                  <ul class="list-inline-1">
                    <li class="active"><a href="#"><span style="background-color: #7bef66;" class="icon-color"></span></a></li>
                    <li><a href="#"><span style="background-color: #ff8888;" class="icon-color"></span></a></li>
                    <li><a href="#"><span style="background-color: #c4dd66;" class="icon-color"></span></a></li>
                    <li><a href="#"><span style="background-color: #94b7f7;" class="icon-color"></span></a></li>
                    <li><a href="#"><span style="background-color: #a3fbff;" class="icon-color"></span></a></li>
                    <li><a href="#"><span style="background-color: #f7fb0d;" class="icon-color"></span></a></li>
                    <li><a href="#"><span style="background-color: #7b7878;" class="icon-color"></span></a></li>
                    <li><a href="#"><span style="background-color: #d041ff;" class="icon-color"></span></a></li>
                    <li><a href="#"><span style="background-color: #fdab14;" class="icon-color"></span></a></li>
                    <li><a href="#"><span style="background-color: #eeeeee" class="icon-color"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- .mv-aside-color-->

            <div class="mv-aside mv-aside-products">
              <div class="aside-title mv-title-style-11">products</div>
              <div class="aside-body">
                <div class="products-list">
                  <div class="mv-block-style-24">
                    <div class="block-24-list">
                      <article class="item post">
                        <div class="item-inner">
                          <div class="mv-dp-table">
                            <div class="mv-dp-table-cell block-24-thumb">
                              <div class="thumb-inner mv-lightbox-style-1"><a href="product-detail.html" title="Open Face Helmets"><img src="images/demo/demo_300x400.png" alt="demo"/></a><a href="images/demo/demo_300x400.png" title="Open Face Helmets" data-lightbox-href="product-detail.html" class="mv-btn mv-btn-style-20 mv-lightbox-item"><i class="icon fa fa-search"></i></a></div>
                            </div>
                            <div class="mv-dp-table-cell block-24-main">
                              <div class="block-24-title"><a href="product-detail.html" title="Open Face Helmets" class="mv-overflow-ellipsis">Open Face Helmets</a></div>
                              <div class="block-24-price">
                                <div class="new-price">$200,00</div>
                                <div class="old-price">$250,99</div>
                              </div>
                              <div data-rate="true" data-score="4.0" class="block-24-rate mv-rate text-left">
                                <div class="rate-inner mv-f-12">
                                  <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                  <div class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </article>
                      <!-- .post-->

                      <article class="item post">
                        <div class="item-inner">
                          <div class="mv-dp-table">
                            <div class="mv-dp-table-cell block-24-thumb">
                              <div class="thumb-inner mv-lightbox-style-1"><a href="product-detail.html" title="Spada Enforcer WP"><img src="images/demo/demo_300x400.png" alt="demo"/></a><a href="images/demo/demo_300x400.png" title="Spada Enforcer WP" data-lightbox-href="product-detail.html" class="mv-btn mv-btn-style-20 mv-lightbox-item"><i class="icon fa fa-search"></i></a></div>
                            </div>
                            <div class="mv-dp-table-cell block-24-main">
                              <div class="block-24-title"><a href="product-detail.html" title="Spada Enforcer WP" class="mv-overflow-ellipsis">Spada Enforcer WP Spada Enforcer WP</a></div>
                              <div class="block-24-price">
                                <div class="new-price">$300,00</div>
                                <div class="old-price">$400,99</div>
                              </div>
                              <div data-rate="true" data-score="5.0" class="block-24-rate mv-rate text-left">
                                <div class="rate-inner mv-f-12">
                                  <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                  <div class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </article>
                      <!-- .post-->

                      <article class="item post">
                        <div class="item-inner">
                          <div class="mv-dp-table">
                            <div class="mv-dp-table-cell block-24-thumb">
                              <div class="thumb-inner mv-lightbox-style-1"><a href="product-detail.html" title="Richa Drift Water"><img src="images/demo/demo_300x400.png" alt="demo"/></a><a href="images/demo/demo_300x400.png" title="Richa Drift Water" data-lightbox-href="product-detail.html" class="mv-btn mv-btn-style-20 mv-lightbox-item"><i class="icon fa fa-search"></i></a></div>
                            </div>
                            <div class="mv-dp-table-cell block-24-main">
                              <div class="block-24-title"><a href="product-detail.html" title="Richa Drift Water" class="mv-overflow-ellipsis">Richa Drift Water</a></div>
                              <div class="block-24-price">
                                <div class="new-price">$210,00</div>
                                <div class="old-price">$290,99</div>
                              </div>
                              <div data-rate="true" data-score="3.0" class="block-24-rate mv-rate text-left">
                                <div class="rate-inner mv-f-12">
                                  <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                  <div class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </article>
                      <!-- .post-->
                    </div>
                  </div>
                  <!-- .mv-block-style-24-->
                </div>
              </div>
            </div>
            <!-- .mv-aside-products-->

            <div class="mv-aside mv-aside-tags">
              <div class="aside-title mv-title-style-11">tags</div>
              <div class="aside-body">
                <div class="tag-list">
                  <div class="mv-btn-group">
                    <div class="group-inner"><a href="#" class="mv-btn mv-btn-style-22">Helmet</a><a href="#" class="mv-btn mv-btn-style-22 active">Gloves</a><a href="#" class="mv-btn mv-btn-style-22">Sercurity</a><a href="#" class="mv-btn mv-btn-style-22">Boots</a><a href="#" class="mv-btn mv-btn-style-22">Clothing</a><a href="#" class="mv-btn mv-btn-style-22">Luggage</a><a href="#" class="mv-btn mv-btn-style-22">Maintenance</a><a href="#" class="mv-btn mv-btn-style-22">Bodywork</a><a href="#" class="mv-btn mv-btn-style-22">Gift</a><a href="#" class="mv-btn mv-btn-style-22">Exhauts</a><a href="#" class="mv-btn mv-btn-style-22">Tyres</a><a href="#" class="mv-btn mv-btn-style-22">Casual Wear</a><a href="#" class="mv-btn mv-btn-style-22">R&G Racing</a></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- .mv-aside-tags-->
          </div>
        </div>
      </div>
      <!-- .off-canvas-wrapper-right-->
    </div>
    <!-- .mv-site-->

    <div class="popup-wrapper">
      <div id="popupSearch" tabindex="-1" role="dialog" aria-hidden="true" class="popup-search modal fade modal-effect-zoom mv-modal-style-2">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form method="GET" action="/motor_vehikal_html/search.html" class="form-search">
              <div class="mv-inputbox-icon right">
                <input type="text" name="test138" data-mv-placeholder="Type here and enter to search" placeholder="Type here and enter to search" class="mv-inputbox mv-inputbox-style-5"/>
                <button type="submit" class="icon mv-btn mv-btn-style-4"><i class="fa fa-search"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- .popup-search-->
    </div>
    <!-- .popup-wrapper-->

    <!-- Vendor jQuery-->
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/jquery/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/smoothscroll/SmoothScroll.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/superfish-menu/js/superfish.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/jquery-ui/external/touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/jquery-ui/external/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/parallax/parallax.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/jquery-countto/jquery.countTo.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/jquery-appear/jquery.appear.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/as-pie-progress/jquery-asPieProgress.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/caroufredsel/helper-plugins/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/caroufredsel/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/isotope/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/isotope/fit-columns.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/slick-sider/slick.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/lwt-countdown/jquery.lwtCountdown-1.0.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/swiper-sider/dist/js/swiper.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/jplayer/dist/jplayer/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/libs/jquery-cookie/jquery.cookie.min.js"></script>

    <!-- Theme Script-->
    <script type="text/javascript" src="{{ asset('/') }}music_source/js/style.selector.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}music_source/js/main.js"></script>
  </body>
</html>


<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript">
 function addToCart(product_id) {
    // Get the quantity from the input field (assumes input has class "quantity-field")
    const quantity = parseInt(document.querySelector('.quantity-field').value); // Adjust the selector as needed

    // Check if quantity is valid
    if (isNaN(quantity) || quantity < 1) {
        toastr.error('Please select a valid quantity.');
        return; // Exit the function if the quantity is invalid
    }

    // Define the URL for the AJAX request
    const url = "{{ route('cart.add') }}";

    // Perform the AJAX request
    $.ajax({
        url: url,
        type: "POST",
        data: {
            product_id: product_id,
            qty: quantity, // Include the quantity in the data sent to the server
            _token: '{{ csrf_token() }}',
        },
        success: function(response) {
            // Update the UI with the response data
            $('#total_count').html(response.total_count);
            $('#mobile_total_count').html(response.total_count);
            $('#cart_sidebar_total').html(response.total_amount);
            $('#cart_sidebar').html(response.cart_sidebar);
            $('.added_to_cart_' + product_id).addClass('added_to_cart');
            $('.added_to_cart_' + product_id).text('Added To Cart');

            // Show a success notification
            toastr.options = {
                "positionClass": "toast-top-right"
            };
            toastr.success('Product Added to Cart');
        },
        error: function(xhr, status, error) {
            // Handle errors (e.g., product not found, validation errors)
            toastr.error('Error adding product to cart: ' + xhr.responseJSON.message || 'Please try again.');
        }
    });
}


    function addToWishlist(product_id) {
      alert(product_id);
      url = "{{ route('wishlist.add') }}";
      var product_id = product_id;
      $.ajax({
          url: url,
          type: "POST",
          data:{
              product_id:product_id,_token: '{{csrf_token()}}',
          },
          success:function(response){


            toastr.options = {
              "positionClass": "toast-top-right"
            }
            if (response.auth == 1) {
              if(response.status == 0){
                toastr.error('Something went wrong!');
              }
              if (response.status == 1) {
                toastr.success('Product Added into Wishlist!');
              }
              if(response.status == 2){
                toastr.warning('Product already in  your wishlist!');
              }
            }
            else{
              toastr.warning('You are not logged in!');

            }
          }
      });
    }
</script>
<script>
        $('#payment_option').change(function () {
            $payment_option = $('#payment_option').val();
            if($payment_option == 'Cash on Delivery' ) {
                $('#cod').removeClass('hidden');
                $('#bkash').addClass('hidden');
                $('#rocket').addClass('hidden');
            }
            if($payment_option == 'Bkash' ) {
                $('#cod').addClass('hidden');
                $('#bkash').removeClass('hidden');
                $('#transaction_id').removeClass('hidden');
                $('#rocket').addClass('hidden');
            }
            if($payment_option == 'Rocket' ) {
                $('#cod').addClass('hidden');
                $('#bkash').addClass('hidden');
                $('#rocket').removeClass('hidden');
                $('#transaction_id').removeClass('hidden');
            }

        })
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

    <script type="text/javascript">

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var route = "{{ route('search') }}";


        $('#search').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    return process(data);
                });
            }
        });
    </script>

    <script>
       //incriment
     // Function to increment the quantity
            function quickViewQuantityIncr(e) {
                let inputField = e.target.previousElementSibling; // Get the input field before the "+" button
                let currentValue = parseInt(inputField.value); // Parse the current value as an integer
                inputField.value = currentValue + 1; // Increment the value

                // Optionally, you can trigger an update to the cart or send the new quantity
                updateCart(inputField.value); // Pass the new quantity to the cart update function
            }

            // Function to decrement the quantity
            function quickViewQuantityDec(e) {
                let inputField = e.target.nextElementSibling; // Get the input field after the "-" button
                let currentValue = parseInt(inputField.value); // Parse the current value as an integer
                if (currentValue > 1) { // Ensure the value doesn't go below 1
                    inputField.value = currentValue - 1; // Decrement the value
                    updateCart(inputField.value); // Update the cart with the new quantity
                }
            }

            // Function to send updated quantity via AJAX
            function updateCart(newQty) {
                let productId = document.querySelector('[name="product_id"]').value;  // Assuming you have a product_id field in the form

                // Send an AJAX request to update the cart with the new quantity
                $.ajax({
                    url: '/cart/update',  // The URL for updating the cart
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",  // Laravel CSRF token for security
                        product_id: productId,
                        qty: newQty  // Pass the updated quantity
                    },
                    success: function(response) {
                        console.log('Cart updated successfully', response);
                        // Optionally, update the UI with the new cart details
                    },
                    error: function(error) {
                        console.log('Error updating cart', error);
                    }
                });
            }

    
</script>


