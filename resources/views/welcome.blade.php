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
                    <h3 class="f-size-18 color-w">welcome to The Studio ABM Builders</h3>
                    <h1 class="f-size-80 lh38 color-w">Trust is us</h1>
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

            <div class="section_second_content mt-3 container" >
                <div class="p-20">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 d-flex flex-column justify-content-center">
                            <div class="header mb-3">
                                <div class="h1 color-w">Kitchen Remodeling</div>
                            </div>
                            <div class="slogn color-gold mb-3">
                                Studio ABM Builders creates luxurious, high-quality kitchen remodels that combine elegance and functionality.
                            </div>
                            <div class="text color-w">
                                Transform your kitchen with Studio ABM Builders.
                                We specialize in high-end kitchen remodeling, 
                                combining expert craftsmanship with stunning design. 
                                From modern layouts to custom cabinetry, our
                                dedicated team ensures every detail meets the highest
                                standards of quality and functionality. Elevate 
                                your culinary space with us!
                            </div>
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
                                <div class="h1 color-w">Bathroom Remodeling</div>
                            </div>
                            <div class="slogn color-gold mb-3">
                                Studio ABM Builders delivers elegant, high-quality bathroom remodels that enhance both style and functionality.
                            </div>
                            <div class="text color-w">
                                Transform your bathroom with Studio ABM Builders. We specialize 
                                in luxurious bathroom remodeling, merging expert craftsmanship
                                with beautiful design. From spa-like retreats to functional
                                layouts, our dedicated team ensures every detail meets the 
                                highest standards of quality and elegance. Elevate your bathing 
                                experience with us!
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-20">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 d-flex flex-column justify-content-center">
                            <div class="header mb-3">
                                <div class="h1 color-w">3D Design</div>
                            </div>
                            <div class="slogn color-gold mb-3">
                                Studio ABM Builders specializes in stunning 3D design solutions that blend creativity with precision. Our innovative approach transforms spaces, ensuring each design is both visually captivating and perfectly functional.
                            </div>
                            <div class="text color-w">
                                Transform your vision with Studio ABM Builders. We specialize in exceptional 
                                3D design that brings your ideas to life, merging artistic flair with practical 
                                solutions. Our talented team creates immersive designs that enhance any space, 
                                ensuring every element reflects your unique style and needs. Elevate your 
                                environment with our cutting-edge 3D design services!
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <img src="second_slide_content/3.jpg" alt="" class="ml-50 w-100 second_slide_img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="section_tirth container p-20">
            <div class="h1 color-w text-center">About Studio ABM Builders</div>
            <div class="text_about color-w">
                Studio ABM is a leading kitchen design company that is committed to creating functional and beautiful kitchens for our clients. We
                understand that a kitchen is more than just a place to cook and eat, it’s the heart of the home where memories are made and
                cherished. That’s why we take great care in designing kitchens that are not only aesthetically pleasing, but also highly functional and efficient.
                Our team of talented designers and skilled craftsmen work closely with each client to understand their unique needs and tastes and create a
                customized kitchen design that is tailored to their lifestyle. With a focus on quality, attention to detail and customer satisfaction, Studio ABM
                is the trusted choice for all your kitchen design needs.
            </div>
        </div>

        <div class="section_forth ">
            <div class="h1 color-w text-center">More About Studio ABM Builders</div>
            <div class="content">
                <div class="items container d-flex p-20">
                    <div class="item d-flex flex-column">
                        <div class="icon h-50">
                            <img src="icones/1.svg" alt="" class="w-100 h-100">
                        </div>
                        <div class="text h-100 text-center">Always on time, Studio ABM Builders delivers your kitchen remodel to perfection!</div>
                    </div>
                    <div class="item d-flex flex-column">
                        <div class="icon h-50">
                            <img src="icones/2.svg" alt="" class="w-100 h-100">
                        </div>
                        <div class="text h-100 text-center">Quality first, Studio ABM Builders creates kitchens that blend elegance and functionality seamlessly!</div>
                    </div>
                    <div class="item d-flex flex-column">
                        <div class="icon h-50">
                            <img src="icones/3.svg" alt="" class="w-100 h-100">
                        </div>
                        <div class="text h-100 text-center">Craftsmanship matters—Studio ABM Builders designs kitchens that stand the test of time!
                    </div>
                </div>
            </div>
        </div>
        <div class="section_fifth container p-20">
            <div class="h1 color-w text-center">Some of Our Projects</div>
            <div class="projects" style=" width: 100%; height: 60vh; top: 0;z-index: 1;" ></div>
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