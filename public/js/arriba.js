$(document).ready(function(){
$('.ir-arriba, #inicio').click(function(){
$('body, html').animate({
scrollTop:'0px'
},300);
});

$('#nos').click(function(){
	var nos = $('#nosotros').offset().top;
$('body, html').animate({
scrollTop:nos
},500);
});

$('#pro').click(function(){
	var pro = $('#proyectos').offset().top;
$('body, html').animate({
scrollTop:pro
},500);
});
$('#con').click(function(){
	var con = $('#contactenos').offset().top;
$('body, html').animate({
scrollTop:con
},500);
});




$(window).scroll(function(){
if($(this).scrollTop()>0){
 $('.ir-arriba').slideDown(300);
}else{
$('.ir-arriba').slideUp(300);
}
});
});



         $(document).ready(function(){

            // cada vez que se mueva el scroll del navegador se ejecutara
            // este evento
             $(document).scroll(function(){

                // si la posicion del scroll es superior a 55 pixels...
                if($(window).scrollTop()>= $('#main').offset().top)
                {
                    $('#site-navigation').addClass('fixed');
                    $('#act-ini').removeClass('active');

				   // $('#logo2').show();
					//$('#logo1').hide();
					//indicamos que el header tiene una posicion fija a -47 pixels
                   /* $("header").css({"position":"fixed", "top":0});
                    // definimos el margen superior al contenido cuando queda fijado
                    $("#content").css({"margin-top":-85});*/
                }else{
                    /*$("header").css({"position":"inherit", "top":"inherit"});
                    $("#content").css({"margin-top":0});*/
                	$('#site-navigation').removeClass('fixed');
					$('#act-ini').addClass('active');
					//$('#logo1').show();
					//$('#logo2').hide();
				}

				if($(window).scrollTop()>= $('#organizacion').offset().top && $(window).scrollTop()< $('#organizacion').offset().top + $('#organizacion').height() ){
					$('#act-org').addClass('active');
				}
				else{
					$('#act-org').removeClass('active');
				}
				if($(window).scrollTop()>= $('#servicios').offset().top && $(window).scrollTop()< $('#servicios').offset().top + $('#servicios').height() ){
					$('#act-ser').addClass('active');
				}
				else{
					$('#act-ser').removeClass('active');
				}
				if($(window).scrollTop()>= $('#blog').offset().top && $(window).scrollTop()< $('#blog').offset().top + $('#blog').height() ){
					$('#act-blo').addClass('active');
				}
				else{
					$('#act-blo').removeClass('active');
				}
				if($(window).scrollTop()>= $('#contactenos').offset().top && $(window).scrollTop()< $('#contactenos').offset().top + $('#contactenos').height() ){
					$('#act-con').addClass('active');
				}
				else{
					$('#act-con').removeClass('active');
				}
            });
        });
