@section('content')
<?php $segment2 = Request::segment(2); ?>
   <section id="main_content">
        <div class="container">

        <ol class="breadcrumb">
          <li><a href="/">FEI</a></li>
          <li class="active">{{Lang::get('admissions.disclosure_breadcrumb')}}</li>
        </ol>

            <div class="row page-inner-section">
                <div class="col-md-12">
                @if($segment2 == 'medical-assistant')
                    <!-- MA Program -->
                    <iframe src="/disclaimers/ma/Gedt.html" width="100%" height="780" frameborder="0" scrolling="yes"></iframe>
                    <!-- MA Program -->
                @elseif($segment2 == 'medical-billing-and-coding')
                    <!-- MBC Program -->
                     <iframe src="/disclaimers/mbc/Gedt.html" width="100%" height="780" frameborder="0" scrolling="yes"></iframe>
                    <!-- MBC Program -->
                @elseif($segment2 == 'patient-care-technician')
                    <!-- PCT Program -->
                    <iframe src="/disclaimers/pct/Gedt.html" width="100%" height="780" frameborder="0" scrolling="yes"></iframe>
                    <!-- PCT Program -->
                @elseif($segment2 == 'pharmacy-technician')
                    <!-- PHT Program -->
                    <iframe src="/disclaimers/pt/Gedt.html" width="100%" height="780" frameborder="0" scrolling="yes"></iframe>
                    <!-- PHT Program -->
                @elseif($segment2 == 'medical-office-administrator')
                    <!-- MOA Program -->
                    <iframe src="/disclaimers/moa/Gedt.html" width="100%" height="840" frameborder="0" scrolling="yes"></iframe>
                    <!-- MOA Program -->
                @elseif($segment2 == 'massage-therapy')
                    <!-- MT Program -->
                    <iframe src="/disclaimers/mt/Gedt.html" width="100%" height="780" frameborder="0" scrolling="yes"></iframe>
                    <!-- MT Program -->
                @elseif($segment2 == 'business-management')
                    <!-- BM Program -->
                    <iframe src="/disclaimers/bm/Gedt.html" width="100%" height="840" frameborder="0" scrolling="yes"></iframe>
                    <!-- BM Program -->
                @endif               
                   
                </div>

            </div>

        </div><!-- End container -->
    </section><!-- End main_content -->

@stop