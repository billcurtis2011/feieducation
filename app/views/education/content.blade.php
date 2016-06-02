@section('content')


<section id="sub-header" class="education-sub-header">
        <div class="header-overlay-imgthief"></div>
        <div class="container sub-header-content">
        <div class="row">
            <div class="col-md-12 sub-header-text-content">
                <h1 class="main-headeing"><span class="animated fadeInDown">{{Lang::get('programs.header_title')}}</span></h1>
                <p class="lead boxed-subheading-semiblue animated fadeInDown">
                    {{Lang::get('programs.header_subtitle')}}
                </p>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    <div class="divider_top"></div>
</section><!-- End sub-header -->


<section id="main_content" class="education-main-section">

    <div class="container">

        <ol class="breadcrumb">
            <li><a href="/">FEI</a></li>
            <li class="active">{{Lang::get('header.menu_programs')}}</li>
        </ol>


        <div class="row page-inner-section">
            <div class="col-md-8">
                <div class="about-subsection-left">
                    <h2>{{Lang::get('programs.program_index_header1')}}</h2>
                    <p>{{Lang::get('programs.program_index_content1')}}</p>
                    <br/>
                    <h2>{{Lang::get('programs.program_index_header2')}}</h2>
                    <p>{{Lang::get('programs.program_index_content2')}}</p>
                    <br/>
                    <h2>{{Lang::get('programs.program_index_header3')}}</h2>
                    <p>{{Lang::get('programs.program_index_content3')}}</p>
                </div>
            </div>

           <aside class="col-md-4">
           	<?php if(Session::get('locale') == "en") {?>
                @include('includes.form-side')
             <?php }else{?>
             	@include('includes.form-side1')
             <?php }?>
                <div class="box_style_1">
                    <div class="text-center fei-help-phone-sec">
                        <span>{{Lang::get('programs.CTA_subheading')}}</span>
                        <div class="aside-callout-number">305.748.2865</div>
                    </div>
                    <div class="side-contact-info">
                        <ul id="contact-info" class="admissions-contact-info">
                            <li><h5><i class="icon-home"></i> 5818 SW 8th Street, Miami, FL 33144</h5></li>
                            
                        </ul>
                    </div>
                </div>

            </aside> <!-- End col-md-4 -->

        </div>



    </div><!-- End container -->
</section><!-- End main_content-->

<section class="programs-section-grid">
        <div class="container">
            <div class="row page-inner-section">

                <div class="col-md-12"><h2 id="available-courses" class="inner-section-heading">{{Lang::get('admissions.programs_title')}}</h2></div>

                <div class="col-lg-4 col-md-6">
                    <div class="col-item">
                        <div class="photo">
                            <a href="/programs/medical-assistant"><img class="img-thumbnail" src="/assets/img/admissions/MA_box.jpg" alt="" /></a>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="course_info course-info-fei col-md-12 col-sm-12">
                                    <h4><a href="/programs/medical-assistant">{{Lang::get('admissions.medical_assistant_title')}}</a></h4>
                                    <p> {{Lang::get('admissions.medical_assistant_description')}} </p>
                                    <a href="/programs/medical-assistant" class="button_outline yellow-outline-small">{{Lang::get('admissions.admisiones_learn_more')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="col-item">
                        <div class="photo">
                            <a href="/programs/medical-billing-and-coding"><img class="img-thumbnail" src="/assets/img/admissions/MBC_box.jpg" alt="" /></a>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="course_info course-info-fei col-md-12 col-sm-12">
                                    <h4><a href="/programs/medical-billing-and-coding">{{Lang::get('admissions.medical_billing_title')}}</a></h4>
                                    <p> {{Lang::get('admissions.medical_billing_description')}}</p>
                                    <a href="/programs/medical-billing-and-coding" class="button_outline yellow-outline-small">{{Lang::get('admissions.admisiones_learn_more')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="col-item">
                        <div class="photo">
                            <a href="/programs/patient-care-technician"><img class="img-thumbnail" src="/assets/img/admissions/PCT_box.jpg" alt="" /></a>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="course_info course-info-fei col-md-12 col-sm-12">
                                    <h4><a href="/programs/patient-care-technician">{{Lang::get('admissions.patient_care_title')}}</a></h4>
                                    <p> {{Lang::get('admissions.patient_care_description')}} </p>
                                    <a href="/programs/patient-care-technician" class="button_outline yellow-outline-small">{{Lang::get('admissions.admisiones_learn_more')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="col-item">
                        <div class="photo">
                            <a href="/programs/pharmacy-technician"><img class="img-thumbnail" src="/assets/img/admissions/PHT_box.jpg" alt="" /></a>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="course_info course-info-fei col-md-12 col-sm-12">
                                    <h4><a href="/programs/pharmacy-technician">{{Lang::get('admissions.pharmacy_technician_title')}}</a></h4>
                                    <p> {{Lang::get('admissions.pharmacy_technician_description')}} </p>
                                    <a href="/programs/pharmacy-technician" class="button_outline yellow-outline-small">{{Lang::get('admissions.admisiones_learn_more')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="col-item">
                        <div class="photo">
                            <a href="/programs/medical-office-administrator"><img class="img-thumbnail" src="/assets/img/admissions/MOA_box.jpg" alt="" /></a>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="course_info course-info-fei col-md-12 col-sm-12">
                                    <h4><a href="/programs/medical-office-administrator">{{Lang::get('admissions.medical_administrator_title')}}</a></h4>
                                    <p> {{Lang::get('admissions.medical_administrator_description')}} </p>
                                    <a href="/programs/medical-office-administrator" class="button_outline yellow-outline-small">{{Lang::get('admissions.admisiones_learn_more')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="col-item">
                        <div class="photo">
                            <a href="/programs/massage-therapy"><img class="img-thumbnail" src="/assets/img/admissions/MT_box.jpg" alt="" /></a>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="course_info course-info-fei col-md-12 col-sm-12">
                                    <h4><a href="/programs/massage-therapy">{{Lang::get('admissions.masage_therapy_title')}}</a></h4>
                                    <p> {{Lang::get('admissions.masage_therapy_description')}} </p>
                                    <a href="/programs/massage-therapy" class="button_outline yellow-outline-small">{{Lang::get('admissions.admisiones_learn_more')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="col-item">
                        <div class="photo">
                            <a href="/programs/business-management"><img class="img-thumbnail" src="/assets/img/admissions/BM_box.jpg" alt="" /></a>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="course_info course-info-fei col-md-12 col-sm-12">
                                    <h4><a href="/programs/business-management">{{Lang::get('admissions.business_administration_title')}}</a></h4>
                                   <?php /* <span class="small course-duration-mini"><i class="icon-clock"></i> {{Lang::get('admissions.business_administration_duration')}}</span> */ ?>
                                    <p> {{Lang::get('admissions.business_administration_description')}} </p>
                                    <a href="/programs/business-management" class="button_outline yellow-outline-small">{{Lang::get('admissions.admisiones_learn_more')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="col-item">
                        <div class="photo">
                            <a href="/programs/{{Lang::get('header.home-health-aide')}}"><img class="img-thumbnail" src="/assets/img/admissions/HHA_box.jpg" alt="" /></a>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="course_info course-info-fei col-md-12 col-sm-12">
                                    <h4><a href="/programs/{{Lang::get('header.home-health-aide')}}">{{Lang::get('admissions.hha_title')}}</a></h4>
                                    <p> {{Lang::get('admissions.hha_description')}} </p>
                                    <a href="/programs/{{Lang::get('header.home-health-aide')}}" class="button_outline yellow-outline-small">{{Lang::get('admissions.admisiones_learn_more')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="col-item">
                        <div class="photo">
                            <a href="/programs/{{Lang::get('header.ca')}}"><img class="img-thumbnail" src="/assets/img/admissions/CA_box.jpg" alt="" /></a>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="course_info course-info-fei col-md-12 col-sm-12">
                                    <h4><a href="/programs/{{Lang::get('header.ca')}}">{{Lang::get('admissions.ca_title')}}</a></h4>
                                    <p> {{Lang::get('admissions.ca_description')}} </p>
                                    <a href="/programs/{{Lang::get('header.ca')}}" class="button_outline yellow-outline-small">{{Lang::get('admissions.admisiones_learn_more')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="col-item">
                        <div class="photo">
                            <a href="/programs/{{Lang::get('header.pba')}}"><img class="img-thumbnail" src="/assets/img/admissions/PBA_box.jpg" alt="" /></a>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="course_info course-info-fei col-md-12 col-sm-12">
                                    <h4><a href="/programs/{{Lang::get('header.pba')}}">{{Lang::get('admissions.pba_title')}}</a></h4>
                                    <p> {{Lang::get('admissions.pba_description')}} </p>
                                    <a href="/programs/{{Lang::get('header.pba')}}" class="button_outline yellow-outline-small">{{Lang::get('admissions.admisiones_learn_more')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="col-item">
                        <div class="photo">
                            <a href="/programs/{{Lang::get('header.hvac')}}"><img class="img-thumbnail" src="/assets/img/admissions/HVAC_box.jpg" alt="" /></a>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="course_info course-info-fei col-md-12 col-sm-12">
                                    <h4><a href="/programs/{{Lang::get('header.hvac')}}">{{Lang::get('admissions.hvac_title')}}</a></h4>
                                    <p> {{Lang::get('admissions.hvac_description')}} </p>
                                    <a href="/programs/{{Lang::get('header.hvac')}}" class="button_outline yellow-outline-small">{{Lang::get('admissions.admisiones_learn_more')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="col-item">
                        <div class="photo">
                            <a href="/esl"><img class="img-thumbnail" src="/assets/img/admissions/ESL_box.jpg" alt="" /></a>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="course_info course-info-fei col-md-12 col-sm-12">
                                    <h4><a href="/esl">{{Lang::get('admissions.esl_title')}}</a></h4>
                                    <p> {{Lang::get('admissions.esl_description')}} </p>
                                    <a href="/esl" class="button_outline yellow-outline-small">{{Lang::get('admissions.admisiones_learn_more')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- End row -->
        </div><!-- End container -->
    </section>

@stop