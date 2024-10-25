@include('layout.header')
<body>
    @include('layout.menue')
    <div class="pagecontent">
        @yield('content')
    </div>
</body>
@include('layout.footer')