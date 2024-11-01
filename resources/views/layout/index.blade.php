@php
    use App\Models\config;

    $title = config::where('key', 'title')->get();

    $FrontEmail = config::where('key','FrontEmail')->get();

    $FrontPhone = config::where('key','FrontPhone')->get();

    $FacebookLink = config::where('key','FacebookLink')->get();

    $InstagramLink = config::where('key','InstagramLink')->get();

    $workingHoursFront = config::where('key','workingHoursFront')->get();

    $Address = config::where('key','Address')->get();

    $favicon = config::where('key','favicon')->get();
@endphp

@include('layout.header')
<div class="preloader d-flex justify-content-center align-items-center">
    <img src="preloader.svg" alt="" class="preloader_svg">
</div>
<body>
    <div class="container_menue_mobile">
        @include('layout.mobile_menue')
    </div>
    <div class="container_menue_mobile_open_buton">
        @include('layout.mobile_menue_button')
    </div>
    @include('layout.menue')
    <div class="pagecontent">
        @yield('content')
    </div>
</body>
@include('layout.footer')