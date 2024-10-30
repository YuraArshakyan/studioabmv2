@include('layout.header')
<div class="preloader d-flex justify-content-center align-items-center">
    <img src="preloader.svg" alt="" class="preloader_svg">
</div>
<body>
    {{-- <div class="menuecontent"> --}}
        @include('layout.menue')
    {{-- </div> --}}
    <div class="pagecontent">
        @yield('content')
    </div>
</body>
@include('layout.footer')