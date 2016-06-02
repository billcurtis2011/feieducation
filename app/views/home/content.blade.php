@section('content')
    <section id="sub-header-home" class="homepage-subheader">
        <div class="banner-home carousel slide" data-ride="carousel" id="home-main-carousel">
          <ul class="carousel-inner">
            <li class="item active">
                <div class="slider-bg-wrapper" id="home-mainslide">
                  <div class="container">
                    <div class="row">
                        <div class="col-md-8 main-testimonial-wrap">
                            <div class="main-testimony-line-one wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms"><span>{{Lang::get('home.main_slide_quote1')}}</span></div>
                            <div class="main-testimony-line-two wow fadeInDown" data-wow-duration="1s" data-wow-delay="500ms"><span>{{Lang::get('home.main_slide_quote2')}}</span></div>
                        </div>
                    </div><!-- End row -->
                  </div>
                </div>
            </li>

            <li class="item">
                <div class="slider-bg-wrapper" id="home-slide1">
                  <div class="container">
                    <div class="row">
                        <div class="col-md-7 main-testimonial-wrap" id="subscribe">
                            <div class="main-testimony-line-one wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms"><span>"{{Lang::get('home.main_quote_part1')}}</span></div>
                            <div class="main-testimony-line-two wow fadeInDown" data-wow-duration="1s" data-wow-delay="500ms"><span>{{Lang::get('home.main_quote_part2')}}"</span></div>
                            <div class="main-testimony-author wow fadeInDown" data-wow-duration="1s" data-wow-delay="700ms"><span>- {{Lang::get('home.main_quote_author')}}</span></div>
                        </div>
                    </div><!-- End row -->
                  </div>
                </div>
            </li>

            <li class="item">
                <div class="slider-bg-wrapper" id="home-slide2">
                  <div class="container">
                    <div class="row">
                        <div class="col-md-7 main-testimonial-wrap" id="subscribe">
                            <div class="main-testimony-line-one wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms"><span>"{{Lang::get('home.main_quote2_part1')}}</span></div>
                            <div class="main-testimony-line-two wow fadeInDown" data-wow-duration="1s" data-wow-delay="500ms"><span>{{Lang::get('home.main_quote2_part2')}}"</span></div>
                            <div class="main-testimony-author wow fadeInDown" data-wow-duration="1s" data-wow-delay="700ms"><span>- {{Lang::get('home.main_quote2_author')}}</span></div>
                        </div>
                    </div><!-- End row -->
                  </div>
                </div>
            </li>

            <li class="item">
                <div class="slider-bg-wrapper" id="home-slide3">
                  <div class="container">
                    <div class="row">
                        <div class="col-md-7 main-testimonial-wrap" id="subscribe">
                            <div class="main-testimony-line-one wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms"><span>"{{Lang::get('home.main_quote3_part1')}}</span></div>
                            <div class="main-testimony-line-two wow fadeInDown" data-wow-duration="1s" data-wow-delay="500ms"><span>{{Lang::get('home.main_quote3_part2')}}"</span></div>
                            <div class="main-testimony-author wow fadeInDown" data-wow-duration="1s" data-wow-delay="700ms"><span>- {{Lang::get('home.main_quote3_author')}}</span></div>
                        </div>
                    </div><!-- End row -->
                  </div>
                </div>
            </li>

          </ul>
          <!-- Controls -->
          <a class="left carousel-control" href="#home-main-carousel" role="button" data-slide="prev">
            <i class="icon-left-open-5"></i>
          </a>
          <a class="right carousel-control" href="#home-main-carousel" role="button" data-slide="next">
            <i class="icon-right-open-5"></i>
          </a>
        </div>
  </section><!-- End sub-header -->



    <section id="main-features">
    <div class="divider_top_black"></div>
    <div class="container">
        <div class="row">
            <div class=" col-md-10 col-md-offset-1 text-center" >
                <h2>{{Lang::get('home.section1_title')}}</h2>
                <p class="lead">
                    {{Lang::get('home.section1_subtitle')}}
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="feature" id="home-quick-courses">
                    <i class="icon-flash"></i>
                    <h3>{{Lang::get('home.section1_surp1_title')}}</h3>
                    <p>
                        {{Lang::get('home.section1_surp1_text')}}
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature" id="home-financial-aid">
                    <i class="icon-ok-4"></i>
                    <h3>{{Lang::get('home.section1_surp2_title')}}</h3>
                    <p>
                        {{Lang::get('home.section1_surp2_text')}}
                    </p>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="feature" id="home-job-placement">
                    <i class="icon-user-md"></i>
                    <h3>{{Lang::get('home.section1_surp3_title')}}</h3>
                    <p>
                        {{Lang::get('home.section1_surp3_text')}}
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature" id="home-bilingual-education">
                    <i class="icon-boost-language"></i>
                    <h3>{{Lang::get('home.section1_surp4_title')}}</h3>
                    <p>
                        {{Lang::get('home.section1_surp4_text')}}
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                <a href="/{{Lang::get('header.sign-up')}}" class="home-main-cta-why-section fancybox-get-info fancybox.iframe" onClick="ga('send', 'event', { eventCategory: 'CTA', eventAction: 'Home - Get Started Today', eventLabel: 'Clicked'});">{{Lang::get('home.section1_CTA')}}</a>
            </div>
            </div><!-- End row -->
            </div><!-- End container -->
    </section><!-- End main-features -->

    <section id="career-path">
        <div class="life-fei-video-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeIn" data-wow-delay="300ms">
                    @include('includes.survey')
                </div>
            </div><!-- End row -->

        </div>
    </section>

    <section id="main_content_gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="home-sec-heading">{{Lang::get('home.section3_title')}}</h2>
                </div>
            </div><!-- End row -->

            <div class="row video-testimonial-content">
                <div class="col-md-6" id="video-testimonial-text">
                    <!-- <h3 id="video-test-title">Lorem Ipsum Dolor Sit</h3> -->
                    <p id="video-test-body">{{Lang::get('home.section3_testimonial_author')}}</p>
                    <span id="video-test-author">{{Lang::get('home.section3_testimonial_quote')}}</span>
                </div>
                <div class="col-md-6" id="video-testimonial-video">
                    <iframe class="polaroid-frame" id="testimonial-video-frame" width="520" height="360" src="//www.youtube.com/embed/{{Lang::get('home.section3_testimonial_video')}}?hd=1&amp;wmode=opaque&amp;controls=0&amp;showinfo=0;rel=0;" frameborder="0" allowfullscreen=""></iframe>
                </div>

            </div><!-- End row -->
        </div>   <!-- End container -->
    </section><!-- End section gray -->

    <section itemscope="testimonial--faces" id="testimonial-faces">
         <div class="container">
            <div class="row">
                <ul class="testimonial-faces-wrap">
                  @if(Session::get('locale') == "en")
                    <li id="face-one" class="active">
                        <img src="/assets/img/test_face3_en.png" class="img-circle img-thumbnail" alt="medical assistant" />
                    </li>
                    <li id="face-two">
                        <img src="/assets/img/test_face2_en.png" class="img-circle img-thumbnail" alt="physical therapist" />
                    </li>

                     <li id="face-three" >
                        <img src="/assets/img/test_face1_en.png" class="img-circle img-thumbnail" alt="physical therapist" />
                    </li>
                    <li id="face-four">
                        <img src="/assets/img/test_face4_en.png" class="img-circle img-thumbnail" alt="physical therapist" />
                    </li>
                  @elseif(Session::get('locale')  == 'sp')
                    <li id="face-one" class="active">
                        <img src="/assets/img/test_face1_es.jpg" class="img-circle img-thumbnail"/>
                    </li>
                    <li id="face-two">
                        <img src="/assets/img/test_face2_es.jpg" class="img-circle img-thumbnail"/>
                    </li>
                    <li id="face-three">
                        <img src="/assets/img/test_face3_es.jpg" class="img-circle img-thumbnail"/>
                    </li>
                    <li id="face-four">
                        <img src="/assets/img/test_face4_es.jpg" class="img-circle img-thumbnail"/>
                    </li>
                    <li id="face-five">
                        <img src="/assets/img/test_face5_es.jpg" class="img-circle img-thumbnail"/>
                    </li>
                    <li id="face-six">
                        <img src="/assets/img/test_face6_es.jpg" class="img-circle img-thumbnail"/>
                    </li>
                  @endif
                </ul>
            </div>
        </div>
    </section>

    <?php /* <section id="life-fei">
        <div class="life-fei-wrapper">
            <div class="life-fei-video-wrap">
                <div class="life-fei-video-frame">
                    <div class="container video-text-wrapper">
                        <div class="content-wrapper-in-video">
                            <h1>{{Lang::get('home.section4_title')}}</h1>
                            <p>{{Lang::get('home.section4_subtitle')}}</p>
                            <div class="button-container-in-video"><a href="/{{Lang::get('header.about')}}" class="life-fei-learn-more" onClick="ga('send', 'event', { eventCategory: 'link', eventAction: 'Home - Video Learn More', eventLabel: 'Clicked'});">{{Lang::get('home.section4_CTA')}}</a></div>
                        </div>
                    </div>
                    <div class="life-fei-video-overlay life-at-fei-overlay"></div>
                    <div class="vimFEIplayerwrap">
                        <script src="//f.vimeocdn.com/js/froogaloop2.min.js"></script>
                        <iframe id="FEIVideo_player" src="//player.vimeo.com/video/104359866?api=1&player_id=FEIVideo_player&byline=false&badge=false&title=false&portrait=false" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                    <div class="image-wrap-video-replacement" style="display:none;"></div>
                </div>
            </div>
       </div>
    </section> */?>

    <script type="text/javascript">
        changeVideoTestimonial = function (e) {

        if (!$(this).hasClass('active')) {
            //Emglish testimonials
            @if(Session::get('locale') == 'en')
                $('ul.testimonial-faces-wrap > li').removeClass('active');
                $(this).addClass('active');

                if ($(this).is('#face-one')) {
                    //$('#video-test-title').html('Heading 3');
                    $('#video-test-body').html('- The experience at FEI helped me a lot because the things they taught me at school gave me a head start...');
                    $('#video-test-author').html('Maria Chach');
                    $('#testimonial-video-frame').attr("src", "//www.youtube.com/embed/njRFlOq4k00?hd=1&amp;wmode=opaque&amp;controls=0&amp;showinfo=0;rel=0;");
                };

                if ($(this).is('#face-two')) {
                    //$('#video-test-title').html('Heading 2');
                    $('#video-test-body').html("- It felt like if I was part of the school when I hadn't even started yet...");
                    $('#video-test-author').html('Rey Estrada');
                    $('#testimonial-video-frame').attr("src", "//www.youtube.com/embed/Y5Y0jMpSBhk?hd=1&amp;wmode=opaque&amp;controls=0&amp;showinfo=0;rel=0;");
                };

                if ($(this).is('#face-three')) {
                    //$('#video-test-title').html('Heading 1');
                    $('#video-test-body').html('- The teachers and the staff at FEI pay a lot of attention to the student, they want them to graduate just like I am doing here today...');
                    $('#video-test-author').html('Jharmalidys Alvarado');
                    $('#testimonial-video-frame').attr("src", "//www.youtube.com/embed/48fjDBUlZK8?hd=1&amp;wmode=opaque&amp;controls=0&amp;showinfo=0;rel=0;");
                };

                if ($(this).is('#face-four')) {
                    //$('#video-test-title').html('Heading 4');
                    $('#video-test-body').html("- The director and the staff here really helped me and I really enjoy being here. It's a wonderful feeling");
                    $('#video-test-author').html('Marco Chaviano');
                    $('#testimonial-video-frame').attr("src", "//www.youtube.com/embed/cuzlyEIURo8?hd=1&amp;wmode=opaque&amp;controls=0&amp;showinfo=0;rel=0;");
                };

            //Spanish testimonials
            @elseif(Session::get('locale') == 'sp')

                $('ul.testimonial-faces-wrap > li').removeClass('active');
                $(this).addClass('active');

                if ($(this).is('#face-one')) {
                    //$('#video-test-title').html('Heading 1');
                    $('#video-test-body').html('- En esta escuela he encontrado, mas que profesionales en education, una familia que me ha acojido y ha sido todo para mi...');
                    $('#video-test-author').html('Beatriz Arlenys Ruiz');
                    $('#testimonial-video-frame').attr("src", "//www.youtube.com/embed/yIys1eNBMMw?hd=1&amp;wmode=opaque&amp;controls=0&amp;showinfo=0;rel=0;");
                };

                if ($(this).is('#face-two')) {
                    //$('#video-test-title').html('Heading 2');
                    $('#video-test-body').html('- Maravilloso! Desde la recepsionaista a la persona que me recibio alla afuera, hasta la consejera que fue exepcional ...');
                    $('#video-test-author').html('Yanela Jurquet');
                    $('#testimonial-video-frame').attr("src", "//www.youtube.com/embed/YhJGfbBTjcs?hd=1&amp;wmode=opaque&amp;controls=0&amp;showinfo=0;rel=0;");
                };

                if ($(this).is('#face-three')) {
                    //$('#video-test-title').html('Heading 3');
                    $('#video-test-body').html('- Personalmente me gusta mucho lo que estoy estudiando, me gusta el nivel academico, el grupo con que he trabajado de profesores es muy bueno ...');
                    $('#video-test-author').html('Erick Martinez Romay');
                    $('#testimonial-video-frame').attr("src", "//www.youtube.com/embed/3gUmdmeejNo?hd=1&amp;wmode=opaque&amp;controls=0&amp;showinfo=0;rel=0;");
                };

                if ($(this).is('#face-four')) {
                    //$('#video-test-title').html('Heading 4');
                    $('#video-test-body').html('- Las clases aqui en la escuela son billingues, son muy buenas, te enseñan mucho. He aprendido cosas que nunca llegue a imaginar que existian ...');
                    $('#video-test-author').html('Damary Cartaya');
                    $('#testimonial-video-frame').attr("src", "//www.youtube.com/embed/eariVS70_9A?hd=1&amp;wmode=opaque&amp;controls=0&amp;showinfo=0;rel=0;");
                };

                if ($(this).is('#face-five')) {
                    //$('#video-test-title').html('Heading 5');
                    $('#video-test-body').html('- Creo que la escuela ha sido una gran oportunidad para mi de mostrarme a mi misma que si se puede cuando se tiene ganas de echar para adelante ...');
                    $('#video-test-author').html('Yamile Garcia');
                    $('#testimonial-video-frame').attr("src", "//www.youtube.com/embed/_U6PUESAQ0k?hd=1&amp;wmode=opaque&amp;controls=0&amp;showinfo=0;rel=0;");
                };

                if ($(this).is('#face-six')) {
                    //$('#video-test-title').html('Heading 6');
                    $('#video-test-body').html('- Es una escuela muy motivadora porque la verdad que desde que uno entra tienes un personal aqui de trabajo muy profesional ...');
                    $('#video-test-author').html('Lissette Gutierrez');
                    $('#testimonial-video-frame').attr("src", "//www.youtube.com/embed/m2Gr7-Uggoo?hd=1&amp;wmode=opaque&amp;controls=0&amp;showinfo=0;rel=0;");
                };

            @endif
        };

    }
    </script>

@stop