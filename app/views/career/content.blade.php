@section('content')

    <section id="sub-header" class="career-sub-header">
        <div class="header-overlay-imgthief"></div>
        <div class="container sub-header-content">
        <div class="row">
            <div class="col-md-12 sub-header-text-content">
                <h1 class="main-headeing"><span class="animated fadeInDown">{{Lang::get('career.career_title')}}</span></h1>
                <p class="lead boxed-subheading-semiblue animated fadeInDown">
                   {{Lang::get('career.career_sub_title')}}
                </p>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    <div class="divider_top"></div>
    </section><!-- End sub-header -->


   <section id="main_content" class="no-bottom-padding">

        <div class="container">

        <ol class="breadcrumb">
          <li><a href="/">FEI</a></li>
          <li class="active">{{Lang::get('career.career_title1')}}</li>
        </ol>

            <div class="row page-inner-section">
                <div class="col-md-8">
                    <div class="about-subsection-left">
                        <h2>{{Lang::get('career.career_header1')}}</h2>
                        <p>{{Lang::get('career.career_content1')}}</p>
                         <h2>{{Lang::get('career.career_header2')}}</h2>
                        <p>{{Lang::get('career.career_content2')}}</p>
                         <h2>{{Lang::get('career.career_header3')}}</h2>
                        <p>{{Lang::get('career.career_content3')}}</p>
                         <h2>{{Lang::get('career.career_header4')}}</h2>
                        <p>{{Lang::get('career.career_content4')}}</p>
                           {{Lang::get('career.career_content4_ul')}}	
                        <br/>
                        <h2>{{Lang::get('career.career_header5')}}</h2>
                        <p>{{Lang::get('career.career_content5')}}</p>
                        <p>{{Lang::get('career.career_content51')}}</p>
                        <img width="500" src="/assets/img/career_services/employer-benefits-hotline.png" />
                        <p>{{Lang::get('career.career_content52')}}</p>
                        <h2></h2>
                        <p></p>
                    </div>
                </div>

                <aside class="col-md-4">
                 <?php if(Session::get('locale') == "en") {?>
                    @include('includes.form-side')
                  <?php }else{?>
                  	@include('includes.form-side1')
                  <?php }?>
                    <div class="box_style_1">
                        <h4>{{Lang::get('career.career_contact')}}</h4>
                        <div class="side-contact-info">
                            <ul id="contact-info" class="admissions-contact-info">
                                <li><div class="aside-callout-number">305.748.2865</div></li>
                                <li><h5><i class="icon-home"></i> 5818 SW 8th Street, Miami, FL 33144</h5></li>
                                
                            </ul>
                        </div>
                    </div>

                </aside> <!-- End col-md-4 -->
            </div>

        </div><!-- End container -->
    </section><!-- End main_content -->

    <section class="section_content_yellow">
        <div class="container">
            <div class="page-inner-section">
                <div class="about-subsection-left">
                    <h3>{{Lang::get('career.career_service_title')}}</h3>
                    <p>{{Lang::get('career.career_service_content')}}</p>

                    <div class="col-md-4">
                        <div class="box_style_1 text-center wow bounceInUp">
                            <p><img src="/assets/img/walgreens.jpg" class="styled"></p>
                            <h4 class="p-title">{{Lang::get('career.career_service1')}}</h4>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box_style_1 text-center wow bounceInUp">
                            <p><img src="/assets/img/cvs.jpg" class="styled"></p>
                            <h4 class="p-title">{{Lang::get('career.career_service2')}}</h4>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box_style_1 text-center wow bounceInUp">
                            <p><img src="/assets/img/mount-sinai.jpg" class="styled"></p>
                            <h4 class="p-title">{{Lang::get('career.career_service3')}}</h4>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box_style_1 text-center wow bounceInUp">
                                <p><img src="/assets/img/navarro-logo.jpg" class="styled"></p>
                                <h4 class="p-title">{{Lang::get('career.career_service4')}}</h4>
                                <p>{{Lang::get('career.career_service4_content')}}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_style_1 text-center wow bounceInUp">
                                <p><img src="/assets/img/pasteur-logo.jpg" class="styled"></p>
                                <h4 class="p-title">{{Lang::get('career.career_service5')}}</h4>
                                <p>{{Lang::get('career.career_service5_content')}}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_style_1 text-center wow bounceInUp">
                                <p><img src="/assets/img/leonmedical-logo.jpg" class="styled"></p>
                                <h4 class="p-title">{{Lang::get('career.career_service6')}}</h4>
                                <p>{{Lang::get('career.career_service6_content')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop