@section('header')
<?php $segment1 = Request::segment(1); ?>
<?php $segment2 = Request::segment(2); ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    @if(isset($title))
      <title>{{$title}}</title>
    @else
     <title>Florida Education Institute</title>
    @endif
    @if(isset($description))
    <meta name="description" content="{{$description}}" />
    @else
    <meta name="description" content="Florida Education Institute (FEI) has been committed to the success of our students and graduates since 1995. Our school is uniquely designed for our students to have new opportunities and a successful future." />
    @endif
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Favicons-->
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" type="image/x-icon" href="/assets/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/assets/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/assets/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="/assets/img/apple-touch-icon-144x144-precomposed.png">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/superfish.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/assets/fontello/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

    <!-- color scheme css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/color_scheme.css">

    <!-- Toggle Switch -->
    <link rel="stylesheet" type="text/css" href="/assets/check_radio/skins/all.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!--Hotjar JS-->
    <script>
        (function(f,b,g){
            var xo=g.prototype.open,xs=g.prototype.send,c;
            f.hj=f.hj||function(){(f.hj.q=f.hj.q||[]).push(arguments)};
            f._hjSettings={hjid:5834, hjsv:2};
            function ls(){f.hj.documentHtml=b.documentElement.outerHTML;c=b.createElement("script");c.async=1;c.src="//static.hotjar.com/c/hotjar-5834.js?sv=2";b.getElementsByTagName("head")[0].appendChild(c);}
            if(b.readyState==="interactive"||b.readyState==="complete"||b.readyState==="loaded"){ls();}else{if(b.addEventListener){b.addEventListener("DOMContentLoaded",ls,false);}}
            if(!f._hjPlayback && b.addEventListener){
                g.prototype.open=function(l,j,m,h,k){this._u=j;xo.call(this,l,j,m,h,k)};
                g.prototype.send=function(e){var j=this;function h(){if(j.readyState===4){f.hj("_xhr",j._u,j.status,j.response)}}this.addEventListener("readystatechange",h,false);xs.call(this,e)};
            }
        })(window,document,window.XMLHttpRequest);
    </script>


    <script type="text/javascript">
      // Avoid `console` errors in browsers that lack a console.
      (function() {
          var method;
          var noop = function () {};
          var methods = [
              'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
              'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
              'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
              'timeStamp', 'trace', 'warn'
          ];
          var length = methods.length;
          var console = (window.console = window.console || {});

          while (length--) {
              method = methods[length];

              // Only stub undefined methods.
              if (!console[method]) {
                  console[method] = noop;
              }
          }
      }());
    </script>

    <!-- JQUERY -->
    <script src="/assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.validate.min.js"></script>
    <script src="/assets/js/additional-methods.min.js"></script>

    <script type="text/javascript">
    var __lc = {};
    __lc.license = 4818541;

    setTimeout(function() {
      var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
      lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
    }, 8000);


    //Need this vars available in js
    field_human = '{{Lang::get('contact.field_human')}}';
    </script>

    <!-- Angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>

  </head>

  <body>
    <header>
    <div class="container">
  <div class="row">
    <div class="col-md-5 col-sm-4 col-xs-3">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-xs-12">
          <a href="/" id="logo"><img src="/assets/img/fei-logo.png" alt="fei"/></a>
        </div>
		<?php
			if(Session::get('locale') == "en") { echo '<div class="hidden-xs hidden-sm col-lg-6">';}
			else{ echo '<div class="hidden-xs hidden-sm col-lg-9">';}
		?>

          <div class="mini-testimonial-header">"{{ trans('header.quote') }}"</div>
          <div class="mini-testimonial-header-author">- {{ trans('header.quote_author')}}</div>
        </div>
      </div>
    </div>
    <div class="col-md-7 col-sm-8 col-xs-5">
      <div class="header-number-wrapper">
        <div class="animated bounceInDown">
          <div class="pull-right top-header-phone">
            <span class="hidden-xs">{{Lang::get('header.CTA_text')}}</span> <span><a href="tel:1-{{(strpos(URL::previous(), 'facebook') !== false || strpos(URL::previous(), 'cpc') !== false)?'305-547-8693':'305-748-2865'}}" onClick="ga('send', 'event', { eventCategory: 'CTA', eventAction: 'Header - Phone Number', eventLabel: 'Clicked'});" >{{(strpos(URL::previous(), 'facebook') !== false || strpos(URL::previous(), 'cpc') !== false)?'305.547.8693':'305.748.2865'}}</a></span>
          </div>
        </div>
      </div>
      <ul id="top_nav" class="hidden-xs">
          <li><a href="/#career-path" class="goToSection">{{Lang::get('header.home_survey')}}</a></li>
          <li><a href="/{{Lang::get('header.sign-up')}}" class="fancybox-get-info fancybox.iframe" onClick="ga('send', 'event', { eventCategory: 'CTA', eventAction: 'Header - Request Info', eventLabel: 'Clicked'});">{{Lang::get('header.request_info_link')}}</a></li>
          <li><a href="/{{Lang::get('header.contact')}}">{{Lang::get('header.menu_contact')}}</a></li>
          <li class="dropdown">
            <a href="/{{Lang::get('header.location_link')}}" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('header.location')}}</a>
            <ul class="dropdown-menu header-bubble">
              <div class="drop-map-container" id="map-bubble">
              </div>
              <div itemscope="directions" class="drop-get-directions">
                <form action="http://maps.google.com/maps" method="get" target="_blank">
                    <div class="input-group bubble-directions-wrap">
                        <input type="text" name="saddr" placeholder="Enter your starting point" class="form-control style-2">
                        <input itemprop="location" type="hidden" name="daddr" value="5818 SW 8th Street Miami, FL 33144"><!-- Write here your end point -->
                        <span class="input-group-btn button-wrapper-bubble">
                          <button class="btn" type="submit" value="Get directions" style="margin-left:0;">GET DIRECTIONS</button>
                        </span>
                    </div><!-- /input-group -->
                </form>
              </div>
              <div itemscope="contact-info" class="bubble-contact-info">
                  <div class="bubble-contant-item"><h5 itemprop="location"><i class="icon-home"></i> 5818 SW 8th Street, Miami, FL 33144</h5></div class="bubble-contant-item">
              </div>
            </ul>
          </li>
      </ul>
    </div>

  </div>
</div>
</header><!-- End header -->

<nav id="main-fei-header" class="animated">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div id="mobnav-btn"></div>
      <ul class="sf-menu">
        <li @if($segment1 == '')class="activefeitop"@endif id="fei-home-menu">
          <a href="/">{{Lang::get('header.menu_fei')}}</a>
        </li>
        <li @if($segment1 == 'admissions')class="activefeitop"@endif>
          <a href="/{{Lang::get('header.admissions')}}">{{Lang::get('header.menu_admissions')}}</a>
        </li>
        <li class="normal_drop_down @if($segment1 == 'education')activefeitop @endif">
          <a href="/{{Lang::get('header.programs')}}">{{Lang::get('header.menu_programs')}}</a>
          <div class="mobnav-subarrow"></div>
          <ul>
            <li><a href="/{{Lang::get('header.esl')}}">{{Lang::get('admissions.esl_title')}}</a></li>
            <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.medical-assistant')}}">{{Lang::get('admissions.medical_assistant_title')}}</a></li>
            <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.medical-billing-and-coding')}}">{{Lang::get('admissions.medical_billing_title')}}</a></li>
            <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.patient-care-technician')}}">{{Lang::get('admissions.patient_care_title')}}</a></li>
            <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.pharmacy-technician')}}">{{Lang::get('admissions.pharmacy_technician_title')}}</a></li>
            <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.medical-office-administrator')}}">{{Lang::get('admissions.medical_administrator_title')}}</a></li>
            <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.massage-therapy')}}">{{Lang::get('admissions.masage_therapy_title')}}</a></li>
            <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.business-management')}}">{{Lang::get('admissions.business_administration_title')}}</a></li>
            <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.home-health-aide')}}">{{Lang::get('admissions.hha_title')}}</a></li>
            <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.ca')}}">{{Lang::get('admissions.ca_title')}}</a></li>
            <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.pba')}}">{{Lang::get('admissions.pba_title')}}</a></li>
            <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.hvac')}}">{{Lang::get('admissions.hvac_title')}}</a></li>
          </ul>
        </li>
        <li @if($segment1 == 'career')class="activefeitop"@endif>
          <a href="/{{Lang::get('header.career')}}">{{Lang::get('header.career_services_link')}}</a>
        </li>
        <li @if($segment1 == 'financial-aid')class="activefeitop"@endif>
           <a href="/{{Lang::get('header.financial-aid')}}">{{Lang::get('header.menu_financial_aid')}}</a>
        </li>
        <li @if($segment1 == 'blog')class="activefeitop"@endif>
          <a href="/{{Lang::get('header.blog')}}">{{Lang::get('header.menu_news')}}</a>
        </li>
        <li @if($segment1 == 'about')class="activefeitop"@endif>
          <a href="/{{Lang::get('header.about')}}">{{Lang::get('header.menu_about')}}</a>
        </li>
        <li @if($segment1 == 'success-stories')class="activefeitop"@endif>
           <a href="/{{Lang::get('header.success-stories')}}">{{Lang::get('header.menu_success')}}</a>
        </li>
        <?php /*
        @if(Request::segment(1) != 'esl' && Request::segment(1) != 'landing')
          <div class="language-toogle-header">
            @if(Session::get('locale') == 'sp')
            <a href="/language-chooser/en"><img src="/assets/img/us-flag.png" /></a>
            @else
            <a href="/language-chooser/sp"><img src="/assets/img/spain-flag.png" /></a>
            @endif
          </div>
        @endif
        
        <li class="normal_drop_down">
           <a href="javascript:void(0)">{{ Lang::get('header.languages') }}</a>
            <div class="mobnav-subarrow"></div>
              <ul>
                 <li> <a href="/language-chooser/en"> {{ Lang::get('header.languages_english') }} </a> </li>

               <li> <a href="/language-chooser/sp"> {{ Lang::get('header.languages_spanish') }}</a> </li>
              </ul>
        </li>
        */?>
   

      </ul>

      <?php /* <div class="col-md-3 pull-right hidden-sm hidden-xs">
        <div id="sb-search" class="sb-search">
          <form>
            <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
            <input class="sb-search-submit" type="submit" value="">
            <span class="sb-icon-search"></span>
          </form>
        </div>
      </div><!-- End search --> */ ?>

    </div>
  </div><!-- End row -->
</div><!-- End container -->
</nav>


@stop
