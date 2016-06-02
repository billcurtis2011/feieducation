@section('content')
<section id="sub-header" class="landing-page-heading businessacademy-header">
    <div class="header-overlay-imgthief"></div>
    <div class="container sub-header-content">
        <div class="row">
            <div class="col-md-10 col-md-push-1 sub-header-text-content">
                 {{Lang::get('business-academy.page_main_title_section')}}
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
            <div class="col-md-10 col-md-push-1">
                {{Lang::get('business-academy.about_program_section')}}
            </div>
        </div>
    </div>
    <!-- End container -->
</section>
<!-- End main_content-->

<section class="program2nd-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-push-1">
                 {{Lang::get('business-academy.about_program_section2')}}
            </div>
        </div>
    </div>
</section>

<section class="program3nd-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-push-1">
                 {{Lang::get('business-academy.about_program_section3')}}
            </div>
        </div>
    </div>
</section>

<section class="program4nd-sec">
    <div class="container">
        <div class="row">
             {{Lang::get('business-academy.why_choose_fei')}}
        </div>
    </div>
</section>

<section id="career-path">
    <div class="life-fei-video-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="300ms">
                 @include('includes.survey')
            </div>
        </div>
        <!-- End row -->
    </div>
</section>

@stop