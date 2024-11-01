$( document ).ready(function(){    
    const preloader_hide = document.querySelector('.preloader');

    setTimeout(
        hide_preloader(), 1000
    );
    function hide_preloader() {
        preloader_hide.classList.add('hide');
        setTimeout(
            display_false_preloader(), 0
        );
    }

    function display_false_preloader() {
        preloader_hide.classList.add('d-none');
    }
});