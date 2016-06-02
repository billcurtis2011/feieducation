<section id="pre-footer" class="middle-admissions-section">
    <div class="container">
      <h2 class="pre-footertitle">{{Lang::get('footer.what_next')}}</h2>
        <div class="row page-inner-section">
            <div class="col-md-4">
                <div class="media pretty-media-cb">
                    <div class="pretty-admissions-image"><img src="/assets/img/admissions/front-school.jpg"></div>
                    <div class="media-body">
                        <h4 class="media-heading">{{Lang::get('admissions.step1_title')}}</h4>
                        <p>{{Lang::get('admissions.step1_text1')}}</p>
                        <p>{{Lang::get('admissions.step1_text2')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media pretty-media-cb">
                    <div class="pretty-admissions-image"><img src="/assets/img/admissions/phone-person.jpg"></div>
                    <div class="media-body">
                        <h4 class="media-heading">{{Lang::get('admissions.step2_title')}}</h4>
                         <p>{{Lang::get('admissions.step2_text1')}}</p>
                        <p>{{Lang::get('admissions.step2_text2')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media pretty-media-cb">
                    <div class="pretty-admissions-image"><img src="/assets/img/admissions/connect.jpg"></div>
                    <div class="media-body">
                        <h4 class="media-heading">{{Lang::get('admissions.step3_title')}}</h4>
                         <p>{{Lang::get('admissions.step3_text1')}}</p>
                        <p>{{Lang::get('admissions.step3_text2')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h3>{{Lang::get('footer.subscribe_label')}}</h3>
      <div id="message-newsletter">
        <div id="success_page" style='padding-top:11px; display: none'>  
            {{Lang::get('footer.success_message')}}<br/>
            {{Lang::get('footer.more_info')}} <a href="/{{Lang::get('header.sign-up')}}" class="fancybox-get-info fancybox.iframe" onClick="ga('send', 'event', { eventCategory: 'CTA', eventAction: 'Newsletter confirmation Message link', eventLabel: 'Clicked'});"><strong>{{Lang::get('footer.click_here')}}</strong></a>
        </div>
      </div>
      <form method="post" name="newsletter" id="newsletter" class="form-inline animated">
        <input name="email_newsletter" id="email_newsletter" type="email" value="" placeholder="{{Lang::get('footer.subscribe_placeholder')}}" class="form-control">
        <button id="submit-newsletter" class="button_outline" onClick="ga('send', 'event', { eventCategory: 'CTA', eventAction: 'Footer - Email Subscribe', eventLabel: 'Clicked'});"> {{Lang::get('footer.subscribe_CTA')}}</button>
      </form>
    </div>
  </div>
</div>

<hr>

<div class="container" id="nav-footer">
  <div class="row text-left">
    <div class="col-md-2 col-xs-4 text-center">
      <img src="/assets/img/white-logo.png" class="footer-logo" alt="florida education institute"/>
      <img src="/assets/img/Business-Academy-Logo.png" class="footer-logo"/>
    </div>
    <div class="col-md-2 col-xs-8">
      <img src="/assets/img/CETPC.png" class="footer-logo" />
    </div>
    <div class="clearfix visible-xs" style="margin-bottom: 20px;"></div>
    <div class="col-md-2 col-xs-7">
      <ul id="follow_us">
        <li><a href="https://facebook.com/FEI.Miami" target="_blank" onClick="ga('send', 'event', { eventCategory: 'link', eventAction: 'Footer - FB Link', eventLabel: 'Clicked'});"><i class="icon-facebook"></i></a></li>
        <li><a href="https://twitter.com/FEIMiami" target="_blank" onClick="ga('send', 'event', { eventCategory: 'link', eventAction: 'Footer - TW Link', eventLabel: 'Clicked'});"><i class="icon-twitter"></i></a></li>
        <li><a href="https://plus.google.com/+FloridaEducationInstituteMiami" rel="publisher" target="_blank" onClick="ga('send', 'event', { eventCategory: 'link', eventAction: 'Footer - GPLUS Link', eventLabel: 'Clicked'});"><i class=" icon-google"></i></a></li>
      </ul>
      <ul>
        <li><strong class="phone">{{Lang::get('footer.contact_phone')}}</strong><br><strong>{{Lang::get('footer.contact_name')}}</strong></li>
        <li>{{Lang::get('footer.contact_address')}}<br><a href="mailto:info@fei.edu">{{Lang::get('footer.contact_email')}}</a></li>
      </ul>
      <img src="/assets/img/FEI-20-Year-Anniversary.png" width="90" />
    </div><!-- End col-md-4 -->
    <div class="col-md-2 col-xs-5">
      <h4>{{Lang::get("footer.important_links")}}</h4>
      <ul>
        <li><a href="/">{{Lang::get('header.menu_fei')}}</a></li>
        <li><a href="/{{Lang::get('header.admissions')}}">{{Lang::get('header.menu_admissions')}}</a></li>
        <li><a href="/{{Lang::get('header.career')}}">{{Lang::get('header.career_services_link')}}</a></li>
        <li><a href="/{{Lang::get('header.financial-aid')}}">{{Lang::get('header.menu_financial_aid')}}</a></li>
        <li><a href="/{{Lang::get('header.blog')}}">{{Lang::get('header.menu_news')}}</a></li>
        <li><a href="/{{Lang::get('header.about')}}">{{Lang::get('header.menu_about')}}</a></li>
        <li><a href="/{{Lang::get('header.success-stories')}}">{{Lang::get('header.menu_success')}}</a></li>
        <li><a href="/{{Lang::get('header.all_disclosures_links')}}">{{Lang::get('header.menu_disclosure')}}</a></li>
        <li><a href="/NetPriceCalculator/npcalc.htm" class="fancybox-npc fancybox.iframe">{{Lang::get('header.menu_net_price')}}</a></li>
        <li><a href="/{{Lang::get('header.advisement')}}">{{Lang::get('header.menu_career_advisement')}}</a></li>
        <li><a href="/wordpress/jobs" class="fancybox-jobs fancybox.iframe">{{Lang::get('header.jobs_link_label')}}</a></li>
        <li><a href="/{{Lang::get('header.contact')}}">{{Lang::get('header.menu_contact')}}</a></li>
        <li><a href="/privacy">Privacy Policy</a></li>

      </ul>
    </div><!-- End col-md-4 -->
    <div class="col-md-4 col-xs-12">
      <h4>{{Lang::get('footer.about_fei_label')}}</h4>
      <p>{{Lang::get('footer.about_fei')}} </p>
        <div class="col-xs-12 no-padding">
            <strong>Licensure and Accreditation</strong><br />
            <a href="http://www.fldoe.org/cie/help_choosing.asp" target="_blank" style="color: #b4d3e0;">
                 <?php /* <img src="/assets/img/fl-dep-edu.jpg" class="accreditaion-img"/> */ ?>
                 Florida Department of Education
            </a>
            <br />
            <a href="http://www.council.org/" target="_blank" style="color: #b4d3e0;">
                <?php /* <img src="/assets/img/coe.png" class="accreditaion-img coe-img"/> */ ?>
                Council of Occupational Education
            </a>
        </div>
    </div><!-- End col-md-4 -->


  </div><!-- End row -->
</div>
<div id="copy_right">&copy; Florida Education Institute {{date("Y")}}. {{Lang::get('footer.copyright')}}.</div>
</footer>

<!-- OTHER JS -->
<script src="/assets/js/superfish.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<!-- <script src="/assets/js/retina.min.js"></script> -->
<script src="/assets/js/jquery.placeholder.js"></script>
<script src="/assets/js/functions.js"></script>
<script src="/assets/js/classie.js"></script>
<?php /* <script src="/assets/js/uisearch.js"></script> */?>

<!-- CB JS -->
<script src="/assets/js/jquery.backstretch.min.js"></script>
<script src="/assets/js/jquery.fancybox.pack.js"></script>
<script src="/assets/js/jquery.cookie.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/check_radio/icheck.min.js"></script>
<script src="/assets/js/bootstrap-slider.js"></script>
<script src="/assets/js/modernizr.custom.63321.js"></script>
<script src="/assets/js/jquery.dropdown.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>



<!-- GOOGLE MAP -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="/assets/js/mapmarker.jquery.js"></script>
<script type="text/javascript" src="/assets/js/mapmarker_func.jquery.js"></script>
<script type="text/javascript">
//new UISearch( document.getElementById( 'sb-search' ) );

//start the slider
$(function() {

    // Initialize the slider plugin
    $('input.boost_slider').slider({
        formater: function(value) {
            return 'How true? ' + value;
        }
    });

    //start checkboxes and radios
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-yellow',
        radioClass: 'iradio_square-yellow',
        increaseArea: '20%' // optional
    });

    //Initiate wow script
    new WOW().init();

    $("ul.dropdown-menu").click(function(e){
        e.stopPropagation();
    });

    //--------------Backstretch-------------//

    $("#home-mainslide").backstretch("/assets/img/home_slides/slide4_web.jpg");
    //$("#home-mainslide").backstretch("/assets/img/home_slides/may-slide.jpg");

    $('#home-main-carousel').on('slide.bs.carousel', function () {
        //Homepage
        $("#home-slide1").backstretch("/assets/img/home_slides/slide1_web_mini.jpg");
        $("#home-slide2").backstretch("/assets/img/home_slides/slide2_web_mini.jpg");
        $("#home-slide3").backstretch("/assets/img/home_slides/slide3_web_mini.jpg");
    })

    //home services
    $("#career-path").backstretch("/assets/img/home_survey_bg_mini.jpg");

    //Checkout
    $("#checkout-section").backstretch("/assets/img/home_survey_bg_mini.jpg");

    //Admissions
    $(".admissions-sub-header").backstretch("/assets/img/admissions/optimized/admissions_header_mini.jpg");

    //About
    $(".about-sub-header").backstretch("/assets/img/about/optimized/about_header_mini.jpg");

    //Contact
    $(".contact-sub-header").backstretch("/assets/img/contact/optimized/contact_header_mini.jpg");

    //Success Stories
    $(".stories-sub-header").backstretch("/assets/img/success_stories/success_header.jpg");

    //Financial Aid
    $(".financial-aid-sub-header").backstretch("/assets/img/financial_aid/optimized/financial_aid_header_mini.jpg");

     //Career Advisement
    $(".career-advisement-sub-header").backstretch("/assets/img/career_advisement/optimized/career_ad_header_mini.jpg");

    //Career Services
    $(".career-sub-header").backstretch("/assets/img/career_services/career_ser_header3.jpg");

    //Blog
    $(".blog-sub-header").backstretch("/assets/img/blog/evenet-pic.jpg");

    //Education page
    $(".education-sub-header").backstretch("/assets/img/education/education-bg-5.jpg");

    //Programs
    //*MA
    $(".medical-assistant-sub-header").backstretch("/assets/img/admissions/optimized/MA_header_mini.jpg");
    //*MBC
    $(".medical-billing-and-coding-sub-header").backstretch("/assets/img/admissions/optimized/MBC_header_mini.jpg");
    //*PCT
    $(".patient-care-technician-sub-header").backstretch("/assets/img/admissions/optimized/PCT_header_mini.jpg");
    //*PHT
    $(".pharmacy-technician-sub-header").backstretch("/assets/img/admissions/optimized/PHT_header_mini.jpg");
    //*BM
    $(".business-management-sub-header").backstretch("/assets/img/admissions/optimized/BM_header_mini.jpg");
    //*MOA
    $(".medical-office-administrator-sub-header").backstretch("/assets/img/admissions/optimized/MOA_header_mini.jpg");
    //*MT
    $(".massage-therapy-sub-header").backstretch("/assets/img/admissions/optimized/MT_header_mini.jpg");

    //Landing Pages
    //*MA
    $(".ma-landing").backstretch("/assets/img/landing/ma-header.jpg");
    $(".mbc-landing").backstretch("/assets/img/landing/mbc-header.jpg");
    $(".pht-landing").backstretch("/assets/img/landing/pht-header.jpg");
    $(".mt-landing").backstretch("/assets/img/landing/mt-header.jpg");
    $(".esl-landing").backstretch("/assets/img/landing/esl-header.jpg");
    $(".hha-landing").backstretch("/assets/img/landing/hha-header.jpg");
    $(".hvac-landing").backstretch("/assets/img/landing/hvac-header.jpg");
    $(".ca-landing").backstretch("/assets/img/landing/ca-header.jpg");
    $(".pba-landing").backstretch("/assets/img/landing/pba-header.jpg");

    //Business Academy Image
    $(".businessacademy-header").backstretch("/assets/img/business-academy.jpg");



    //Fancybox trigger
    $(".fancybox").fancybox({
        maxWidth    : 1024,
        maxHeight   : 598,
        fitToView   : false,
        width       : '100%',
        height      : '100%',
        autoSize    : false,
        closeClick  : false,
        openEffect  : 'elastic',
        closeEffect : 'elastic',
        padding: 0,
        ajax: true,
        helpers: {
            overlay: {
                  locked: false
                }
              }
    });

    //Main get info form
    $(".fancybox-get-info").fancybox({
        maxWidth    : 500,
        maxHeight   : 570,
        fitToView   : false,
        width       : '100%',
        height      : '100%',
        autoSize    : false,
        closeClick  : false,
        openEffect  : 'elastic',
        closeEffect : 'elastic',
        padding: 0,
        ajax: true,
        helpers: {
            overlay: {
                  locked: false
                }
              }
    });

    //Net price calculator form
    $(".fancybox-npc").fancybox({
        maxWidth    : 800,
        maxHeight   : 580,
        fitToView   : false,
        width       : '100%',
        height      : '100%',
        autoSize    : false,
        closeClick  : false,
        openEffect  : 'elastic',
        closeEffect : 'elastic',
        padding: 0,
        ajax: true,
        helpers: {
            overlay: {
                  locked: false
                }
              }
    });

    //Net price calculator form
    $(".fancybox-jobs").fancybox({
        maxWidth    : 800,
        maxHeight   : 580,
        fitToView   : false,
        width       : '100%',
        height      : '100%',
        autoSize    : false,
        closeClick  : false,
        openEffect  : 'elastic',
        closeEffect : 'elastic',
        padding: 0,
        ajax: true,
        helpers: {
            overlay: {
                  locked: false
                }
              }
    });

    //image slider
    $(".fancybox-gallery").fancybox({
        openEffect  : 'elastic',
        closeEffect : 'elastic',
        helpers: {
            overlay: {
                  locked: false
                }
              }
    });

    //Single image load
    $(".fancybox-single-img").fancybox({
        maxWidth    : '100%',
        //maxHeight   : 580,
        fitToView   : false,
        width       : '100%',
        height      : '100%',
       // autoSize    : true,
        closeClick  : false,
        openEffect  : 'elastic',
        closeEffect : 'elastic',
        padding: 0,
        ajax: true,
        helpers: {
            overlay: {
                  locked: false
                }
              }
    });

});
</script>

<!-- ANALYTICS -->
<script>
//Don't show it for development sites
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50455419-2', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
  ga('send', 'event');

  (function (tos) {
      window.setInterval(function () {
        tos = (function (t) {
          return t[0] == 50 ? (parseInt(t[1]) + 1) + ':00' : (t[1] || '0') + ':' + (parseInt(t[0]) + 10);
        })(tos.split(':').reverse());
        window.pageTracker ? pageTracker._trackEvent('Time', 'Log', tos) : ga('send', 'event', 'Time', 'Log', tos);
      }, 35000);
   })('00');

</script>
<!-- EOF: ANALYTICS -->

<div style="display:none">
<!-- Google Code for Remarketing Tag -->
<!--
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
-->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 980463706;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/980463706/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- EOF: ADWORDS -->
</div>

@if(Request::segment(1) != 'admissions' && Request::segment(1) != 'landing')
  <section id="language_switch" style="display:none;">
      <div class="career-path-questions admission-question-pop" style="margin: 0 !important;">
          <ul class="questions-wrapper">
              <!-- First Question -->
              <li id="step-1">
                  <div class="question-heading">What language do you prefer?</div>
                  <div class="question-controls-wrapper">
                      <div class="no-padding admission-question-pop-controls">
                          <a href="/language-chooser/en" target="_parent" class="questions-buttons button-sp">Español</a>
                          <a href="/language-chooser/sp" target="_parent" class="questions-buttons button-en">English</a>
                      </div>
                  </div>

              </li>
          </ul>
    </div>
  </section>

  <script type="text/javascript">

      /*$(document).ready(function () {
        
          setTimeout(function() {
           if ($.cookie('language_modal') != 1) {
              $.fancybox({
                  maxWidth    : 500,
                  maxHeight   : 266,
                  fitToView   : false,
                  autoSize    : true,
                  closeClick  : false,
                  openEffect  : 'fade',
                  closeEffect : 'fade',
                  padding: 0,
                  margin: 0,
                  transitionIn: 'fade',
                  transitionOut: 'fade',
                  type: 'inline',
                  href: '#language_switch'
              });

              $.cookie("language_modal", 1, { expires : 365 });
            }
          }, 100);

      });*/

  </script>
@endif



  </body>
</html>