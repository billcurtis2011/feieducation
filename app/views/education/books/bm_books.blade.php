@section('content')
<?php $segment2 = Request::segment(2); ?>
    <section id="sub-header" class="{{$segment2}}-sub-header program-detail">
        <div class="header-overlay-imgthief"></div>
        <div class="container sub-header-content">
            <div class="row">
                <div class="col-md-12 sub-header-text-content">
                    <h1 class="main-headeing"><span class="animated fadeInDown">{{Lang::get('BM_program.heading_title')}}</span></h1>
                    <p class="lead boxed-subheading-semiblue animated fadeInDown">
                        {{Lang::get('BM_program.heading_subtitle')}}
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
                <li><a href="/{{Lang::get('header.programs')}}/{{Lang::get('header.business-management')}}">{{Lang::get('BM_program.heading_title')}}</a></li>
                <li class="active">Books</li>
            </ol>

            <div class="row page-inner-section">
                <div class="col-md-8">
                    {{Lang::get('admissions.books_heading_subtitle')}}
                    

                    <div class="books-list-well icon-">
                        <h3 class="advisement-heading"><em>Jeff Madura </em>Introduction to Business, 5th Edition</h3>
                        <h4>
                            <ul class="books-features-list">
                                <li>ISBN #:  <strong>9780763836207</strong></li>
                                <li>Publisher:  <strong>Paradigm</strong></li>
                                <li>Publication:  <strong>2010</strong></li>
                            </ul>
                        </h4>
                    </div>

                    <div class="books-list-well icon-">
                        <h3 class="advisement-heading"><em>Raymond Noe, John Hollenbeck, Barry Gerhart, Patrick Wright </em>Fundamentals of Human Resources</h3>
                        <h4>
                            <ul class="books-features-list">
                                <li>ISBN #:  <strong>9780073530468</strong></li>
                                <li>Publisher:  <strong>McGraw-Hill</strong></li>
                                <li>Publication:  <strong>2010</strong></li>
                            </ul>
                        </h4>
                    </div>

                    <div class="books-list-well icon-">
                        <h3 class="advisement-heading"><em>Gerhard Gschwandtner </em>The Essentials Sales Management Handbook</h3>
                        <h4>
                            <ul class="books-features-list">
                                <li>ISBN #:  <strong>9780071476027</strong></li>
                                <li>Publisher:  <strong>McGraw-Hill</strong></li>
                                <li>Publication:  <strong>2006</strong></li>
                            </ul>
                        </h4>
                    </div>

                    <div class="books-list-well icon-">
                        <h3 class="advisement-heading"><em>William Webster </em>Accounting for Managers</h3>
                        <h4>
                            <ul class="books-features-list">
                                <li>ISBN #:  <strong>9780071421744</strong></li>
                                <li>Publisher:  <strong>McGraw-Hill</strong></li>
                                <li>Publication:  <strong>2003</strong></li>
                            </ul>
                        </h4>
                    </div>

                    <div class="books-list-well icon-">
                        <h3 class="advisement-heading"><em>John Wild </em>Financial Accounting Fundamentals</h3>
                        <h4>
                            <ul class="books-features-list">
                                <li>ISBN #:  <strong>9780073527048</strong></li>
                                <li>Publisher:  <strong>McGraw-Hill</strong></li>
                                <li>Publication:  <strong>2010</strong></li>
                            </ul>
                        </h4>
                    </div>

                    <div class="books-list-well icon-">
                        <h3 class="advisement-heading"><em>David Scott </em>How Wall Street Works, 2nd Edition</h3>
                        <h4>
                            <ul class="books-features-list">
                                <li>ISBN #:  <strong>9780071368988</strong></li>
                                <li>Publisher:  <strong>McGraw-Hill</strong></li>
                                <li>Publication:  <strong>1999</strong></li>
                            </ul>
                        </h4>
                    </div>

                    <div class="books-list-well icon-">
                        <h3 class="advisement-heading"><em>Robert Hisrich, Michael Peters, Dean Shepherd </em>Entrepreneurship</h3>
                        <h4>
                            <ul class="books-features-list">
                                <li>ISBN #:  <strong>9780073530321</strong></li>
                                <li>Publisher:  <strong>McGraw-Hill</strong></li>
                                <li>Publication:  <strong>2009</strong></li>
                            </ul>
                        </h4>
                    </div>                                                            

                    <div class="books-list-well icon-">
                        <h3 class="advisement-heading"><em>John Steiner, George Steiner </em>Business, Government, and Society: A Managerial Perspective</h3>
                        <h4>
                            <ul class="books-features-list">
                                <li>ISBN #:  <strong>9780078112676</strong></li>
                                <li>Publisher:  <strong>McGraw-Hill</strong></li>
                                <li>Publication:  <strong>2011</strong></li>
                            </ul>
                        </h4>
                    </div>   

                </div>

                <aside class="col-md-4">
                    @include('includes.form-side')
                    @include('includes.bm-side')
                </aside> <!-- End col-md-4 -->

            </div>

        </div><!-- End container -->

    </section><!-- End main_content -->
@stop
