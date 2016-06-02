@section('content')
    <section id="sub-header" class="admissions-sub-header">
        <div class="header-overlay-imgthief"></div>
        <div class="container sub-header-content">
            <div class="row">
                <div class="col-md-12 sub-header-text-content">
                    <h1 class="main-headeing"><span class="animated fadeInDown">{{Lang::get('admissions.heading_title')}}</span></h1>
                    <p class="lead boxed-subheading-semiblue animated fadeInDown">
                        {{Lang::get('admissions.heading_subtitle')}}
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
              <li class="active">{{Lang::get('header.menu_admissions')}}</li>
            </ol>

            <div class="row">
                <div class="col-md-8">
                    <h2 class="inner-section-heading">{{Lang::get('admissions.title')}}</h2>
                    <h3>{{Lang::get('admissions.Admisiones_title_first_header')}}</h3>
                    <p>{{Lang::get('admissions.Admisiones_title_first_content')}}</p>
                    <hr>
                      <h3>{{Lang::get('admissions.Admisiones_title_second_header')}}</h3>
                    <p>{{Lang::get('admissions.Admisiones_title_second_content')}}</p>
                    <hr>
                      <h3>{{Lang::get('admissions.Admisiones_title_third_header')}}</h3>
                    <p>{{Lang::get('admissions.Admisiones_title_third_content')}}</p>
                    <hr>
                      <h3>{{Lang::get('admissions.Admisiones_title_fourth_header')}}</h3>
                    <p>{{Lang::get('admissions.Admisiones_title_fourth_content')}}</p>
                    <hr>
                      <h3>{{Lang::get('admissions.Admisiones_title_fifth_header')}}</h3>
                    <p>{{Lang::get('admissions.Admisiones_title_fifth_content')}}</p>
                    <ul class="list_ok">
                        <li>{{Lang::get('admissions.Admisiones_title_fifth_content1')}}</li>
                        <li>{{Lang::get('admissions.Admisiones_title_fifth_content2')}}</li>
                        <li>{{Lang::get('admissions.Admisiones_title_fifth_content3')}}</li>
                        <li>{{Lang::get('admissions.Admisiones_title_fifth_content4')}}</li>
                    </ul>
                    <br/>
                    <p>{{Lang::get('admissions.Admisiones_title_fifth_content5')}}</p>
                </div>

                <aside class="col-md-4">
                <?php 
               
                if(Session::get('locale') == "en") {?>
                     @include('includes.form-side')
                <?php }else{?>
                	@include('includes.form-side1')
                <?php }?>
                    <div class="box_style_1">
                        <h4>{{Lang::get('admissions.contact_fei')}}</h4>
                        <div class="side-contact-info">
                            <ul id="contact-info" class="admissions-contact-info">
                                <li><div class="aside-callout-number">{{Lang::get('admissions.contact_phone')}}</div></li>
                                <li><h5><i class="icon-home"></i> {{Lang::get('admissions.contact_address')}}</h5></li>
                                
                            </ul>
                        </div>
                    </div>

                </aside> <!-- End col-md-4 -->
            </div>

        </div><!-- End container -->
    </section><!-- End main_content -->



<script type="text/javascript">

    $(document).ready(function () {

        if ($.cookie('admissions_modal') != 1) {
            setTimeout(function() {
                $.fancybox({
                    maxWidth    : 500,
                    maxHeight   : 266,
                    fitToView   : false,
                    width       : '90%',
                    height      : '90%',
                    autoSize    : false,
                    closeClick  : false,
                    openEffect  : 'fade',
                    closeEffect : 'fade',
                    padding: 0,
                    transitionIn: 'fade',
                    transitionOut: 'fade',
                    type: 'iframe',
                    href: '/admission-question'
                });
            }, 100);
        };
    });

</script>
@stop