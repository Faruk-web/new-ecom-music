@extends('frontand.master')
@section('content')
<section class="main-banner mv-wrap">
        <div data-image-src="{{ asset('/') }}music_source/theme/1.jpg" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
          <div class="page-name mv-caption-style-6">
            <div class="container">
              <div class="mv-title-style-9"><span class="main">Events 4 columns</span><img src="{{ asset('/') }}music_source/images/icon/icon_line_polygon_line.png" alt="icon" class="line"/></div>
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
              <li><a>Events 4 columns </a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- .main-breadcrumb-->
         <!-- .main-breadcrumb-->
      <section class="mv-main-body blog-3-no-sb-main mv-bg-gray mv-wrap">
        <div class="container">
          <div class="mv-list-blog-wrapper mv-block-style-15">
            <div class="row block-15-list mv-list-blog">
            @foreach($events as $product)
              <article class="col-xs-6 col-sm-4 item item-blog-grid-3-no-sb post">
                <div class="item-inner mv-box-shadow-gray-1">
                  <div class="item-inner-relative">
                    <div class="block-15-thumb mv-effect-relative"><a href="{{route('event.details', $product->id)}}" title="Lamcorper suscipit lobortis nisl ut aliquip ex ea"><span style="background-image: url({{asset('images/event/'.$product->image )}});" class="block-15-thumb-img"></span></a><span class="polygon hidden-xs hidden-sm"></span><span onclick="$(this).remove()" class="block-15-date mv-date-style-1 hidden-xs hidden-sm"><span class="day">29</span><span class="month">sep</span></span></div>
                    <!-- .block-15-thumb-->
                    <div class="block-15-main">
                      <div class="block-15-main-inner">
                        <div class="block-15-title"><a href="{{route('event.details', $product->id)}}" title="Lamcorper suscipit lobortis nisl ut aliquip ex ea" class="mv-overflow-ellipsis">{{$product->title}}</a></div>
                        <ul class="block-15-meta mv-ul">
                          <li class="meta-item mv-icon-left-style-3"><a href="#"><span class="text"> <span class="icon"><i class="fa fa-pencil-square-o"></i></span>{{$product->created_at}}</span></a></li>
                        </ul>
                        <div class="block-15-content">{{$product->short_descp}}</div>
                        <div class="block-15-read-more"><a href="{{route('event.details', $product->id)}}" class="mv-btn mv-btn-style-1 btn-1-h-40 btn-1-gray responsive-btn-1-type-5 btn-read-more"><span class="btn-inner"><i class="btn-icon fa fa-long-arrow-right"></i><span class="btn-text">read more</span></span></a></div>
                      </div>
                    </div>
                    <!-- .block-15-main-->
                  </div>
                </div>
              </article>
              <!-- .post-->
              @endforeach
            </div>
          </div>
          <!-- .mv-list-blog-wrapper-->
          <div class="mv-pagination-wrapper">
            <div class="mv-pagination-style-1 has-count-post">
              <div class="count-post mv-title-style-10"><span class="number">12</span> Events of <span class="number">5</span> Pages</div>
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
@endsection