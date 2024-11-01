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
<link rel="stylesheet" href="/admin_style.css">
<div class="preloader d-flex justify-content-center align-items-center">
    <img src="preloader.svg" alt="" class="preloader_svg">
</div>
<body>
    {{-- <div class="container_menue_mobile">
        @include('layout.mobile_menue')
    </div> --}}
    {{-- <div class="container_menue_mobile_open_buton">
        @include('layout.mobile_menue_button')
    </div> --}}
    @include('admin.admin_layout.adminMenue')
    <div class="pagecontent mb-3">
        @yield('content')
    </div>
</body>

@include('layout.footer')


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.js"></script>


<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
    $(document).ready(function() {
        $('#summernote_address').summernote();
    });
</script>