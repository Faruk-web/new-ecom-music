      <header class="header mv-header-style-3 mv-wrap">
        <div class="header-top">
          <div class="container">
            <div class="header-top-inner">
              <div class="mv-col-wrapper">
                <div class="mv-col-left header-contact">
                  <ul class="mv-ul clearfix group-contact hidden-xs">
                    <li class="item-button mv-icon-left-style-2"><span class="text"> <span class="icon"><i class="fa fa-clock-o"></i></span>24/7 Support</span></li>
                    <li class="item-button mv-icon-left-style-2"><a href="tel:(+800)123456789" class="text"> <span class="icon"><i class="fa fa-phone"></i></span>Telephone: (+800) 123 456 789</a></li>
                  </ul>
                  <ul class="mv-ul clearfix group-language">
                    <li class="item-button dropdown mv-dropdown-style-1 item-currency">
                      <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="mv-btn mv-btn-style-24"> <i class="fa fa-usd"></i>&nbsp; USD<i class="icon fa fa-angle-down"></i></button>
                      <div class="dropdown-menu pull-right">
                        <div class="dropdown-menu-inner">
                          <nav class="mv-menu-style-3">
                            <ul>
                              <li><a href="#"><i class="fa fa-eur"></i>&nbsp; EUR</a></li>
                              <li><a href="#"><i class="fa fa-usd"></i>&nbsp; AUD</a></li>
                              <li><a href="#"><i class="fa fa-gbp"></i>&nbsp; GBP</a></li>
                              <li><a href="#"><i class="fa fa-rub"></i>&nbsp; RUB</a></li>
                              <li><a href="#"><i class="fa fa-yen"></i>&nbsp; YEN</a></li>
                              <li><a href="#"><i class="fa fa-krw"></i>&nbsp; WON</a></li>
                            </ul>
                          </nav>
                        </div>
                      </div>
                    </li>
                    <li class="item-button dropdown mv-dropdown-style-1 item-language">
                      <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="mv-btn mv-btn-style-24"> <img src="{{ asset('/') }}music_source/images/icon/icon_flag_england.png" alt="icon"/><span class="btn-text hidden-xs hidden-sm">&nbsp; English</span><i class="icon fa fa-angle-down"></i></button>
                      <div class="dropdown-menu pull-right">
                        <div class="dropdown-menu-inner">
                          <nav class="mv-menu-style-3">
                            <ul>
                              <li><a href="#"><img src="{{ asset('/') }}music_source/images/icon/icon_flag_france.png" alt="icon"/>&nbsp; France</a></li>
                              <li><a href="#"><img src="{{ asset('/') }}music_source/images/icon/icon_flag_italy.png" alt="icon"/>&nbsp; Italy</a></li>
                              <li><a href="#"><img src="{{ asset('/') }}music_source/images/icon/icon_flag_germany.png" alt="icon"/>&nbsp; Germany</a></li>
                              <li><a href="#"><img src="{{ asset('/') }}music_source/images/icon/icon_flag_spain.png" alt="icon"/>&nbsp; Spain</a></li>
                            </ul>
                          </nav>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- .header-contact-->

                <div class="mv-col-right align-bottom header-account">
                  <div class="mv-btn-group text-right">
                    <div class="group-inner">
                      <div class="item-button mv-btn dropdown mv-dropdown-style-1">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="mv-btn mv-btn-style-12"><span class="btn-text hidden-xs hidden-sm">my account</span><i class="btn-icon fa fa-user hidden-md hidden-lg"></i><i class="icon fa fa-caret-down"></i></button>
                        <div class="dropdown-menu pull-right">
                          <div class="dropdown-menu-inner">
                            <nav class="mv-menu-style-3">
                              <ul>
                                <li><a href="login.html"><i class="fa fa-sign-in mv-color-primary"></i>&nbsp;
                                    Login</a></li>
                                <li><a href="login.html"><i class="fa fa-pencil-square-o mv-color-primary"></i>&nbsp;
                                    Register</a></li>
                                <li><a href="wishlist.html">My Wishlist</a></li>
                                <li><a href="compare.html">Compare</a></li>
                              </ul>
                            </nav>
                          </div>
                        </div>
                      </div>
                      <div class="item-button mv-btn"><a href="checkout.html" class="item-button mv-btn mv-btn-style-12"> <i class="btn-icon fa fa-shopping-cart hidden-md hidden-lg"></i><span class="btn-text hidden-xs hidden-sm">checkout</span></a></div>
                    </div>
                  </div>
                </div>
                <!-- .header-account-->
              </div>
            </div>
          </div>
        </div>
        <!-- .header-top-->

        <div class="header-main-nav mv-fixed-enabled">
          <div class="container">
            <div class="container-inner">
              <div class="header-toggle-off-canvas hidden-md hidden-lg">
                <button type="button" class="mv-btn mv-btn-style-5 btn-off-canvas-toggle click-btn-off-canvas-left"><i class="icon fa fa-bars"></i></button>
              </div>
              <!-- .header-toggle-off-canvas-->

              <div class="header-logo"><a href="{{route('index')}}" title="Motor Vehikal"><img src="{{ asset('/') }}music_source/images/logo/logo_3.png" alt="logo" class="logo-img img-default image-live-view"/><img src="{{ asset('/') }}music_source/images/logo/logo_4.png" alt="logo" class="logo-img img-scroll image-live-view"/></a></div>
              <!-- .header-logo-->

              <div class="main-nav-wrapper hidden-xs hidden-sm">
                <nav class="main-nav">
                  <ul class="nav sf-menu">
                    <li class="mega-columns"><a href="{{route('index')}}"><span class="menu-text">Home <i class="menu-icon fa fa-angle-down"></i></span></a>
                    </li>
                    <li><a href="#"><span class="menu-text">Brands <i class="menu-icon fa fa-angle-down"></i></span></a>
                      <ul>
                        <li><a href="{{route('all.brand')}}">All Brands</a></li>
                        <li><a href="product-grid-2.html">R&B</a></li>
                        <li><a href="product-grid-3.html">ZAJJ</a></li>
                        <li><a href="product-grid-3-no-sb.html">ROCK</a></li>
                        <li><a href="product-grid-4-no-sb.html">RAP</a></li>
                      </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Shop <i class="menu-icon fa fa-angle-down"></i></span></a>
                      <ul>
                        <li><a href="{{route('apparels')}}">Apparels</a></li>
                        <li><a href="checkout.html">Accessories</a></li>
                        <li><a href="wishlist.html">limited edition</a></li>
                      </ul>
                    </li>
                    <li><a href="{{route('all.events')}}"><span class="menu-text">Events <i class="menu-icon fa fa-angle-down"></i></span></a>
                    </li>
                    <li><a href="{{route('all.fanclub')}}"><span class="menu-text">Fan Club <i class="menu-icon fa fa-angle-down"></i></span></a>
                    </li>
                    <li><a href="{{route('about')}}"><span class="menu-text">About Us</span></a></li>
                    <li><a href="{{route('contact')}}"><span class="menu-text">Contact</span></a></li>
                  </ul>
                </nav>
              </div>
              <!-- .header-main-nav-->

              <div class="header-right-button">
                <div class="header-search">
                  <div class="item-button">
                    <button type="button" data-toggle="modal" data-target="#popupSearch" class="mv-btn mv-btn-style-10 btn-open-field-search"><i class="fa fa-search"></i></button>
                    <button type="button" class="mv-btn mv-btn-style-10 btn-open-filter click-btn-off-canvas-right hidden-md hidden-lg"><i class="fa fa-filter mv-f-18"></i></button>
                  </div>
                </div>
                <!-- .header-search-->

                <div class="header-shop">
                  <div class="item-button"><a href="wishlist.html" class="mv-btn mv-btn-style-11 btn-my-wishlist"><span class="btn-inner"><span class="icon fa fa-heart-o"></span><span class="number">8</span></span></a></div>

                  <div class="item-button dropdown mv-dropdown-style-1 script-dropdown-1">
                    <button type="button" class="mv-btn mv-btn-style-11 btn-dropdown btn-my-cart"><span class="btn-inner"><span class="icon fa fa-shopping-bag"></span><span class="number" id="total_count">{{ Session::has('cart') ? array_sum(array_column(Session::get('cart'), 'quantity')) : 0 }}</span></span></button>
                    <a type="button" href="{{route('all.musics')}}" class="mv-btn mv-btn-style-11 btn-dropdown btn-my-cart"><span class="btn-inner"><span class="fa fa-music"></span></span></a>
                    <div class="dropdown-menu pull-right">
                      <div class="dropdown-menu-inner">
                        <div class="mv-block-style-39">
                          <div class="block-39-header">You have <span class="mv-color-primary"> items</span> in your shopping cart</div>
                          <div class="block-39-list">
                          @foreach(Cart::content() as $cart)
                            <article class="item post">
                              <div class="item-inner">
                                <div class="mv-dp-table align-top">
                                  <div class="mv-dp-table-cell block-39-thumb">
                                    <div class="thumb-inner mv-lightbox-style-1"><a href="product-detail.html" title="Richa Rock Glove"><img src="{{ asset('images/product/'. $cart->options->image) }}" alt="demo" class="block-39-thumb-img"/></a></div>
                                  </div>
                                  @php
                                  $p_price=($cart->price) * ($cart->qty)
                                  @endphp
                                  <div class="mv-dp-table-cell block-39-main">
                                    <div class="block-39-main-inner">
                                      <div class="block-39-title"><a href="product-detail.html" title="Richa Rock Glove" class="mv-overflow-ellipsis">{{$cart->name}}</a></div>
                                      <div class="block-39-price"> 
                                        <div class="new-price" style="font-size: 13px;">Price: {{ env('CURRENCY') }}{{ $cart->price }} {{ env('UAE_CURRENCY') }} X {{ $cart->qty }} = {{$p_price}}</div>
                                      </div>
                                      <ul class="block-24-meta mv-ul">
                                        <li class="meta-item mv-icon-left-style-3"><span class="text">Quanlity: {{ $cart->qty }} </span></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                                <button type="button" title="Remove from Wishlist" class="mv-btn mv-btn-style-4 fa fa-close btn-delete-product"></button>
                              </div>
                            </article>
                            <!-- .post-->
                            @endforeach
                          </div>

                          <div class="block-39-total mv-col-wrapper">
                            <div class="mv-col-left">total</div>
                            <div class="mv-col-right">{{ env('CURRENCY') }}{{ Cart::subtotal() }} {{ env('UAE_CURRENCY') }}</div>
                          </div>

                          <div class="block-39-footer">
                            <div class="row">
                              <div class="col-xs-6"><a href="{{route('carts')}}" class="mv-btn mv-btn-style-5 btn-5-h-45 btn-5-gray responsive-btn-5-type-2 mv-btn-block">view cart</a></div>
                              <div class="col-xs-6"><a href="{{ route('checkout') }}" class="mv-btn mv-btn-style-5 btn-5-h-45 responsive-btn-5-type-2 mv-btn-block">checkout</a></div>
                            </div>
                          </div>
                        </div>
                        <!-- .mv-block-style-39-->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- .header-shop-->
              </div>
            </div>
          </div>
        </div>
        <!-- .header-main-nav-->
      </header>
      <!-- .header-->