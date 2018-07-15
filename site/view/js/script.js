
/* GET VALUES IMAGES SLIDER */
$height  = $(window).height();   // altura do browser
$width   = $(window).width();   // comprimento do browser

/* ALTERAR MENU AO SAIR DO TOPO */
$(window).scroll(function(){
        var topo = $(window).scrollTop();
        if( topo > 40 ){
            $(".menu_biome").css("background-color", "rgba(250, 250, 250, 1)");
        } else {
            $(".menu_biome").css("background-color", "rgba(250, 250, 250, 1)");
        }
});


$(function(){
    var loading = $('#loadbar').hide();
    $(document)
    .ajaxStart(function () {
        loading.show();
    }).ajaxStop(function () {
        loading.hide();
    });
    
    $("label.btn").on('click',function () {
        var choice = $(this).find('input:radio').val();
        $('#loadbar').show();
        $('#quiz').fadeOut();
        setTimeout(function(){
           $( "#answer" ).html(  $(this).checking(choice) );      
            $('#quiz').show();
            $('#loadbar').fadeOut();
           /* something else */
        }, 1500);
    });

    $ans = 3;

    $.fn.checking = function(ck) {
        if (ck != $ans)
            return 'INCORRECT';
        else 
            return 'CORRECT';
    }; 
}); 


// esconde os blocos necessarios
$(".block-popup").hide();
$('.block-ball').hide();
$('.line').hide();
$('.box_menu_xsm').hide();
$('.box_menu_xsm ul li ul').hide();


$(document).ready(function() {

    // quando pagina estiver carregada, some o preloader
    $('.preloader').fadeOut(1500);

    // configuração do menu para telas pequenas
    $( ".menu_xsm" ).click(function() {
        $('.box_menu_xsm').fadeToggle();
        $('.box_menu_xsm ul #mark_toggle').click(function() {
            $(this).children().fadeToggle();
        });
    });




    $('#line01').delay(1000).fadeIn();
    $('#line02').delay(1200).fadeIn();
    $('#line03').delay(1400).fadeIn();
    $('#block-graduate').delay(1600).fadeIn('slow');

    $('#line04').delay(1600).fadeIn();
    $('#block-research').delay(1800).fadeIn('slow');

    $('#line05').delay(1800).fadeIn();
    $('#line06').delay(2000).fadeIn();
    $('#block-services').delay(2400).fadeIn('slow');

    $('#line07').delay(2400).fadeIn();
    $('#line08').delay(2600).fadeIn();
    $('#block-tools').delay(2800).fadeIn('slow');

    $('#line09').delay(2800).fadeIn();
    $('#line10').delay(3000).fadeIn();
    $('#block-people').delay(3200).fadeIn('slow');

    $('#line11').delay(3200).fadeIn();
    $('#line12').delay(3400).fadeIn();
    $('#block-events').delay(3600).fadeIn('slow');

    $('#line13').delay(3800).fadeIn();
    $('#line14').delay(4000).fadeIn();
    $('#block-publication').delay(4200).fadeIn('slow');



    // configuracao para tornar as bolinhas clicaveis
    $( "#block-graduate, #block-graduate-xsm" ).click(function() {
        $(".block-popup-graduate").slideDown();
        $("#slideshow").siblings().hide();
    });

    $( ".close-block-popup, .close-block-popup-xsm" ).click(function() {
        $(".block-popup-graduate").hide();
        $("#slideshow").siblings().show();
        $('.preloader').fadeOut(1500);
    });

    // configuracao para tornar as bolinhas clicaveis
    $( "#block-research, #block-research-xsm" ).click(function() {
        $(".block-popup-research").slideDown();
        $("#slideshow").siblings().hide();
    });

    $( ".close-block-popup, .close-block-popup-xsm" ).click(function() {
        $(".block-popup-research").hide();
        $("#slideshow").siblings().show();
        $('.preloader').fadeOut(1500);
    });

    // configuracao para tornar as bolinhas clicaveis
    $( "#block-services, #block-services-xsm" ).click(function() {
        $(".block-popup-services").slideDown();
        $("#slideshow").siblings().hide();
    });

    $( ".close-block-popup, .close-block-popup-xsm" ).click(function() {
        $(".block-popup-services").hide();
        $("#slideshow").siblings().show();
        $('.preloader').fadeOut(1500);
    });

    // configuracao para tornar as bolinhas clicaveis
    $( "#block-tools, #block-tools-xsm" ).click(function() {
        $(".block-popup-tools").slideDown();
        $("#slideshow").siblings().hide();
    });

    $( ".close-block-popup, .close-block-popup-xsm" ).click(function() {
        $(".block-popup-tools").hide();
        $("#slideshow").siblings().show();
        $('.preloader').fadeOut(1500);
    });

    // configuracao para tornar as bolinhas clicaveis
    $( "#block-people, #block-people-xsm" ).click(function() {
        $(".block-popup-people").slideDown();
        $("#slideshow").siblings().hide();
    });

    $( ".close-block-popup, .close-block-popup-xsm" ).click(function() {
        $(".block-popup-people").hide();
        $("#slideshow").siblings().show();
        $('.preloader').fadeOut(1500);
    });

    // configuracao para tornar as bolinhas clicaveis
    $( "#block-events, #block-events-xsm" ).click(function() {
        $(".block-popup-events").slideDown();
        $("#slideshow").siblings().hide();
    });

    $( ".close-block-popup, .close-block-popup-xsm" ).click(function() {
        $(".block-popup-events").hide();
        $("#slideshow").siblings().show();
        $('.preloader').fadeOut(1500);
    });

    // configuracao para tornar as bolinhas clicaveis
    $( "#block-publication, #block-publication-xsm" ).click(function() {
        $(".block-popup-publication").slideDown();
        $("#slideshow").siblings().hide();
    });

    $( ".close-block-popup, .close-block-popup-xsm" ).click(function() {
        $(".block-popup-publication").hide();
        $("#slideshow").siblings().show();
        $('.preloader').fadeOut(1500);
    });

  });




