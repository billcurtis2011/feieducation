@section('content')


<section id="sub-header" class="about-sub-header">
    <div class="header-overlay-imgthief"></div>
    <div class="container sub-header-content">
        <div class="row">
            <div class="col-md-12 sub-header-text-content">
                <h1 class="main-headeing"><span class="animated fadeInDown">{{Lang::get('about.heading_title')}}</span></h1>
                <p class="lead boxed-subheading-semiblue animated fadeInDown">
                    {{Lang::get('about.heading_subtitle')}}
                </p>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    <div class="divider_top"></div>
</section><!-- End sub-header -->

<section id="main_content">
    <div class="container">

        <ol class="breadcrumb">
          <li><a href="/">FEI</a></li>
          <li class="active">{{Lang::get('header.menu_about')}}</li>
        </ol>

        <div class="row">
            <div class="col-md-7">
                <div class="about-subsection-left">
                    <h3>{{Lang::get('about.about_sec_header_1')}}</h3>
                    <p>
                        {{Lang::get('about.about_sec_p_1')}}
                    </p>
                     <h3>{{Lang::get('about.about_sec_header_1.1')}}</h3>
                     <p>
                        {{Lang::get('about.about_sec_p_2.1')}}
                    </p>
                     <br/>
                    <h2 >{{Lang::get('about.about_sec_header_3.1')}} </h2>
                    <p>
                        {{Lang::get('about.about_sec_content_3.1')}} 
                    </p>
                    	{{Lang::get('about.about_sec_content_3.11')}}
                    <br/>
                    <h3>{{Lang::get('about.about_sec_header_3.2')}}</h3>
                    	{{Lang::get('about.about_sec_content_3.2')}}
                </div>
                <h3>{{Lang::get('about.about_sec_header_3.3')}} </h3>
                	{{Lang::get('about.about_sec_content_3.3')}}
                
                <br/><br/>
                <h3>{{Lang::get('about.about_sec_header_3.4')}} </h3>
                {{Lang::get('about.about_sec_content_3.4')}}
               
                <br/><br/><br/><br/>
            </div>

           <aside class="col-md-4 col-md-offset-1">
            <?php if(Session::get('locale') == "en") {?>
                    @include('includes.form-side')
                  <?php }else{?>
                  	@include('includes.form-side1')
                  <?php }?>
                <div class="box_style_1">
                    <h4>{{Lang::get('about.contact_fei')}}</h4>
                    <div class="side-contact-info">
                        <ul id="contact-info" class="admissions-contact-info">
                            <li><div class="aside-callout-number">{{Lang::get('about.contact_phone')}}</div></li>
                            <li><h5><i class="icon-home"></i> {{Lang::get('about.contact_address')}}</h5></li>
                            
                        </ul>
                    </div>
                </div>
                @include('blog.side')

            </aside> <!-- End col-md-4 -->
        </div><!-- End row -->

        <div class="row">
            <div class="col-md-12">
                <div id="AboutCarousel" class="carousel slide">

                <ol class="carousel-indicators">
                    <li data-target="#AboutCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#AboutCarousel" data-slide-to="1"></li>
                    <li data-target="#AboutCarousel" data-slide-to="2"></li>
                    <li data-target="#AboutCarousel" data-slide-to="3"></li>
                    <li data-target="#AboutCarousel" data-slide-to="4"></li>
                </ol>

                <!-- Carousel items -->
                <div class="carousel-inner">

                <div class="item active">
                    <div class="row">
                      <div class="col-md-3 col-sm-3"><a rel="gallery1" href="/assets/img/about/about_slider/about1.jpg" class="thumbnail fancybox-gallery"><img src="/assets/img/about/about_slider/about1.jpg" alt="Image" class="polaroid-frame" style="max-width:100%;"></a></div>
                      <div class="col-md-3 col-sm-3"><a rel="gallery1" href="/assets/img/about/about_slider/about2.jpg" class="thumbnail fancybox-gallery"><img src="/assets/img/about/about_slider/about2.jpg" alt="Image" class="polaroid-frame" style="max-width:100%;"></a></div>
                      <div class="col-md-3 col-sm-3"><a rel="gallery1" href="/assets/img/about/about_slider/about3.jpg" class="thumbnail fancybox-gallery"><img src="/assets/img/about/about_slider/about3.jpg" alt="Image" class="polaroid-frame" style="max-width:100%;"></a></div>
                      <div class="col-md-3 col-sm-3"><a rel="gallery1" href="/assets/img/about/about_slider/about4.jpg" class="thumbnail fancybox-gallery"><img src="/assets/img/about/about_slider/about4.jpg" alt="Image" class="polaroid-frame" style="max-width:100%;"></a></div>
                    </div><!--.row-->
                </div><!--.item-->

                <div class="item">
                    <div class="row">
                      <div class="col-md-3 col-sm-3"><a rel="gallery1" href="/assets/img/about/about_slider/about5.jpg" class="thumbnail fancybox-gallery"><img src="/assets/img/about/about_slider/about5.jpg" alt="Image" class="polaroid-frame" style="max-width:100%;"></a></div>
                      <div class="col-md-3 col-sm-3"><a rel="gallery1" href="/assets/img/about/about_slider/about6.jpg" class="thumbnail fancybox-gallery"><img src="/assets/img/about/about_slider/about6.jpg" alt="Image" class="polaroid-frame" style="max-width:100%;"></a></div>
                      <div class="col-md-3 col-sm-3"><a rel="gallery1" href="/assets/img/about/about_slider/about7.jpg" class="thumbnail fancybox-gallery"><img src="/assets/img/about/about_slider/about7.jpg" alt="Image" class="polaroid-frame" style="max-width:100%;"></a></div>
                      <div class="col-md-3 col-sm-3"><a rel="gallery1" href="/assets/img/about/about_slider/about8.jpg" class="thumbnail fancybox-gallery"><img src="/assets/img/about/about_slider/about8.jpg" alt="Image" class="polaroid-frame" style="max-width:100%;"></a></div>
                    </div><!--.row-->
                </div><!--.item-->

                <div class="item">
                    <div class="row">
                      <div class="col-md-3 col-sm-3"><a rel="gallery1" href="/assets/img/about/about_slider/about9.jpg" class="thumbnail fancybox-gallery"><img src="/assets/img/about/about_slider/about9.jpg" alt="Image" class="polaroid-frame" style="max-width:100%;"></a></div>
                      <div class="col-md-3 col-sm-3"><a rel="gallery1" href="/assets/img/about/about_slider/about10.jpg" class="thumbnail fancybox-gallery"><img src="/assets/img/about/about_slider/about10.jpg" alt="Image" class="polaroid-frame" style="max-width:100%;"></a></div>
                      <div class="col-md-3 col-sm-3"><a rel="gallery1" href="/assets/img/about/about_slider/about11.jpg" class="thumbnail fancybox-gallery"><img src="/assets/img/about/about_slider/about11.jpg" alt="Image" class="polaroid-frame" style="max-width:100%;"></a></div>
                      <div class="col-md-3 col-sm-3"><a rel="gallery1" href="/assets/img/about/about_slider/about12.jpg" class="thumbnail fancybox-gallery"><img src="/assets/img/about/about_slider/about12.jpg" alt="Image" class="polaroid-frame" style="max-width:100%;"></a></div>
                    </div><!--.row-->
                </div><!--.item-->

                <div class="item">
                    <div class="row">
                      <div class="col-md-3 col-sm-3"><a rel="gallery1" href="/assets/img/about/about_slider/about13.jpg" class="thumbnail fancybox-gallery"><img src="/assets/img/about/about_slider/about13.jpg" alt="Image" class="polaroid-frame" style="max-width:100%;"></a></div>
                      <div class="col-md-3 col-sm-3"><a rel="gallery1" href="/assets/img/about/about_slider/about14.jpg" class="thumbnail fancybox-gallery"><img src="/assets/img/about/about_slider/about14.jpg" alt="Image" class="polaroid-frame" style="max-width:100%;"></a></div>
                      <div class="col-md-3 col-sm-3"><a rel="gallery1" href="/assets/img/about/about_slider/about15.jpg" class="thumbnail fancybox-gallery"><img src="/assets/img/about/about_slider/about15.jpg" alt="Image" class="polaroid-frame" style="max-width:100%;"></a></div>
                      <div class="col-md-3 col-sm-3"><a rel="gallery1" href="/assets/img/about/about_slider/about16.jpg" class="thumbnail fancybox-gallery"><img src="/assets/img/about/about_slider/about16.jpg" alt="Image" class="polaroid-frame" style="max-width:100%;"></a></div>
                    </div><!--.row-->
                </div><!--.item-->

                <div class="item">
                    <div class="row">
                      <div class="col-md-3 col-sm-3"><a rel="gallery1" href="/assets/img/about/about_slider/about17.jpg" class="thumbnail fancybox-gallery"><img src="/assets/img/about/about_slider/about17.jpg" alt="Image" class="polaroid-frame" style="max-width:100%;"></a></div>
                      <div class="col-md-3 col-sm-3"><a rel="gallery1" href="/assets/img/about/about_slider/about18.jpg" class="thumbnail fancybox-gallery"><img src="/assets/img/about/about_slider/about18.jpg" alt="Image" class="polaroid-frame" style="max-width:100%;"></a></div>
                    </div><!--.row-->
                </div><!--.item-->

                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#AboutCarousel" class="left carousel-control-fei"><i class="icon-left-open"></i></a>
                  <a data-slide="next" href="#AboutCarousel" class="right carousel-control-fei"><i class="icon-right-open"></i></a>
                </div><!--.Carousel-->

            </div>
        </div><!-- End row -->

    </div><!-- End container -->

</section><!-- End main_content-->

@stop