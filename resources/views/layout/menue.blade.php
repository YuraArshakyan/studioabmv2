@php
    use App\Models\config;

    $title = config::where('key', 'title')->get();

    $FrontEmail = config::where('key','FrontEmail')->get();

    $FrontPhone = config::where('key','FrontPhone')->get();

    $FacebookLink = config::where('key','FacebookLink')->get();

    $InstagramLink = config::where('key','InstagramLink')->get();

    $workingHoursFront = config::where('key','workingHoursFront')->get();
@endphp
<div class="menue p-15 w-100 position-absolute d-flex justify-content-center">
    <div class="menue_section_1 z-1 d-flex justify-content-center aign-items-center">
        <div class="text menue_item p-15">
            <a href={{url('/')}} class="">home</a> 
            <div class="border_bottom_active_link"></div>
        </div>
        <div class="text menue_item p-15">
            <a id="about">about us</a> 
            <div class="border_bottom_active_link"></div>
        </div>
        <div class="text menue_item p-15">
            <a href={{url('/projects')}}>Our projects</a> 
            <div class="border_bottom_active_link"></div>
        </div>
        <div class="text menue_item p-15">
            <a id="services">services</a> 
            <div class="border_bottom_active_link"></div>
        </div>
    </div>

    <div class="menue_section_logo z-1">
        <a href={{url('/')}}><img src="/logo-removebg.png" alt=""></a>
    </div>

    <div class="menue_section_button_social z-1 d-flex justify-content-center aign-items-center">
        <div class="p-15">
            <button type="button" class="text contacts_button btn btn-outline-primary">Contact Us</button>
        </div>
        <div class="p-15">
            <a href={{url('/projects')}}><button type="button" class="text  btn btn-outline-primary">Showroom</button></a>
        </div>
        <div class="p-15 mobile-d-none ">
            <a href={{$FacebookLink[0]->value}} target="_blank"><span class=" bg-color_gold carusel_control_button carusel_control_left mr-10"><i class="fa-brands fa-facebook d-flex justify-content-center align-items-center"></i></span></a>
        </div>
        <div class="p-15 mobile-d-none ">
            <a href={{$InstagramLink[0]->value}} target="_blank"><span class="  bg-color_gold carusel_control_button carusel_control_left mr-10"><i class="fa-brands fa-instagram d-flex justify-content-center align-items-center"></i></span></a>
        </div>
    </div>
</div>