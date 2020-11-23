var path = window.location.pathname;
var pathnew = path.split("/");
// var width=window.screen.width;
// var height=window.screen.height;
// alert(width + 'x' + height);

alert(pathnew.length);

$(document).ready(function(e){
    if(window.screen.width <= 480){
        $('.intro .pan img').attr('src','image/pan-360x640.png');
        $('.team-box.left .simple_arc').arctext({radius: 55});
        $('.team-box.right .simple_arc').arctext({radius: 55});
        $('.team-box .simple_arc.aabhishek').arctext({radius: 55});
    }else{
        $('.intro .pan img').attr('src','image/panNew.png');
        $('.team-box.left .simple_arc').arctext({radius: 180});
        $('.team-box.right .simple_arc').arctext({radius: 165});
    }

	$(window).scroll(function() {
        var scrollHeight = $(document).height();
        var scrollPosition = $(window).height() + $(window).scrollTop();
        if(pathnew.length == 3){
       	 	if(scrollPosition > 800){
            	$('.navbar').addClass('change');
            	$('.logo-holder').addClass('change');
            	$('.navbar .nav-link').addClass('change');
            	$('.logo-holder img').addClass('change');
                $('.user-icon').addClass('change');
            }else{
            	$('.navbar').removeClass('change');
            	$('.logo-holder').removeClass('change');
            	$('.navbar .nav-link').removeClass('change');
            	$('.logo-holder img').removeClass('change');
                $('.user-icon').removeClass('change');
            }
        }
    })

    $('.nav-icon').on('click', function(e){
        if(!$(this).hasClass('open')){
            $('#brands-mini').removeClass('open');
            $('.brands-menu').removeClass('shown');
        }
        $(this).toggleClass('open');
        $('.mobile-menu').toggleClass('open');
    })

    $('#brands-mini').on('click', function(e){
        $(this).toggleClass('open');
        $('.brands-menu').toggleClass('shown');
    })

})