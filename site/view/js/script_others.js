
$('#popup-people').hide();
$('.description-about-us').hide();

$('#popup-research').hide();
$('.description-about-us').hide();

$(document).ready(function() {


    $('#more1').click(function(){
        $('.desc1').slideToggle();
    });

    $('#more2').click(function(){
        $('.desc2').slideToggle();
    });

    $('#more3').click(function(){
        $('.desc3').slideToggle();
    });

    $('#more4').click(function(){
        $('.desc4').slideToggle();
    });

    $('#more5').click(function(){
        $('.desc5').slideToggle();
    });

    $('#more6').click(function(){
        $('.desc6').slideToggle();
    });

    $('#more7').click(function(){
        $('.desc7').slideToggle();
    });

    $('#more8').click(function(){
        $('.desc8').slideToggle();
    });

    $('#more9').click(function(){
        $('.desc9').slideToggle();
    });

    $('#more10').click(function(){
        $('.desc10').slideToggle();
    });



    /* block more info when mouseover */
    $(".content-event-moreinfo").hide();
    $( ".block-event" ).mouseenter(function() {
        $(this).children().children().next().fadeIn( "fast" );
    });
    $( ".block-event" ).mouseleave(function() {
        $(this).children().children().next().fadeOut( "fast" );
    });


    /* block more info when click */
    $(".tool-block-ocult").hide();
    $( ".tool-block-footer" ).click(function() {
        $(this).prev().prev().fadeToggle('fast');
    });


    $('.close-popup-people').click(function(){
        $('#modalPeople').hide();
    });

    $('#popup-research').click(function(){
        $('#popup-research').hide();
    });

});

    /* Config popup people */
    function popup( linkLattes, linkSigaa, linkScholar, linkPubMed, imagem,name,funcao,email ){
        document.getElementById("button-lattes").setAttribute("onclick", "location.href='"+linkLattes+"'");
        document.getElementById("button-sigaa").setAttribute("onclick", "location.href='"+linkSigaa+"'");
        document.getElementById("button-scholar").setAttribute("onclick", "location.href='"+linkScholar+"'");
        document.getElementById("button-pubmed").setAttribute("onclick", "location.href='"+linkPubMed+"'");
        $('#photo-popup-people').attr('src', imagem);
        $('#name-popup-people').html(name);
        $('#funcao-popup-people').html(funcao);
        $('#email-popup-people').html(email);
    }

     /* Config popup research */
    function popupR( linkp1, linkp2, linkp3, linkp4, linkp5,  namep1, namep2, namep3, namep4, namep5, department, imagem ){
        $('#popup-research').show();
        document.getElementById("button-p1").setAttribute("onclick", "location.href='"+linkp1+"'");
        document.getElementById("button-p2").setAttribute("onclick", "location.href='"+linkp2+"'");
        document.getElementById("button-p3").setAttribute("onclick", "location.href='"+linkp3+"'");
        document.getElementById("button-p4").setAttribute("onclick", "location.href='"+linkp4+"'");
        document.getElementById("button-p5").setAttribute("onclick", "location.href='"+linkp5+"'");
        $("#namep1-popup-research").html(namep1);
        $("#namep2-popup-research").html(namep2);
        $("#namep3-popup-research").html(namep3);
        $("#namep4-popup-research").html(namep4);
        $("#namep5-popup-research").html(namep5);
        $("#department-popup-research").html(department);
        $('#photo-popup-people').attr('src', imagem);
    }