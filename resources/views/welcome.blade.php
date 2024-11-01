@php
    use App\Models\config;

    $title = config::where('key', 'title')->get();

    $FrontEmail = config::where('key','FrontEmail')->get();

    $FrontPhone = config::where('key','FrontPhone')->get();

    $FacebookLink = config::where('key','FacebookLink')->get();

    $InstagramLink = config::where('key','InstagramLink')->get();

    $workingHoursFront = config::where('key','workingHoursFront')->get();

    $Address = config::where('key','Address')->get();
@endphp
@extends('layout.index')
@section('title', 'Home')
@section('content')
    <div class="header">
        <div class="first_section">
            <div class="carousel ">
                <img src="front_image/1.jpg" class="front_carusel carousel_deactivated" alt="">
                <img src="front_image/2.jpg" class="front_carusel carousel_deactivated" alt="">
                <img src="front_image/3.jpg" class="front_carusel carousel_deactivated" alt="">
                <img src="front_image/4.jpg" class="front_carusel carousel_deactivated" alt="">
                <div class="gradient_transition_bottom"></div>
            </div>
            <div class="front_text text container text-uppercase">
                <div class="front_big_text">
                    <h3 class="f-size-18 color-w width400 mobile-fsize-13">welcome to The Studio ABM Builders</h3>
                    <h1 class="f-size-80 lh38 color-w width500 mobile-fsize-50 ">Trust is us</h1>
                </div>
            </div>
        </div>
        <div class="section_second position-relative">
            <div class="carousel_control">
                <div class="d-flex justify-content-center">
                    <div class="container small_img&control_button d-flex justify-content-space">
                        <div class="small_img">
                            <div class="container small_img_container d-flex">
                                <div class="tansition-25ms-ease small_img_bg mr-15 d-flex flex-column align-items-center justify-content-center">
                                    <div class="tansition-25ms-ease text color-w">Kitchen</div>
                                    <img src="front_image/1.jpg" class="tansition-25ms-ease small_img " alt="">
                                </div>
                                <div class="tansition-25ms-ease small_img_bg mr-15 d-flex flex-column align-items-center justify-content-center">
                                    <div class="tansition-25ms-ease text color-w">Bathroom</div>
                                    <img src="front_image/2.jpg" class="tansition-25ms-ease small_img " alt="">
                                </div>
                                <div class="tansition-25ms-ease small_img_bg mr-15 d-flex flex-column align-items-center justify-content-center">
                                    <div class="tansition-25ms-ease text color-w">3d Design</div>
                                    <img src="front_image/3.jpg" class="tansition-25ms-ease small_img " alt="">
                                </div>
                                <div class="tansition-25ms-ease small_img_bg mr-15 d-flex flex-column align-items-center justify-content-center">
                                    <div class="tansition-25ms-ease text color-w">Interior</div>
                                    <img src="front_image/4.jpg" class="tansition-25ms-ease small_img " alt="">
                                </div>
                            </div> 
                        </div>
                        <div class="control_button d-flex align-items-center">
                            <span class="carusel_control_button carusel_control_left mr-10"><i class="fa fa-angle-left d-flex justify-content-center align-items-center"></i></span>
                            <span class="carusel_control_button carusel_control_right"><i class="fa fa-angle-right d-flex justify-content-center align-items-center"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section_second_content mt-3 container" >
        <div class="p-20">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex flex-column justify-content-center">
                    <div class="header mb-3">
                        <h1 class=" color-w text width500">Kitchen Remodeling</h1>
                    </div>
                    <h2 class="slogn text width300 color-gold mb-3">
                        Studio ABM Builders creates luxurious, high-quality kitchen remodels that combine elegance and functionality.
                    </h2>
                    <p class="text color-w">
                        Transform your kitchen with Studio ABM Builders.
                        We specialize in high-end kitchen remodeling, 
                        combining expert craftsmanship with stunning design. 
                        From modern layouts to custom cabinetry, our
                        dedicated team ensures every detail meets the highest
                        standards of quality and functionality. Elevate 
                        your culinary space with us!
                    </p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <img src="second_slide_content/1.jpg" alt="" class="ml-50 w-100 second_slide_img">
                </div>
            </div>
        </div>

        <div class="p-20">
            <div class="row flex-row">
                <div class="col-lg-6 col-md-6">
                    <img src="second_slide_content/2.jpg" alt="" class="mr-50 w-100 second_slide_img">
                </div>
                <div class="col-lg-6 col-md-6 d-flex flex-column justify-content-center">
                    <div class="header mb-3">
                        <h1 class="text width500 color-w">Bathroom Remodeling</h1>
                    </div>
                    <h2 class="slogn text width300 color-gold mb-3">
                        Studio ABM Builders delivers elegant, high-quality bathroom remodels that enhance both style and functionality.
                    </h2>
                    <p class="text color-w">
                        Transform your bathroom with Studio ABM Builders. We specialize 
                        in luxurious bathroom remodeling, merging expert craftsmanship
                        with beautiful design. From spa-like retreats to functional
                        layouts, our dedicated team ensures every detail meets the 
                        highest standards of quality and elegance. Elevate your bathing 
                        experience with us!
                    </p>
                </div>
            </div>
        </div>

        <div class="p-20">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex flex-column justify-content-center">
                    <div class="header mb-3">
                        <h1 class="text width500 color-w">3D Design</h1>
                    </div>
                    <h2 class="slogn text width300 color-gold mb-3">
                        Studio ABM Builders specializes in stunning 3D design solutions that blend creativity with precision. Our innovative approach transforms spaces, ensuring each design is both visually captivating and perfectly functional.
                    </h2>
                    <p class="text color-w">
                        Transform your vision with Studio ABM Builders. We specialize in exceptional 
                        3D design that brings your ideas to life, merging artistic flair with practical 
                        solutions. Our talented team creates immersive designs that enhance any space, 
                        ensuring every element reflects your unique style and needs. Elevate your 
                        environment with our cutting-edge 3D design services!
                    </p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <img src="second_slide_content/3.jpg" alt="" class="ml-50 w-100 second_slide_img">
                </div>
            </div>
        </div>
    </div>

    <div class="section_tirth container p-20">
        <h1 class="text width500 color-w text-center">About Studio ABM Builders</h1>
        <p class="text_about text width300 color-w">
            Studio ABM is a leading kitchen design company that is committed to creating functional and beautiful kitchens for our clients. We
            understand that a kitchen is more than just a place to cook and eat, it’s the heart of the home where memories are made and
            cherished. That’s why we take great care in designing kitchens that are not only aesthetically pleasing, but also highly functional and efficient.
            Our team of talented designers and skilled craftsmen work closely with each client to understand their unique needs and tastes and create a
            customized kitchen design that is tailored to their lifestyle. With a focus on quality, attention to detail and customer satisfaction, Studio ABM
            is the trusted choice for all your kitchen design needs.
        </p>
    </div>

    <div class="section_sixth ">
         <div class="slide_transition_gradient">
        </div> 
        <h1 class="text width500 color-w text-center bg-color_gold p-0 m-0">Our Services</h1>
        <div class="section_sixth_content_container bg-color_gold">
            <div class="container">

                <div class="row p-20">
                    @foreach($services as $services)
                        <div class="services_item_container col-sm-12 col-md-4 col-lg-4 mb-5">
                            <div class="card w-100">
                                <div class="card-header f-size-23 text width600 text-center color-gray">
                                    {{$services->header}}
                                </div>
                                <div class="card-body text text-center d-flex justify-content-center align-items-center text">
                                    {{$services->front_text}}
                                </div>
                                <div class="card-footer d-flex justify-content-center align-items-center">
                                    <a href={{url('/services'. '/' . $services->id)}} ><button class="btn btn-outline-gold text-capitalize">learn more</button></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
               
            </div>
        </div>
        <div class="section_sixth_footer">
            <div class="slide_transition_gradient_back ">
            </div>
        </div>
    </div>

    <div class="bg-w">
        <div class="section_fifth container p-20">
            <h1 class="text width500 text-center">Some of Our Projects</h1>
            <div class="projects" style=" width: 100%; height: 60vh; top: 0;z-index: 1;" ></div>
        </div>
    </div>


    <div class="section_forth bg-w">
        <h1 class="text width500 text-center">More About Studio ABM Builders</h1>
        <div class="content">
            <div class="items container d-flex ">
                <div class="item d-flex flex-column p-20 br1opacity021">
                    <div class="icon h-50">
                        <img src="icones/1.svg" alt="" class="w-100 h-100">
                    </div>
                    <div class="text width400 h-100 d-flex align-items-center text-center">Always on time, Studio ABM Builders delivers your kitchen remodel to perfection!</div>
                </div>
                <div class="item d-flex flex-column p-20 br1opacity021">
                    <div class="icon h-50">
                        <img src="icones/2.svg" alt="" class="w-100 h-100">
                    </div>
                    <div class="text width400 h-100 d-flex align-items-center text-center">Quality first, Studio ABM Builders creates kitchens that blend elegance and functionality seamlessly!</div>
                </div>
                <div class="item d-flex flex-column p-20 ">
                    <div class="icon h-50">
                        <img src="icones/3.svg" alt="" class="w-100 h-100">
                    </div>
                    <div class="text width400 h-100 d-flex align-items-center text-center">Craftsmanship matters—Studio ABM Builders designs kitchens that stand the test of time!</div>
                </div>
            </div>
        </div>
    </div>


    <div class="section_seventh bg-w p-20">
        <h1 class="text width500 text-center">Frequently Asked Question</h1>
        <div class="section_seventh_content container">
            <div class="accordion" id="accordionPanelsStayOpenExample">

                <div class="accordion-item text width500">
                  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                        What types of kitchen styles do you offer?
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        We specialize in a variety of styles, including modern, traditional, farmhouse, and contemporary. Our team works closely with you to design a kitchen that reflects your personal taste and fits your home’s aesthetic.
                    </div>
                  </div>
                </div>

                <div class="accordion-item text width500">
                  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        How do you handle design and layout?
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        We collaborate closely with you to design a layout that maximizes space and functionality. Our designers use 3D software to provide visualizations, making it easier for you to envision the final result.
                    </div>
                  </div>
                </div>

                <div class="accordion-item text width500">
                  <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        How do I get started with my kitchen remodel?
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        Getting started is easy! Simply contact us to schedule a <strong>free</strong> consultation. We’ll discuss your ideas, needs, and budget to create a customized plan for your kitchen remodel.
                    </div>
                  </div>
                </div>

                <div class="accordion-item text width500">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                        Can you help with choosing appliances?
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                      <div class="accordion-body">
                        Yes! We can recommend appliances that fit your kitchen design and budget. We’ll help you select energy-efficient options that complement your overall aesthetic.
                      </div>
                    </div>
                </div>

                <div class="accordion-item text width500">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                        How do I maintain my new kitchen after the remodel?
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                      <div class="accordion-body">
                        We provide guidance on caring for your new kitchen, including tips on cleaning and maintenance for countertops, cabinets, and appliances to keep your space looking its best.
                      </div>
                    </div>
                </div>

                <div class="accordion-item text width500">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                        Are you certified and insured?
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                      <div class="accordion-body">
                        Yes, we are fully certified and insured, ensuring that your remodel is completed to the highest standards of quality and safety. <b>Studio ABM Builders License #: 1100541</b>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section_eighth bg-w">
        <div class="container_eight">
             <div class="bg_w_gradient ">
                <img src="contact_section_bg.jpg" class="w-100 h-100 bg_contact_us_image">
                <div class="bg_gradient_overlay"></div>
            </div> 
            <h1 class="text-center z-1 position-relative text width500">Contact Us</h1>
            <div class="container z-1 position-relative">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                        <h2 class="Contact_Header text width500 text-capitalize">Get a Quote</h2>
                        <small>
                            Unlock your project’s potential—get your personalized quote for free!
                        </small>
                        <div class="">
                            
                            <div class="contact_item d-flex flex-column">
                                <i class="contact_info p-20 fa fa-phone"></i>
                                <a type="tel">{{ $FrontPhone[0]->value }}</a>
                            </div>
                            <div class="contact_item d-flex flex-column">
                                <i class="contact_info p-20 fa fa-at"></i>
                                <a type="email">{{ $FrontEmail[0]->value }}</a>
                            </div>
                            <div class="contact_item d-flex flex-column">
                                <i class="contact_info p-20 fa fa-clock"></i>
                                <a type="email">{!! nl2br($workingHoursFront[0]->value) !!}</a>
                            </div>
                            
                            <div class="contact_item d-flex flex-column">
                                <i class="contact_info p-20 fa fa-map-marker"></i>
                                <p>{!! nl2br($Address[0]->value) !!}</p>
                            </div>

                            <h2 class="Contact_Header text width500">Studio ABM Builders License #: 1100541</h2>

                            <h2 class="Contact_Header text width500">Find Us</h2>
                                <a href={{$FacebookLink[0]->value}} target="_blank"><span class="bg-color_gold carusel_control_button carusel_control_left mr-10"><i class="fa-brands fa-facebook d-flex justify-content-center align-items-center"></i></span></a>

                                <a href={{$InstagramLink[0]->value}} target="_blank"><span class="bg-color_gold carusel_control_button carusel_control_left mr-10"><i class="fa-brands fa-instagram d-flex justify-content-center align-items-center"></i></span></a>                
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <form action="">
                            <div class="contact_form br-10px p-20 bg-w d-flex flex-column">
                                <div class="input_item">
                                    <label for="Name">Your Name</label>
                                    <input required type="text" placeholder="Name" class=" br-5pxB-1px Name h-40px" id="Name" name="Name">
                                </div>
                                <div class="input_item">
                                    <label for="Phone">Your Phone</label>
                                    <input required type="number" placeholder="Phone" class=" br-5pxB-1px Phone h-40px" id="Phone" name="Phone">
                                </div>
                                <div class="input_item">
                                    <label for="message">Message</label>
                                    <textarea required name="message" placeholder="Message"  id="" cols="30" rows="10" class="Message br-5pxB-1px"></textarea>
                                </div>
                                <button type="button" class="text contacts_button btn btn-outline-primary">Submit</button>
                                <div class="respons mt-2">
                                    <div class="text-danger form_failed_contact position-absolute">
                                        Your submission was filed
                                    </div>
                                    <div class="text-success form_submited_correct_contact">
                                        Your submission was successfuly sent. We will contact you soon
                                    </div>
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<script type="importmap">
    {
        "imports": {
            "three": "https://cdn.jsdelivr.net/npm/three@v0.119.1/build/three.module.js",
            "three/addons": "https://cdn.jsdelivr.net/npm/three@v0.149.0/examples/jsm/"
        }
    }
</script>
<script src="assets/js/three.js" type="module" defer></script>