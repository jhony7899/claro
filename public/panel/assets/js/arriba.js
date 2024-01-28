$(document).ready(function(){

$('.ir-arriba').click(function(){
$('body, html').animate({
scrollTop:'0px'
},300);
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
	var c1=1;
	var c2=0;

	$('#btn1').click(function(){
if (c1 > c2) {
	$('#span').removeClass('icon-chevron-with-circle-down');
	$('#span').addClass('icon-chevron-with-circle-up');
	c1=0;c2=1;
}else{
	$('#span').removeClass('icon-chevron-with-circle-up');
	$('#span').addClass('icon-chevron-with-circle-down');
	    c2=0;c1=1;
}
	$('#btn2').slideToggle(300);
	});


  var x1=1;
  var x2=0;

  $('#p1').click(function(){
  $('#pe1').show(300);
  $('#pe2').hide(300);
  });
  $('#p2').click(function(){

  $('#pe2').show(300);
  $('#pe1').hide(300);
  });


$('#q1').click(function(){
$('#que1').show(300);
$('#que2').hide(300);
$('#que3').hide(300);
$('#q1').addClass('btn-que1');
$('#q1').removeClass('btn-que2');

$('#q2').addClass('btn-que2');
$('#q2').removeClass('btn-que1');

$('#q3').addClass('btn-que2');
$('#q3').removeClass('btn-que1');
});
$('#q2').click(function(){
$('#que2').show(300);
$('#que1').hide(300);
$('#que3').hide(300);
$('#q2').addClass('btn-que1');
$('#q2').removeClass('btn-que2');

$('#q1').addClass('btn-que2');
$('#q1').removeClass('btn-que1');

$('#q3').addClass('btn-que2');
$('#q3').removeClass('btn-que1');
});
$('#q3').click(function(){
$('#que3').show(300);
$('#que2').hide(300);
$('#que1').hide(300);
$('#q3').addClass('btn-que1');
$('#q3').removeClass('btn-que2');

$('#q2').addClass('btn-que2');
$('#q2').removeClass('btn-que1');

$('#q1').addClass('btn-que2');
$('#q1').removeClass('btn-que1');
});
$('#b1').click(function(){

	if($('#blo1').width()<$('#que1').width()){
$('#blo2').hide(300);
$('#blo1').removeClass('col-md-6');
$('#blo1').addClass('col-md-12');
}else{
$('#blo2').show(300);
$('#blo1').removeClass('col-md-12');
$('#blo1').addClass('col-md-6');
}

});

});



/*$(document).ready(function(){

$(window).scroll(function() {
	  	scrollTop = $(window).scrollTop();
	  	var about = $('#about').offset().top;
	  	var about_height = $('#about').height();
	  	var team = $('#team').offset().top;
	  	var team_height = $('#team').height();
	  	var references = $('#references').offset().top;
	  	var references_height = $('#references').height();
	  	var blog = $('#blog').offset().top;
	  	var blog_height = $('#blog').height();
	  	var contact = $('#contact').offset().top;
	  	var contact_height = $('#contact').height();
		if (scrollTop >= $('#main').offset().top) {
			$('header').addClass('fixed');
			$('.dropdown-menu-wrapper').addClass('fixed');
		} else {
			$('header').removeClass('fixed');
			$('.dropdown-menu-wrapper').removeClass('fixed');
		}
		$('#second-menu a, #site-navigation a').parent().removeClass('current-menu-item');
		if (scrollTop >= 0 && scrollTop < about + about_height) {
			$('#site-navigation a[href*="about"]').parent().addClass('current-menu-item');
		}
		if (scrollTop >= team && scrollTop < team + team_height) {
			$('#site-navigation a[href*="team"]').parent().addClass('current-menu-item');
		}
		if (scrollTop >= references && scrollTop < references + references_height) {
			$('#site-navigation a[href*="references"]').parent().addClass('current-menu-item');
		}
		if (scrollTop >= blog && scrollTop < blog + blog_height) {
			$('#site-navigation a[href*="blog"]').parent().addClass('current-menu-item');
		}
		if (scrollTop >= contact && scrollTop < contact + contact_height) {
			$('#site-navigation a[href*="contact"]').parent().addClass('current-menu-item');
		}
	});

});


         $(document).ready(function(){

            // cada vez que se mueva el scroll del navegador se ejecutara
            // este evento
             $(document).scroll(function(){

                // si la posicion del scroll es superior a 55 pixels...
                if($(window).scrollTop()>85)
                {
                    // indicamos que el header tiene una posicion fija a -47 pixels
                    $("header").css({"position":"fixed", "top":0});
                    // definimos el margen superior al contenido cuando queda fijado
                    $("#content").css({"margin-top":-85});
                }else{
                    $("header").css({"position":"inherit", "top":"inherit"});
                    $("#content").css({"margin-top":0});
                }
            });
        });*/
