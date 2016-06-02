@section('content')

<?php $segment2 = Request::segment(2); ?>

@if($segment2 == 'medical-assistant')
    <!-- MA Program -->
    @include('landing.ma')
    <!-- MA Program -->
@elseif($segment2 == 'medical-billing-and-coding')
    <!-- MBC Program -->
    @include('landing.mbc')
    <!-- MBC Program -->
@elseif($segment2 == 'patient-care-technician')
    <!-- PTC Program -->
    @include('education.programs.pct')
    <!-- PTC Program -->
@elseif($segment2 == 'pharmacy-technician')
    <!-- PHT Program -->
    @include('landing.pht')
    <!-- PHT Program -->
@elseif($segment2 == 'medical-office-administrator')
    <!-- MOA Program -->
    @include('education.programs.moa')
    <!-- MOA Program -->
@elseif($segment2 == 'massage-therapy')
    <!-- MT Program -->
    @include('landing.mt')
    <!-- MT Program -->
@elseif($segment2 == 'business-management')
    <!-- BM Program -->
    @include('education.programs.bm')
    <!-- BM Program -->
@elseif($segment2 == 'home-health-aide')
    <!-- HHA Program -->
    @include('landing.hha')
    <!-- HHA Program -->
@elseif($segment2 == 'culinary-arts')
    <!-- CA Program -->
    @include('landing.ca')
    <!-- CA Program -->
@elseif($segment2 == 'pastry-and-baking-arts')
    <!-- PBA Program -->
    @include('landing.pba')
    <!-- PBA Program -->
@elseif($segment2 == 'heating-ventilation-air-conditioning-and-refrigeration')
    <!-- HVAC Program -->
    @include('landing.hvac')
    <!-- HVAC Program -->
@endif

@stop