$(document).ready(function(){

    $('#ind1').click(function(){$('#indi1').show(300);});
    $('#ind2').click(function(){$('#indi2').show(300);});
    $('#ind3').click(function(){$('#indi3').show(300);});
    $('#ind4').click(function(){$('#indi4').show(300);});
    $('#ind5').click(function(){$('#indi5').show(300);});
    $('#ind6').click(function(){$('#indi6').show(300);});
    $('#ind7').click(function(){$('#indi7').show(300);});
    $('#ind8').click(function(){$('#indi8').show(300);});
    $('#ind9').click(function(){$('#indi9').show(300);});
    $('#ind10').click(function(){$('#indi10').show(300);});
    $('#ind11').click(function(){$('#indi11').show(300);});
    $('#ind12').click(function(){$('#indi12').show(300);});
    $('#ind13').click(function(){$('#indi13').show(300);});

    $('#cl1').click(function(){$('#indi1').hide(300);});
    $('#cl2').click(function(){$('#indi2').hide(300);});
    $('#cl3').click(function(){$('#indi3').hide(300);});
    $('#cl4').click(function(){$('#indi4').hide(300);});
    $('#cl5').click(function(){$('#indi5').hide(300);});
    $('#cl6').click(function(){$('#indi6').hide(300);});
    $('#cl7').click(function(){$('#indi7').hide(300);});
    $('#cl8').click(function(){$('#indi8').hide(300);});
    $('#cl9').click(function(){$('#indi9').hide(300);});
    $('#cl10').click(function(){$('#indi10').hide(300);});
    $('#cl11').click(function(){$('#indi11').hide(300);});
    $('#cl12').click(function(){$('#indi12').hide(300);});
    $('#cl13').click(function(){$('#indi13').hide(300);});

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
