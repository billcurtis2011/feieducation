@section('content')
<section id="sub-header" class="financial-aid-sub-header">
        <div class="header-overlay-imgthief"></div>
        <div class="container sub-header-content">
        <div class="row">
            <div class="col-md-12 sub-header-text-content">
                <h1 class="main-headeing"><span class="animated fadeInDown">{{Lang::get('financial_aid.header_title')}}</span></h1>
                <p class="lead boxed-subheading-semiblue animated fadeInDown">
                    {{Lang::get('financial_aid.header_subtitle')}}
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
          <li class="active">{{Lang::get('header.menu_financial_aid')}}</li>
        </ol>
        <div class="row page-inner-section">
            <div class="col-md-8">
                {{Lang::get('financial_aid.finan_content1')}}
                <br/>
                <h2>{{Lang::get('financial_aid.what_is_heading')}}</h2>
                 <br/>
                  {{Lang::get('financial_aid.finan_content2')}}
            </div>
            <aside class="col-md-4">
                <div class="box_style_4 dark_style_sideform">
                    <div class="financil-aid-survey previous_fafsa_step animated">
                      {{Lang::get('financial_aid.finan_content3')}}
                    </div>
                    <div class="financil-aid-survey help_fafsa_step animated" style="display: none;">
                    	{{Lang::get('financial_aid.finan_content4')}}
                    </div>
                    <div class="form-thank-you-message animated" id="fa-thank-you" style="display: none;">
                        {{Lang::get('financial_aid.finan_content5')}}
                    </div>
                    <div class="text-center fei-help-phone-sec fin-aid-phone-sec">
                        <span>{{Lang::get('financial_aid.CTA_subheading')}}</span>
                        <div class="aside-callout-number">305.748.2865</div>
                    </div>
                    <div class="admissions-side-progress" style="width: 50%;"></div>
                </div>
                <div class="box_style_1">
                    <h4>{{Lang::get('financial_aid.important_links_heading')}}</h4>
                    <ul class="list_1 unbold-links">
                        <li><a href="https://studentaid.ed.gov/" target="_blank" rel="nofollow">{{Lang::get('financial_aid.important_links_label1')}}</a></li>
                        <li><a href="http://www.direct.ed.gov/student.html" target="_blank" rel="nofollow">{{Lang::get('financial_aid.important_links_label2')}}</a></li>
                        <li><a href="https://pin.ed.gov/PINWebApp/pinindex.jsp" target="_blank" rel="nofollow">{{Lang::get('financial_aid.important_links_label3')}}</a></li>
                        <li><a href="https://studentaid.ed.gov/fafsa/next-steps" target="_blank" rel="nofollow">{{Lang::get('financial_aid.important_links_label4')}}</a></li>
                    </ul>
                </div>
                <div class="box_style_4 fafsa-video-wrapper">
                    <h4 class="fasfa-video-heading">{{Lang::get('financial_aid.fasfa_video_label1')}}</h4>
                    <iframe class="video-tutorial-fafsa polaroid-frame" width="520" height="245" src="//www.youtube.com/embed/D4PIhZd9MU0?hd=1&amp;wmode=opaque&amp;controls=0&amp;showinfo=0;rel=0;" frameborder="0" allowfullscreen=""></iframe>
                </div>
                <div class="box_style_4 fafsa-video-wrapper">
                    <h4 class="fasfa-video-heading">{{Lang::get('financial_aid.fasfa_video_label2')}}</h4>
                    <iframe class="video-tutorial-fafsa polaroid-frame" width="520" height="245" src="//www.youtube.com/embed/9ZNRdk3iXeM?hd=1&amp;wmode=opaque&amp;controls=0&amp;showinfo=0;rel=0;" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </aside> <!-- End col-md-4 -->

        </div>
    </div><!-- End container -->
</section><!-- End main_content-->
@stop