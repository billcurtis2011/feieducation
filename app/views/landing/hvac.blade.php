@section('content')
<section id="sub-header" class="landing-page-heading hvac-landing">
    <div class="header-overlay-imgthief"></div>
    <div class="container sub-header-content">
        <div class="row">
            <div class="col-md-10 col-md-push-1 sub-header-text-content">
                 {{Lang::get('HVAC_program.page_main_title_section')}}
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
    <div class="divider_top"></div>
</section>

<!-- End sub-header -->
<section id="landing_main_content">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-push-1 landing-aside-control" id="aside-col">
                 @include('includes.form-side')
            </div>
            <div class="col-md-10 col-md-push-1">
                 {{Lang::get('HVAC_program.career_outlook_section')}}
            </div>
        </div>
        <!-- End row -->
        <!-- <div class="row">
            <div class="col-md-10 col-md-push-1">
                 {{Lang::get('HVAC_program.partners_list')}}
                <div class="landing-partnerimg">
                    <img src="/assets/img/walgreens.jpg" class="styled">
                    <img src="/assets/img/cvs.jpg" class="styled">
                    <img src="/assets/img/mount-sinai.jpg" class="styled">
                    <img src="/assets/img/navarro-logo.jpg" class="styled">
                    <img src="/assets/img/pasteur-logo.jpg" class="styled">
                    <img src="/assets/img/leonmedical-logo.jpg" class="styled">
                </div>
            </div>
        </div> -->
    </div>
    <!-- End container -->
</section>
<!-- End main_content-->

<section class="program2nd-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-push-1">
                 {{Lang::get('HVAC_program.about_program_section')}}
            </div>
        </div>
    </div>
</section>

<section class="program3nd-sec">
    <div class="container">
        <div class="row">
             {{Lang::get('HVAC_program.why_choose_fei')}}
        </div>
    </div>
</section>

<!-- <section id="career-path">
    <div class="life-fei-video-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="300ms">
                 #include('includes.survey')
            </div>
        </div>
    </div>
</section> -->

<script type="text/javascript">
    setTimeout(function(){var a=document.createElement("script");
    var b=document.getElementsByTagName("script")[0];
    a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0025/3794.js?"+Math.floor(new Date().getTime()/3600000);
    a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
@stop