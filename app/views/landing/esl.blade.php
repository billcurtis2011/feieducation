@section('content') <section id="sub-header" class="landing-page-heading esl-landing">
<div class="header-overlay-imgthief">
</div>
<div class="container sub-header-content">
    <div class="row">
        <div class="col-md-12 sub-header-text-content">
            <h1 class="main-landing-heading"><span class="wow fadeIn">APRENDA A HABLAR INGLÉS</span></h1>
            <h2 class="main-landing-subheading wow fadeIn" style="text-align: justify">
            <i class="icon-ok-circled2"></i><strong>Clases </strong> de inglés en <strong>horarios de mañana y tarde.</strong>
            <!--An exciting career in Health & Wellness-->
            </h2>
            <h2 class="main-landing-subheading wow fadeIn">
            <i class="icon-ok-circled2"></i><strong>Comience a hablar inglés </strong>y mejore sus probabilidades de conseguir un buen trabajo.
            <!--An exciting career in Health & Wellness-->
            </h2>
            <a class="landing-main-cta fancybox-get-info fancybox.iframe wow fadeInUp hidden-xs" href="/sign-up">Contactenos</a>
        </div>
    </div>
    <!-- End row -->
</div>
<!-- End container -->
<div class="divider_top">
</div>
</section>
<!-- End sub-header -->
<section id="main_content">
<div class="container">
    <div class="row">
        <aside class="col-md-4 col-md-push-7 col-md-offset-1 landing-aside-control">
        @include('includes.spanish.form-side')
        <div class="box_style_1 hidden-xs">
            <h4>{{Lang::get('about.contact_fei')}}</h4>
            <div class="side-contact-info">
                <ul id="contact-info" class="admissions-contact-info">
                    <li>
                    <div class="aside-callout-number">
                        {{Lang::get('about.contact_phone')}}
                    </div>
                    </li>
                    <li>
                    <h5><i class="icon-home"></i> {{Lang::get('about.contact_address')}}</h5>
                    </li>
                </ul>
            </div>
        </div>
        </aside>
        <!-- End col-md-4 -->
        <div class="col-md-7 col-md-pull-5">
            <h2>INGLÉS COMO SEGUNDO IDIOMA (ESL)</h2>
            <p>
                Este programa está diseñado para estudiantes cuyo idioma dominante no es el inglés, con el propósito de ayudarlos a desarrollar comprensión y confianza en el idioma. Nos enfocamos en una variedad de habilidades necesarias para que los estudiantes puedan obtener y/o conservar un empleo. Con una combinación de actividades en el aula y en Internet, el programa prepara a los estudiantes para lograr comunicarse satisfactoriamente en situaciones sociales y laborales.
            </p>
            <br/>
            <h2>OBJETIVOS DEL PROGRAMA</h2>
            <ul class='list_ok'>
                <li>Preparar a los estudiantes para comunicarse en situaciones cotidianas y de trabajo.</li>
                <li>Ayudar a los estudiantes a desarrollar habilidades en lectura, escritura, audición y práctica oral a través de actividades interactivas.</li>
                <li>Ayudar a los estudiantes a ampliar su vocabulario, pronunciación y habilidades conversacionales.</b></li>
                <li>Ayudar a los estudiantes en el desarrollo de un pensamiento crítico para su desempeño laboral.</li>
                <li>Desarrollar habilidades lingüísticas que les ayuden a obtener mayor éxito en la búsqueda de empleo en diferentes sectores.</li>
            </ul>
            <p>
                El programa de ESL de FEI se compone de seis niveles, desde el nivel introductorio hasta el nivel conversacional.
            </p>
        <h2>OPORTUNIDADES PROFESIONALES</h2>
        <p>
            Hablar inglés correctamente nos pone en una posición ventajosa profesionalmente. Los empleadores buscan candidatos que tengan un fuerte dominio del idioma. La necesidad de candidatos capaces de comunicarse correctamente en ingles continuará creciendo.
            <br /><br />
            Al finalizar el programa, FEI proporcionará ayuda a los graduados en la búsqueda de empleo
        </p>
    </div>
</div>
<!-- End row -->
</div>
<!-- End container -->
</section>
<!-- End main_content-->

<script type="text/javascript">
    setTimeout(function(){var a=document.createElement("script");
    var b=document.getElementsByTagName("script")[0];
    a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0025/3794.js?"+Math.floor(new Date().getTime()/3600000);
    a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
@stop