<footer>
    <div class="footer">        
        <div class="container">
            <div class="sections">
                <div class="section1 d-flex p-15 justify-content-center ">
                    <div class="stage1">
                        <h3 class="color-w" >Studio ABM Builders License #: 1100541</h3>
                        {{-- <div class="input-group mb-3">
                            <input type="email" class="form-control emailUpdates" placeholder="Your email" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary formUpdates" type="button" id="button-addon2">Submit</button>
                        </div>
                        <div class="status">
                            <div class="UpdatesFormSuccess success d-none">
                                Success thank you for your submission
                            </div>
                            <div class="UpdatesFormDeny deny d-none">
                                Error
                            </div>
                        </div> --}}
                    </div>
                    <div class="stage2">
                        <div class="footel_links">
                            <div class="links_first_section text-center">
                                <h3>Resources</h3>
                                <a href="/" >Home</a>
                                <a href="#" >About Us</a>
                                {{-- <a href={{url('/process')}} >Process</a> --}}
                                <a href="#" >Projects</a>
                                <a href="#" >Services</a>
                                <b class = "color-w">Studio ABM Builders License #: 1100541</b>
                            </div>
                            <div class="links_second_section text-center">
                                <h3>Contacts</h3>
                                <a href={{$FacebookLink[0]->value}} target="_blank">Facebook</a>
                                <a href={{$InstagramLink[0]->value}} target="_blank">Instagram</a>
                                <a href="#" >{{$FrontPhone[0]->value}}</a>
                                <a href="#" >{{$FrontEmail[0]->value}}</a>
                                <a href="#" >{!! nl2br($Address[0]->value) !!}</a>
                                <a href="#" >{!! nl2br($workingHoursFront[0]->value) !!}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="devider w-100"></div>

                <div class="section2 d-flex flex-column justify-content-center align-items-center p-15 ">
                    <img src="/just-logo-removebg.png">
                    <div class="company_slogn">
                        STUDIO ABM BUILDERS
                    </div>
                </div>

                <div class="devider w-100"></div>

                <div class="section3 d-flex flex-column justify-content-center align-items-center  ">
                    <p class="mt-3 color-w">&copy; 2024-{{date('Y', strtotime('+1 year'))}}</p>
                </div>
            </div>
        </div>
    </div>
</footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/core.js"></script>
<script src="/assets/js/preloader.js"></script>
</html>