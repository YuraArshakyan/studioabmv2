@include('layout.header_projects')
<div class="preloader d-flex justify-content-center align-items-center">
    <img src="preloader.svg" alt="" class="preloader_svg">
</div>
<body>
    @include('layout.menue')
    <div class="pagecontent">
        @yield('content')
    </div>
    @include('layout.mobile_menue_button')
</body>
@include('layout.footer_projects')