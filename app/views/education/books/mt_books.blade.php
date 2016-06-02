@section('content')
<?php $segment2 = Request::segment(2); ?>
    <section id="sub-header" class="{{$segment2}}-sub-header program-detail">
        <div class="header-overlay-imgthief"></div>
        <div class="container sub-header-content">
            <div class="row">
                <div class="col-md-12 sub-header-text-content">
                    <h1 class="main-headeing"><span class="animated fadeInDown">{{Lang::get('MT_program.heading_title')}}</span></h1>
                    <p class="lead boxed-subheading-semiblue animated fadeInDown">
                        {{Lang::get('MT_program.heading_subtitle')}}
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
                <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.massage-therapy')}}">{{Lang::get('MT_program.heading_title')}}</a></li>
                <li class="active">Books</li>
            </ol>

            <div class="row page-inner-section">
                <div class="col-md-8">
                    {{Lang::get('admissions.books_heading_subtitle')}}
                    

                    <div class="books-list-well icon-">
                        <h3 class="advisement-heading"><em>Salvo </em>Massage Therapy: Principles and Practice, 3rd Edition</h3>
                        <h4>
                            <ul class="books-features-list">
                                <li>ISBN #:  <strong>9781416036524</strong></li>
                                <li>Publisher:  <strong>Elsevier</strong></li>
                                <li>Publication:  <strong>2007</strong></li>
                            </ul>
                        </h4>
                    </div>

                    <div class="books-list-well icon-">
                        <h3 class="advisement-heading"><em>Onyria H. McElroy and Lola L. Grabb</em>Spanish-English English-Spanish Medical Dictionary 4th Edition</h3>
                        <h4>
                            <ul class="books-features-list">
                                <li>ISBN #:  <strong>9781608311293</strong></li>
                                <li>Publisher:  <strong>Lippincott</strong></li>
                                <li>Publication:  <strong>2010</strong></li>
                            </ul>
                        </h4>
                    </div>

                    <div class="books-list-well icon-">
                        <h3 class="advisement-heading"><em>Jane S. Garofano </em>Success in Massage Therapy Revised 4th Edition Complete Review</h3>
                        <h4>
                            <ul class="books-features-list">
                                <li>ISBN #:  <strong>9780135072226</strong></li>
                                <li>Publisher:  <strong>Pearson</strong></li>
                                <li>Publication:  <strong>2009</strong></li>
                            </ul>
                        </h4>
                    </div>

                </div>

                <aside class="col-md-4">
                    @include('includes.form-side')
                    @include('includes.mt-side')
                </aside> <!-- End col-md-4 -->

            </div>

        </div><!-- End container -->

    </section><!-- End main_content -->
@stop
