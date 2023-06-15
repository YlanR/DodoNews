$(document).ready(function(){
    var altura = $('.barramenu').offset().top;
    
    $(window).on('scroll', function(){
        if($(window).scrollTop() > altura){
            $('.barramenu').addClass('menu', 'ul', 'login', 'personal');
            $('.barramenu').addClass('barract');

        } else {
            $('.barramenu').removeClass('menu', 'ul', 'login', 'personal');
            $('.barramenu').removeClass('barract');
        }
    })

      
})