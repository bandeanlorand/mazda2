var $ = jQuery.noConflict();

function slider() {
	
	
	
	
	var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
		DOMAnimation:false,
        spaceBetween: 30,
        onSlideChangeStart: function( swiper ){
            var CurrentSlider = swiper.snapIndex;
            $('.loading_content').fadeIn();
			$.get( "mazda2-inside.php?data=" + CurrentSlider + '&lang=' + $('#language').val(), function( data ) {
				$( ".interior_box" ).html( data );
				$('.loading_content').fadeOut();
			});
        }
    });	
}

function preregister() {
	//$.lockfixed(".preregister",{offset: {top: 500, bottom: 100}});
	 var element = $('.preregister'),
        originalY = element.offset().top;
    
		// Space between element and top of screen (when scrolling)
		var topMargin = '50%';
		
		
		element.css('position', 'absolute');
}


/* registration form - open starts here */
function registartionFormOpen(){
	
	  
	$( "a.formOpen" ).on( "click", function() {
	
	  $( ".btn.formOpen" ).clearQueue().fadeOut(200)
		  $( ".btn.formOpen" ).promise().done(function() {
			$('.register_box').removeClass('register_folded').addClass('register_unfolded');
				$('.form_registration').fadeIn(100);
				
				
		  });	
	});
	  
	  
	
}
/* registration form - ends starts here */

/* fade in sections - starts here */



if ( $( window ).width() > 1025 ) {
	sections = $("section.exterior , .section_interior , .section_interior , .sound_group , .step4 , section.tickets , section.register").fadeTo(0, 0);
	$(window).scroll(function(d,h) {
    sections.each(function(i) {
        a = $(this).offset().top + $(this).height() / 4 ;
        b = $(window).scrollTop() + $(window).height();
        if (a < b) $(this).fadeTo(1000,1);
    });
});
	
} else {
	
}





/* fade in sections - ends here */


function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}

/* registration form - validation starts here */
function registerFormValidate() {
    
    if(!($('#first_name')).val().length) {
        return false;
    }
    
    if(!($('#last_name')).val().length) {
        return false;
    }
    
    if(!($('#street')).val().length) {
        return false;
    }
    
    if(!($('#street_nr')).val().length) {
        return false;
    }
    
    if(!($('#postcode')).val().length) {
        return false;
    }
    
    if(!($('#city')).val().length) {
        return false;
    }
    
    if(!($('#email')).val().length || !validateEmail( $('#email').val() )) {
        return false;
    }
    
    if(!($('#phone')).val().length) {
        return false;
    }
    
    if(!parseInt($('#province').val())) {
        return false;
    }
    
    if(!parseInt($('#dealer').val())) {
        return false;
    }
    
    return true;
}
/* registration form - validation ends here */


/* registration form - submit starts here */
function registartionFormSubmit(){
	//$("a.formOpen").on( "click",function() {
	  
	  //$('.form_welcome').fadeOut();
	  
	$( "a.formSubmit" ).on( "click", function() {
        if (registerFormValidate()) {
            var form = $('#registration_form');
            
            $.ajax( {
                type: "POST",
                url: form.attr( 'action' ),
                data: form.serialize(),
                success: function( response ) {
                    if (response.trim() == 'true') {
                        $('.form_thanks').fadeIn(100);
						
						$('html, body').animate({
							scrollTop: $(".register_box").offset().top - 150
						}, 1000);
						

						
                        $('.form_welcome').fadeOut(100);
						$('.register_box').removeClass('register_unfolded');
						$('.register_box').addClass('register_folded');
						
                        $('.form_registration').fadeOut(100);
						
                        /*alert('Display THANK YOU POPUP');            */
                        
                        form[0].reset();
                    }
                    else {
                        if ($('#language').val() == 'nl') {
                            alert('We kunnen uw aanvraag momenteel niet versturen. Onze excuses. Probeer het later nog eens aub.'); //        
                        }
                        else {
                            alert('Nous ne pouvons pas transmettre votre demande pour le moment. Veuillez réessayer plus tard.'); // 
                        }
                    }
                }
            });
            
            return false;
        }
        else {
            if ($('#language').val() == 'nl') {
                alert('Gelieve alle velden coorect in te vullen!'); //        
            }
            else {
                alert('Veuillez remplir tous les champs correctement!'); // 
            }
        }
	});
	  
	  
	//});
}
/* registration form - submit ends here */


/* registration form - province change - starts here */
function onProvinceChange(){
	$( "#province" ).on( "change", function() {
        // console.log($(this).val());
        
        var provinceId = $(this).val();
        
        $('#dealer')
            .find('option')
            .remove()
            .end()
            .append('<option value="0"></option>')
            .val(0);
        /*
        $('#dealer')
            .append($("<option></option>")
            .attr("value",0)
            .text('')); 
          */  
        //document.form.dealer.options[ 0 ] = new Option("",""); 
        
        $.ajax( {
              type:'GET',
              url:'get_dealers.php',
              data:"province=" + provinceId + '&lang=' + $('#language').val(),
              dataType: 'json',
              success: function(response){                 
              
                if (response.length) {
                    for (index in response) {
                        var dealer = response[index];
                        
                        // $("#dealer").options[ dealer.id ] = new Option(dealer.name,""); 
                        $('#dealer')
                            .append($("<option></option>")
                            .attr("value",dealer.id)
                            .text(dealer.name + ' (' + dealer.city + ')')
                        ); 
                        
                        /*console.log(dealer);                        */
                    }
                }
                
                //$('#dealer').                   
              }
        } );
    });
}


/* registration form - province change - ends here */


/* scroll to tickets - starts here */
function scrollToTicketsRose(){
	$(".get_tickets").click(function() {
		var offset = 20; //Offset of 20px
	
		$('html, body').animate({
			scrollTop: $("section.tickets").offset().top + offset
		}, 800);
	});
	
	$(".tickets_content .text a.btn").click(function() {
		var offset = -80; //Offset of 20px
	
		$('html, body').animate({
			scrollTop: $(".form_welcome").offset().top + offset
		}, 800);
	});
	
	
}
/* scroll to tickets - ends here */


/* exterior dots - starts here */
function generate_lines( pointer ) {
    var Pointer = $( pointer );
    
    $('.pointer').removeClass('active_pointer');
    Pointer.addClass('active_pointer');
    $('.lines').html('');
    var entireSectionPosition = $('.sections_group_top').offset(),
        h3PositionPosition = $('.exterior_box h3').offset(),
        currentPointer = Pointer.offset(),
        currentPointerRel = Pointer.position(),
        verticalHeight =  h3PositionPosition.top - currentPointer.top,
        newTopPosition = currentPointerRel.top + 28,
        horizWidth = h3PositionPosition.left - currentPointer.left,
        h3TopPosition = '';
    if ( verticalHeight < 0 ) {
        newTopPosition = newTopPosition + verticalHeight - 28;
    } else {
        verticalHeight = verticalHeight - 24;
    }
    
    if ( $( window ).width() > 1024 ) {
        h3TopPosition = h3PositionPosition.top - entireSectionPosition.top;
    } else {
        //h3TopPosition = -290;
        h3TopPosition = - (currentPointer.top - h3PositionPosition.top - currentPointerRel.top);
    }
    
    
    $('<div/>', { 'class' : 'vert_Line' }).css({
        'height': Math.abs(verticalHeight) + 'px',
        'top': newTopPosition + 'px',
        'left' : currentPointerRel.left + 12 + 'px'
    }).appendTo('.lines');    

    $('<div/>', { 'class' : 'horiz_line' }).css({
        'width': horizWidth + 'px',
        'top': h3TopPosition + 'px',
        'left' : currentPointerRel.left + 12 + 'px'
    }).appendTo('.lines');
}
/* exterior dots - ends here */

$(document).ready(function() {
    "use strict";
    slider();
    //preregister();
    registartionFormOpen();
    registartionFormSubmit();
    onProvinceChange();
    scrollToTicketsRose();


    //ext lines
    $('.pointer').on('click', function() {
        var lang = $('#language').val();
		
		var rel = $(this).attr('rel');
        generate_lines('.pointer_' + rel);
        
        $('.loading_content').fadeIn();
        $.get( "mazda2-outside.php?data=" + rel + '&lang=' + lang, function( data ) {
            $( ".exterior_box" ).html( data );
            $('.loading_content').fadeOut();
        });
    });
    
    /*
     * go to form
     */
     
    $(".preregister").click(function() {
        var offset = 0;
        $('html, body').animate({
            scrollTop: $(".register").offset().top + offset
        }, 1000);
    });
});


$(window).load( function(){
	generate_lines('.pointer_2');
});


$(window).resize(function(){
    var ActivePointer = $('.active_pointer').attr('rel');
    if ( ActivePointer != null ) {
        generate_lines('.pointer_' + ActivePointer);
    }
});
var sectionTwoGroup = $('.sections_group_top').offset();
$(window).on('scroll', function(){
	
	if ($(window).width() < 1025) {
		   
		}
		else {
		$(window).scroll(function () {
			var WinOffset = $(window).scrollTop();
			
			if ( WinOffset >  sectionTwoGroup.top - 200 ) {
				var offset = 150 + $(document).scrollTop()+"px";
			}
			

			$('.preregister').animate({top:offset},{duration:500,queue:false});
		});
		
	}
});