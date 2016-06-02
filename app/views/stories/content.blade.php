@section('content')


<section id="sub-header" class="stories-sub-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 sub-header-text-content">
                <h1 class="main-headeing"><span class="animated fadeInDown">{{Lang::get('stories.stories_title')}}</span></h1>
                <p class="lead boxed-subheading-semiblue animated fadeInDown">
                    {{Lang::get('stories.stories_subtitle')}}
                </p>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    <div class="divider_top"></div>
</section><!-- End sub-header -->

@if(Session::get('locale') == 'en')
<section id="main_content">

    <div class="container">

    <ol class="breadcrumb">
      <li><a href="/">FEI</a></li>
      <li class="active">{{Lang::get('stories.stories_menusubtitle')}}</li>
    </ol>

       <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="">
                    <h3 class="general-testimonial-name-student alternative-highlighted-text"> {{Lang::get('stories.stories_header1')}} </h3>
                    <p class="student-fei-story-snip">
                   		 {{Lang::get('stories.stories_content1')}}
                    </p>
                    <p class="success-story-quote"> {{Lang::get('stories.stories_content11')}} </p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <iframe width="520" height="360" src="//www.youtube.com/embed/48fjDBUlZK8?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0;" frameborder="0" allowfullscreen=""></iframe>
            </div>

        </div><!-- End row -->

    </div><!-- End container -->
</section><!-- End main_content-->

<section class="section_content_gray">
    <div class="container">

       <div class="row">

            <div class="col-md-6 col-sm-6">
                <iframe width="520" height="360" src="//www.youtube.com/embed/Y5Y0jMpSBhk?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0;" frameborder="0" allowfullscreen=""></iframe>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="">
                    <h3 class="general-testimonial-name-student alternative-highlighted-text">  {{Lang::get('stories.stories_header2')}}  </h3>
                    <p class="student-fei-story-snip">
                        {{Lang::get('stories.stories_content2')}} 
                    </p>
                    <p class="success-story-quote"> {{Lang::get('stories.stories_content21')}} </p>
                </div>
            </div>

        </div><!-- End row -->

    </div><!-- End container -->
</section><!-- End main_content-->


<section class="section_content_white">
    <div class="container">
       <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="">
                    <h3 class="general-testimonial-name-student alternative-highlighted-text">{{Lang::get('stories.stories_header3')}}</h3>
                    <p class="student-fei-story-snip">
                    	{{Lang::get('stories.stories_content3')}} 
                        
                    </p>
                    <p class="success-story-quote"> {{Lang::get('stories.stories_content31')}}  </p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <iframe width="520" height="360" src="//www.youtube.com/embed/njRFlOq4k00?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0;" frameborder="0" allowfullscreen=""></iframe>
            </div>

        </div><!-- End row -->

    </div><!-- End container -->
</section><!-- End main_content-->

<section class="section_content_gray">
    <div class="container">

       <div class="row">

            <div class="col-md-6 col-sm-6">
                <iframe width="520" height="360" src="//www.youtube.com/embed/cuzlyEIURo8?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0;" frameborder="0" allowfullscreen=""></iframe>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="">
                    <h3 class="general-testimonial-name-student alternative-highlighted-text">{{Lang::get('stories.stories_header4')}} </h3>
                    <p class="student-fei-story-snip">
                    {{Lang::get('stories.stories_content4')}} 
                        
                    </p>
                    <p class="success-story-quote"> {{Lang::get('stories.stories_content41')}} </p>
                </div>
            </div>

        </div><!-- End row -->

    </div><!-- End container -->
</section><!-- End main_content-->

@elseif(Session::get('locale') == 'sp')
<section id="main_content">

    <div class="container">

    <ol class="breadcrumb">
      <li><a href="/">FEI</a></li>
      <li class="active">Success Stories</li>
    </ol>

       <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="">
                    <h3 class="general-testimonial-name-student alternative-highlighted-text">Beatriz Arlenys Ruiz <small>- Medical Assitant</small></h3>
                    <p class="student-fei-story-snip">
                        <strong> Historia de Beatriz:</strong>
                        <br>
                        Donec accumsan eros eu venenatis pellentesque. Phasellus erat neque, lacinia id massa in, tincidunt vulputate urna. Donec accumsan eros eu venenatis pellentesque. Phasellus erat neque, lacinia id massa in, tincidunt vulputate urna.
                    </p>
                    <p class="success-story-quote"> En esta escuela he encontrado, mas que profesionales en education, una familia que me ha acojido y ha sido todo para mi...</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <iframe width="520" height="360" src="//www.youtube.com/embed/yIys1eNBMMw?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0;" frameborder="0" allowfullscreen=""></iframe>
            </div>

        </div><!-- End row -->

    </div><!-- End container -->
</section><!-- End main_content-->

<section class="section_content_gray">
    <div class="container">

       <div class="row">

            <div class="col-md-6 col-sm-6">
                <iframe width="520" height="360" src="//www.youtube.com/embed/YhJGfbBTjcs?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0;" frameborder="0" allowfullscreen=""></iframe>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="">
                    <h3 class="general-testimonial-name-student alternative-highlighted-text">Yanela Jurquet <small>- Patient Care Technician</small></h3>
                    <p class="student-fei-story-snip">
                        <strong>Historia de Yanela:</strong>
                        <br>
                        Donec accumsan eros eu venenatis pellentesque. Phasellus erat neque, lacinia id massa in, tincidunt vulputate urna. Donec accumsan eros eu venenatis pellentesque. Phasellus erat neque, lacinia id massa in, tincidunt vulputate urna.
                    </p>
                    <p class="success-story-quote"> Maravilloso! Desde la recepsionaista a la persona que me recibio alla afuera, hasta la consejera que fue exepcional ... </p>
                </div>
            </div>

        </div><!-- End row -->

    </div><!-- End container -->
</section><!-- End main_content-->


<section class="section_content_white">
    <div class="container">
       <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="">
                    <h3 class="general-testimonial-name-student alternative-highlighted-text">Erick Martinez Romay <small>- Pharmacy Technician</small></h3>
                    <p class="student-fei-story-snip">
                        <strong>Historia de Erick:</strong>
                        <br>
                        Donec accumsan eros eu venenatis pellentesque. Phasellus erat neque, lacinia id massa in, tincidunt vulputate urna. Donec accumsan eros eu venenatis pellentesque. Phasellus erat neque, lacinia id massa in, tincidunt vulputate urna.
                    </p>
                    <p class="success-story-quote">Personalmente me gusta mucho lo que estoy estudiando, me gusta el nivel academico, el grupo con que he trabajado de profesores es muy bueno ...</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <iframe width="520" height="360" src="//www.youtube.com/embed/3gUmdmeejNo?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0;" frameborder="0" allowfullscreen=""></iframe>
            </div>

        </div><!-- End row -->

    </div><!-- End container -->
</section><!-- End main_content-->

<section class="section_content_gray">
    <div class="container">

       <div class="row">

            <div class="col-md-6 col-sm-6">
                <iframe width="520" height="360" src="//www.youtube.com/embed/eariVS70_9A?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0;" frameborder="0" allowfullscreen=""></iframe>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="">
                    <h3 class="general-testimonial-name-student alternative-highlighted-text">Damary Cartaya <small>- Pharmacy Technician</small></h3>
                    <p class="student-fei-story-snip">
                        <strong>Historia de Damary:</strong>
                        <br>
                        Donec accumsan eros eu venenatis pellentesque. Phasellus erat neque, lacinia id massa in, tincidunt vulputate urna. Donec accumsan eros eu venenatis pellentesque. Phasellus erat neque, lacinia id massa in, tincidunt vulputate urna.
                    </p>
                    <p class="success-story-quote">Las clases aqui en la escuela son billingues, son muy buenas, te enseñan mucho. He aprendido cosas que nunca llegue a imaginar que existian ...</p>
                </div>
            </div>

        </div><!-- End row -->

    </div><!-- End container -->
</section><!-- End main_content-->


<section class="section_content_white">
    <div class="container">
       <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="">
                    <h3 class="general-testimonial-name-student alternative-highlighted-text">Yamile Garcia <small>- Massage Therapy</small></small></h3>
                    <p class="student-fei-story-snip">
                        <strong>Historia de Yamile:</strong>
                        <br>
                        Donec accumsan eros eu venenatis pellentesque. Phasellus erat neque, lacinia id massa in, tincidunt vulputate urna. Donec accumsan eros eu venenatis pellentesque. Phasellus erat neque, lacinia id massa in, tincidunt vulputate urna.
                    </p>
                    <p class="success-story-quote"> Creo que la escuela ha sido una gran oportunidad para mi de mostrarme a mi misma que si se puede cuando se tiene ganas de echar para adelante ... </p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <iframe width="520" height="360" src="//www.youtube.com/embed/_U6PUESAQ0k?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0;" frameborder="0" allowfullscreen=""></iframe>
            </div>

        </div><!-- End row -->

    </div><!-- End container -->
</section><!-- End main_content-->

<section class="section_content_gray">
    <div class="container">

       <div class="row">

            <div class="col-md-6 col-sm-6">
                <iframe width="520" height="360" src="//www.youtube.com/embed/m2Gr7-Uggoo?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0;" frameborder="0" allowfullscreen=""></iframe>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="">
                    <h3 class="general-testimonial-name-student alternative-highlighted-text">Lissette Gutierrez <small>- Medical Billing and Coding</small></small></h3>
                    <p class="student-fei-story-snip">
                        <strong>Historia de Lissette:</strong>
                        <br>
                        Donec accumsan eros eu venenatis pellentesque. Phasellus erat neque, lacinia id massa in, tincidunt vulputate urna. Donec accumsan eros eu venenatis pellentesque. Phasellus erat neque, lacinia id massa in, tincidunt vulputate urna.
                    </p>
                    <p class="success-story-quote"> Es una escuela muy motivadora porque la verdad que desde que uno entra tienes un personal aqui de trabajo muy profesional ... </p>
                </div>
            </div>

        </div><!-- End row -->

    </div><!-- End container -->
</section><!-- End main_content--> 

@endif
@stop