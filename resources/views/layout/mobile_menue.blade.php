<div class="open_menue_mobile ">
    <div class="transparent_bg_menue_header"></div>
    <div class="container h-100 d-flex flex-column justify-content-center">
        <div class="company_logo w-100 d-flex align-items-center justify-content-center">
           <img src="/just-logo-removebg.png" width="160px" class="mobile_menue_img" style="position: relative; top: -15px">
        </div>
        <div class="navigation d-flex flex-column align-items-center justify-content-center">
            <div class="nav_item d-flex flex-column justify-content-center align-items-center">
                <div class="transperent_line"></div>
                <a href="/" class="nav">
                    Home
                </a>
                <div class="transperent_line"></div>
            </div>
            

            <div class="nav_item d-flex flex-column justify-content-center align-items-center">
                <div class="transperent_line"></div>
                <a class="nav" id="AboutUs">
                    About Us
                </a>
                <div class="transperent_line"></div>
            </div>


            <div class="nav_item d-flex flex-column justify-content-center align-items-center">
                <div class="transperent_line"></div>
                <a class="nav" id="Contacts">
                    Our projects
                </a>
                <div class="transperent_line"></div>
            </div>

            <div class="nav_item d-flex flex-column justify-content-center align-items-center">
                <div class="transperent_line"></div>
                <a class="nav" id="Contacts">
                    services
                </a>
                <div class="transperent_line"></div>
            </div>
            
            
        </div>
    </div>
</div>
    
    <div class="menue_footer">
        <div class="transperent_line_footer w-100 mb-15"></div>
        <div class="contactTextMenue text-center">
            <p><b>Phone: </b>{!! $FrontPhone[0]->value !!}</p>
            <p><b>Working Hours: </b>{!! $workingHoursFront[0]->value !!}</p>
            <p><b>Email: </b>{!! $FrontEmail[0]->value !!}</p>
        </div>
        <div class="menue_icone_footer">
            <a href={!!$InstagramLink[0]->value!!} target="_blank"><i class=" color-w fa-brands fa-facebook p-15"></i></a>
            <a href={!!$FacebookLink[0]->value!!}><i class=" color-w fa-brands fa-instagram  p-15"></i></a>
        </div>
        <div class="transperent_line_footer w-100"></div>
    </div>  
<div class="transparent_bg_menue_footer"></div>

