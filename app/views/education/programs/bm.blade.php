
<?php $segment2 = Request::segment(2); ?>
    <section id="sub-header" class="{{$segment2}}-sub-header program-detail">
        <div class="header-overlay-imgthief"></div>
        <div class="container sub-header-content">
            <div class="row">
                <div class="col-md-12 sub-header-text-content">
                    <h1 class="main-headeing"><span class="animated fadeInDown">{{Lang::get('BM_program.heading_title')}}</span></h1>
                    <p class="lead boxed-subheading-semiblue animated fadeInDown">
                        {{Lang::get('BM_program.heading_subtitle')}}
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
                <li><a href="/{{Lang::get('header.programs')}}">{{Lang::get('header.menu_programs')}}</a></li>
                <li class="active">{{Lang::get('BM_program.heading_title')}}</li>
            </ol>

            <div class="row page-inner-section">
                <div class="col-md-8">
                    {{Lang::get('BM_program.program_summary_desc')}}

                    {{Lang::get('BM_program.prog_desc_sec1')}}
                    <br/>
                    {{Lang::get('BM_program.prog_desc_sec2')}}
                
                    <div class="program-pictures-wrap">
                        <div class="col-md-6">
                            <a href="/assets/img/program-slides/BM/slide1.jpg" class="fancybox" rel="program-images">
                                <img class="polaroid-frame" src="/assets/img/program-slides/BM/slide1.jpg" />
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="/assets/img/program-slides/BM/slide2.jpg" class="fancybox" rel="program-images">
                                <img class="polaroid-frame" src="/assets/img/program-slides/BM/slide2.jpg" />
                            </a>
                        </div>
                    </div>
                </div>

                <aside class="col-md-4">
                  <?php if(Session::get('locale') == "en") {?>
                    @include('includes.form-side')
                  <?php }else{?>
                  	@include('includes.form-side1')
                  <?php }?>
                    @include('includes.bm-side')
                </aside> <!-- End col-md-4 -->

            </div>

        </div><!-- End container -->

    </section><!-- End main_content -->
