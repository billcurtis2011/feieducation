@section('content')
<?php $segment2 = Request::segment(2); ?>
    <section id="sub-header" class="{{$segment2}}-sub-header program-detail">
        <div class="header-overlay-imgthief"></div>
        <div class="container sub-header-content">
            <div class="row">
                <div class="col-md-12 sub-header-text-content">
                    <h1 class="main-headeing"><span class="animated fadeInDown">{{Lang::get('PCT_program.heading_title')}}</span></h1>
                    <p class="lead boxed-subheading-semiblue animated fadeInDown">
                        {{Lang::get('PCT_program.heading_subtitle')}}
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
                <li><a href="/{{Lang::get('header.programs')}}">{{Lang::get('header.menu_programs')}}</a></li>
                <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.patient-care-technician')}}">{{Lang::get('PCT_program.heading_title')}}</a></li>
                <li class="active">Books</li>
            </ol>

            <div class="row page-inner-section">
                <div class="col-md-8">
                    {{Lang::get('admissions.books_heading_subtitle')}}
                    

                    <div class="books-list-well icon-">
                        <h3 class="advisement-heading"><em>Jetta Fuzy, RN, MS </em>Guia Basica Para El Cuidado Por Asistentes de Enfermería, 3rd Edition</h3>
                        <h4>
                            <ul class="books-features-list">
                                <li>ISBN #:  <strong>9781604250176</strong></li>
                                <li>Publisher:  <strong>Hartman</strong></li>
                                <li>Publication:  <strong>2010</strong></li>
                            </ul>
                        </h4>
                    </div>

                    <div class="books-list-well icon-">
                        <h3 class="advisement-heading"><em>Sheila A. Sorrentino</em>Fudamentos de Enfermería, 2nd Edition</h3>
                        <h4>
                            <ul class="books-features-list">
                                <li>ISBN #:  <strong>9788481745993</strong></li>
                                <li>Publisher:  <strong>Elsevier</strong></li>
                                <li>Publication:  <strong>2002</strong></li>
                            </ul>
                        </h4>
                    </div>

                    <div class="books-list-well icon-">
                        <h3 class="advisement-heading"><em>Jetta Fuzy, RN, MS </em>Libro de Actividades Guia Basica Para El Cuidado Por Asistentes de Enfermería, 3rd Edition</h3>
                        <h4>
                            <ul class="books-features-list">
                                <li>ISBN #:  <strong>9781604250183</strong></li>
                                <li>Publisher:  <strong>Hartman</strong></li>
                                <li>Publication:  <strong>2010</strong></li>
                            </ul>
                        </h4>
                    </div>

                    <div class="books-list-well icon-">
                        <h3 class="advisement-heading"><em>Onyria H. McElroy/Lola L. Grabb</em>Spanish-English English-Spanish Medical Dictionary 4th Edition</h3>
                        <h4>
                            <ul class="books-features-list">
                                <li>ISBN #:  <strong>9781608311293</strong></li>
                                <li>Publisher:  <strong>Lippincott</strong></li>
                                <li>Publication:  <strong>2010</strong></li>
                            </ul>
                        </h4>
                    </div>

                </div>

                <aside class="col-md-4">
                    @include('includes.form-side')
                    @include('includes.pct-side')
                </aside> <!-- End col-md-4 -->

            </div>

        </div><!-- End container -->

    </section><!-- End main_content -->
@stop
