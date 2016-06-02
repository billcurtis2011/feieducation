@section('content')


<section id="sub-header" class="career-advisement-sub-header">
        <div class="header-overlay-imgthief"></div>
        <div class="container sub-header-content">
        <div class="row">
            <div class="col-md-12 sub-header-text-content">
                <h1 class="main-headeing"><span class="animated fadeInDown">{{Lang::get('career_advisement.header_title')}}</span></h1>
                <p class="lead boxed-subheading-semiblue animated fadeInDown">
                    {{Lang::get('career_advisement.header_subtitle')}}
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
            <li class="active">{{Lang::get('header.menu_career_advisement')}}</li>
        </ol>


        <div class="row page-inner-section">
            <div class="col-md-8">
                <h2 class="advisement-headings inner-section-heading">Where Do I Begin?</h2>
                <p>Everything starts with asking the right questions, but even then, what are the right questions? The role of our Career Education Advisors are to first, get to know you and your reason for wanting to go to school. This will open the way toward getting the information you need in order to start asking the right questions and getting the information that is going to lead you to finding out your best options for starting a new career. We call this a Career Planning Session, and it is all about you!</p>
                <br/>
                <h2 class="advisement-headings inner-section-heading">The Process</h2>
                <p>During the Career Planning Session you will learn about the career you are interested in, which educational program will best get you there, what requirements you need in order to get started, and what will happen once you graduate. We believe that when you are well informed on a decision, you will feel confident about your choice.</p>
                <br/>
                <h2 class="advisement-headings inner-section-heading">Am I Ready to Do This?</h2>
                <p>Readiness is a state of mind and one can only feel ready when they are confident about their choices. You can take our online survey to get an idea of what program may best suit your interests by clicking <a target="_blank" href="/#career-path">here</a>. Give us a call and talk to one of our helpful Career Education Advisors and they will help you answer your questions.</p>
                <br/>
                <h2 class="advisement-headings inner-section-heading">{{Lang::get('career_advisement.content_heading')}}</h2>
                <p>{{Lang::get('career_advisement.content_text')}}</p>
                <br/>
                <!-- <iframe class="box_style_1 video-tutorial-fafsa" height="433" src="//www.youtube.com/embed/hx-FQB73vyI?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0;" frameborder="0" allowfullscreen=""></iframe> -->
                <h2 class="advisement-headings inner-section-heading">{{Lang::get('career_advisement.content_heading1')}}</h2>

                <p>{{Lang::get('career_advisement.content_text1')}}</p>

            </div>

           <aside class="col-md-4">
                @include('includes.form-side')
                <div class="box_style_1">
                    <div class="text-center fei-help-phone-sec">
                        <span>{{Lang::get('career_advisement.CTA_subheading')}}</span>
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

@stop
