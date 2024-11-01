

const small_carousel_item = document.querySelectorAll(".small_img_bg");
const max_index_small_carousel = small_carousel_item.length;
let current_index_small_carousel = 0;
small_carousel_item[0].classList.toggle('active');

const carousel_item = document.querySelectorAll(".front_carusel");
let max_index = carousel_item.length;
carousel_item[0].classList.remove('carousel_deactivated');
carousel_item[0].classList.add('carousel_activated');
let current_index = 0;

$( document ).ready(function(){    
    const mobile_menue = document.querySelector('.container_menue_mobile');

    $( ".menue_open_bg" ).on( "click", function() {     
        mobile_menue.classList.toggle('open');   
    });
    
    $( ".carusel_control_left" ).on( "click", function() {        
        if(current_index  == 0){
            carousel_item[current_index].classList.remove('carousel_activated');    
            carousel_item[current_index].classList.add('carousel_deactivated');
            current_index = max_index-1;
            carousel_item[current_index].classList.add('carousel_activated');    
            carousel_item[current_index].classList.remove('carousel_deactivated');

            small_carousel_item[current_index_small_carousel].classList.toggle('active');
            current_index_small_carousel = max_index_small_carousel-1;
            small_carousel_item[current_index_small_carousel].classList.toggle('active');
        }else{
            carousel_item[current_index].classList.remove('carousel_activated');  
            carousel_item[current_index].classList.add('carousel_deactivated');
            current_index--;
            carousel_item[current_index].classList.remove('carousel_deactivated');
            carousel_item[current_index].classList.add('carousel_activated');

            small_carousel_item[current_index_small_carousel].classList.toggle('active');
            current_index_small_carousel--;
            small_carousel_item[current_index_small_carousel].classList.toggle('active');
        }
    } );

    setInterval(() => {
        next();
    }, 10000);

    $( ".carusel_control_right" ).on( "click", next);

    function next() {  
        if(current_index  == carousel_item.length-1){
            carousel_item[current_index].classList.remove('carousel_activated');    
            carousel_item[current_index].classList.add('carousel_deactivated');
            current_index = 0;
            carousel_item[current_index].classList.add('carousel_activated');    
            carousel_item[current_index].classList.remove('carousel_deactivated');

            small_carousel_item[current_index_small_carousel].classList.toggle('active');
            current_index_small_carousel = 0;
            small_carousel_item[current_index_small_carousel].classList.toggle('active');
        }else{
            carousel_item[current_index].classList.remove('carousel_activated');  
            carousel_item[current_index].classList.add('carousel_deactivated');
            current_index++;
            carousel_item[current_index].classList.remove('carousel_deactivated');
            carousel_item[current_index].classList.add('carousel_activated');

            small_carousel_item[current_index_small_carousel].classList.toggle('active');
            current_index_small_carousel++;
            small_carousel_item[current_index_small_carousel].classList.toggle('active');
        }

    }


    $( "#about" ).on( "click", function() { 
        const Element_To_Scroll = document.querySelector('.section_second_content'); 

        Element_To_Scroll.scrollIntoView({
            behavior: 'smooth' // Optional for smooth scrolling
        });
    });

    $( "#services" ).on( "click", function() { 
        const Element_To_Scroll_services = document.querySelector('.section_sixth'); 

        Element_To_Scroll_services.scrollIntoView({
            behavior: 'smooth' // Optional for smooth scrolling
        });
    });
    
    $( ".contacts_button" ).on( "click", function() { 
        const Element_To_Scroll_contacts = document.querySelector('.section_eighth'); 

        Element_To_Scroll_contacts.scrollIntoView({
            behavior: 'smooth' // Optional for smooth scrolling
        });
    });
});



$(document).ready(function(){

    $(".contacts_button").on("click", function(){
        let name = document.querySelector('.Name');
        let phone = document.querySelector('.Phone');
        let message = document.querySelector('.Message');
        const success_message = document.querySelector('.form_submited_correct_contact');
        const error_message = document.querySelector('.form_failed_contact');
        $.ajax({
            type: "POST",
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
            url: "submitFormRequest",
            data: {
                'name': name.value,
                'phone': phone.value,
                'message': message.value,
                'form_name': 'Contacts'
            },
            success: function(response){
                console.log(response.status);
                if(response.status == "success"){
                    if(error_message.classList.contains('active')){
                        error_message.classList.remove('active')
                    }
                    success_message.classList.add('active');
                    setTimeout(() => success_message.classList.remove('active'), 3000);
                }else{
                    if(success_message.classList.contains('active')){
                        success_message.classList.remove('active')
                    }
                    error_message.classList.add('active');
                    setTimeout(() => error_message.classList.remove('active'), 3000);
                }
            }
        });
    });
})
    
