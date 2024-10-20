@extends('frontand.master')
@section('content')
<style type="text/css">
.shell{
  padding:80px 0;
}
.wsk-cp-product{
  background:#1c0202;
  padding:15px;
  border-radius:6px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  position:relative;
  margin:20px auto;
}
.wsk-cp-img{
  position:absolute;
  top:5px;
  left:50%;
  transform:translate(-50%);
  -webkit-transform:translate(-50%);
  -ms-transform:translate(-50%);
  -moz-transform:translate(-50%);
  -o-transform:translate(-50%);
  -khtml-transform:translate(-50%);
  width: 100%;
  padding: 15px;
  transition: all 0.2s ease-in-out;
}
.wsk-cp-img img{
  width:100%;
  transition: all 0.2s ease-in-out;
  border-radius:6px;
}
.wsk-cp-product:hover .wsk-cp-img{
  top:-40px;
}
.wsk-cp-product:hover .wsk-cp-img img{
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}
.wsk-cp-text{
  padding-top:103%;
}
.wsk-cp-text .category{
  text-align:center;
  font-size:12px;
  font-weight:bold;
  padding:5px;
  margin-bottom:45px;
  position:relative;
  transition: all 0.2s ease-in-out;
}
.wsk-cp-text .category > *{
  position:absolute;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  -webkit-transform: translate(-50%,-50%);
  -moz-transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
  -o-transform: translate(-50%,-50%);
  -khtml-transform: translate(-50%,-50%);
    
}
.wsk-cp-text .category > span{
  padding: 12px 30px;
  border: 1px solid #313131;
  background:#212121;
  color:#fff;
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
  border-radius:27px;
  transition: all 0.05s ease-in-out;
  
}
.wsk-cp-product:hover .wsk-cp-text .category > span{
  border-color:#ddd;
  box-shadow: none;
  padding: 11px 28px;
}
.wsk-cp-product:hover .wsk-cp-text .category{
  margin-top: 0px;
}
.wsk-cp-text .title-product{
  text-align:center;
}
.wsk-cp-text .title-product h3{
  font-size:20px;
  font-weight:bold;
  margin:15px auto;
  overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
  width:100%;
}
.wsk-cp-text .description-prod p{
  margin:0;
}
/* Truncate */
.wsk-cp-text .description-prod {
  text-align:center;
  width: 100%;
  height:62px;
  overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
  margin-bottom:15px;
}
.card-footer{
  padding: 25px 0 5px;
  border-top: 1px solid #ddd;
}
.card-footer:after, .card-footer:before{
  content:'';
  display:table;
}
.card-footer:after{
  clear:both;
}

.card-footer .wcf-left{
  float:left;
  
}

.card-footer .wcf-right{
  float:right;
}

.price{
  font-size:18px;
  font-weight:bold;
}

a.buy-btn{
  display:block;
  color:#212121;
  text-align:center;
  font-size: 18px;
  width:35px;
  height:35px;
  line-height:35px;
  border-radius:50%;
  border:1px solid #212121;
  transition: all 0.2s ease-in-out;
}
a.buy-btn:hover , a.buy-btn:active, a.buy-btn:focus{
  border-color: #FF9800;
  background: #FF9800;
  color: #fff;
  text-decoration:none;
}
.wsk-btn{
  display:inline-block;
  color:#212121;
  text-align:center;
  font-size: 18px;
  transition: all 0.2s ease-in-out;
  border-color: #FF9800;
  background: #FF9800;
  padding:12px 30px;
  border-radius:27px;
  margin: 0 5px;
}
.wsk-btn:hover, .wsk-btn:focus, .wsk-btn:active{
  text-decoration:none;
  color:#fff;
}  
.red{
  color:#F44336;
  font-size:22px;
  display:inline-block;
  margin: 0 5px;
}
@media screen and (max-width: 991px) {
  .wsk-cp-product{
    margin:40px auto;
  }
  .wsk-cp-product .wsk-cp-img{
  top:-40px;
}
.wsk-cp-product .wsk-cp-img img{
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}
  .wsk-cp-product .wsk-cp-text .category > span{
  border-color:#ddd;
  box-shadow: none;
  padding: 11px 28px;
}
.wsk-cp-product .wsk-cp-text .category{
  margin-top: 0px;
}
a.buy-btn{
  border-color: #FF9800;
  background: #FF9800;
  color: #fff;
}
}
</style>
<section class="main-banner mv-wrap">
        <div data-image-src="{{ asset('/') }}music_source/theme/1.jpg" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
          <div class="page-name mv-caption-style-6">
            <div class="container">
              <div class="mv-title-style-9"><span class="main">All Brands 4 columns</span><img src="{{ asset('/') }}music_source/images/icon/icon_line_polygon_line.png" alt="icon" class="line"/></div>
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
              <li><a href="product-grid-3.html">Event</a></li>
              <li><a>All Bands 4 columns </a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- .main-breadcrumb-->


  <section class="home-2-news-accessories mv-wrap">
  <div class="container-fluid" style="background:#1c0202;">
    <div class="row">
    @foreach($brands as $item)
      <div class="col-md-3">
        <div class="wsk-cp-product">
          <div class="wsk-cp-img">
            <img src="{{ asset('images/brand/'. $item->image)}}" alt="Product" class="img-responsive" />
          </div>
          <div class="wsk-cp-text">
            <div class="category">
            <div class="show-newsletter">
              <div class="text-center"><a style="height: 50px;" data-toggle="modal" data-target="#popupNewsletter{{ $item->id }}" class="mv-btn mv-btn-style-5">{{$item->title}}</a></div>
            </div>
            </div>
          </div>
        </div>
      </div>
        <div id="popupNewsletter{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true" class="popup-newsletter modal fade modal-full-width modal-middle modal-effect-zoom mv-modal-style-1">
          <div class="container h-full">
            <div class="modal-dialog-wrapper">
              <div class="modal-dialog">
                <div class="modal-dialog-inner">
                  <div class="modal-content">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="mv-btn mv-btn-style-4 modal-close"><i class="fa fa-close"></i></button>
                    <div class="content-hover">
                      <div class="content-button mv-btn-group text-center">
                        <div class="group-inner">
                        <a class="mv-btn mv-btn-style-1" style="width: 270px;background-image:none!important" href="{{route('products', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Shops</span></span></a>
                          <a  class="mv-btn mv-btn-style-1" style="width: 270px;background-image:none!important" href="{{route('musics', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Musics</span></span></a>
                          <a  class="mv-btn mv-btn-style-1" style="width: 270px;background-image:none!important" href="{{route('events', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Events</span></span></a>
                          <a class="mv-btn mv-btn-style-1" style="width: 270px;background-image:none!important" href="{{route('brand.profile', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Profile</span></span></a>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

    <!-- .home-2-news-accessories-->
    <section class="home-3-featured-products mv-wrap" style="background:#1c0202;">
    <div class="container-fluid">
      <div class="container" style="margin-top:30px">
        <div class="featured-title mv-title-style-2 title-home-3">
          <div class="title-2-inner">
            <img src="{{ asset('/') }}music_source/images/icon/icon_m_3.png" alt="Featured Products Icon" class="icon image-live-view" />
            <span class="main">Featured Bands</span>
            <span class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</span>
          </div>
        </div>
        <!-- .featured-title-->

        <div class="featured-main mv-filter-style-2">
          <div class="filter-button mv-btn-group">
            <div class="group-inner">
              <button data-filter="*" class="mv-btn mv-btn-style-8 active">All</button>
              <button data-filter=".FOCK" class="mv-btn mv-btn-style-8">FOCK</button>
              <button data-filter=".ROCK" class="mv-btn mv-btn-style-8">ROCK</button>
              <button data-filter=".RB" class="mv-btn mv-btn-style-8">R&B</button>
              <button data-filter=".JAZZ" class="mv-btn mv-btn-style-8">JAZZ</button>
              <button data-filter=".RAB" class="mv-btn mv-btn-style-8">RAB</button>
            </div>
          </div>
          <!-- .filter-button-->

          <div class="row filter-list-wrapper">
            <div class="filter-list mv-block-style-2">
              <div class="block-2-list">
                @foreach ($brands as $item)
            
                  <article class="col-xs-6 col-sm-4 col-md-4 item item-filter-home-3 filter-item post {{ $item->brand_type }}">
                  <div class="wsk-cp-product">
                  <div class="wsk-cp-img">
                    <img src="{{ asset('images/brand/'. $item->image)}}" alt="Product" class="img-responsive" />
                  </div>
                  <div class="wsk-cp-text">
                    <div class="category">
                    <div class="show-newsletter">
                      <div class="text-center"><a style="height: 50px;" data-toggle="modal" data-target="#popupNewsletter{{ $item->id }}" class="mv-btn mv-btn-style-5">{{$item->title}}</a></div>
                    </div>
                    </div>
                  </div>
                </div>
                  </article>

                  <div id="popupNewsletter{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true" class="popup-newsletter modal fade modal-full-width modal-middle modal-effect-zoom mv-modal-style-1">
                  <div class="container h-full">
                    <div class="modal-dialog-wrapper">
                      <div class="modal-dialog">
                        <div class="modal-dialog-inner">
                          <div class="modal-content">
                            <button type="button" data-dismiss="modal" aria-label="Close" class="mv-btn mv-btn-style-4 modal-close"><i class="fa fa-close"></i></button>
                            <div class="content-hover">
                              <div class="content-button mv-btn-group text-center">
                                <div class="group-inner">
                                <a class="mv-btn mv-btn-style-1" style="width: 270px;background-image:none!important" href="{{route('products', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Shops</span></span></a>
                                  <a  class="mv-btn mv-btn-style-1" style="width: 270px;background-image:none!important" href="{{route('musics', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Musics</span></span></a>
                                  <a  class="mv-btn mv-btn-style-1" style="width: 270px;background-image:none!important" href="{{route('events', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Events</span></span></a>
                                  <a class="mv-btn mv-btn-style-1" style="width: 270px;background-image:none!important" href="{{route('brand.profile', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Profile</span></span></a>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          <!-- .filter-list-wrapper-->
        </div>
        <!-- .featured-main-->
      </div>
    </div>
  </section>

@endsection
