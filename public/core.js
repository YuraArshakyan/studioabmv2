

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
});