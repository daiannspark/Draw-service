$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
$( ".Top" ).addClass( "redzams" );
		}  else {
			$('.Top').removeClass( "redzams" );
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});

$(document).ready(function(){
    $('#cascade-slider').cascadeSlider({
      itemClass: 'cascade-slider_item',
      arrowClass: 'cascade-slider_arrow'
    });  

    $( "#all" ).click(function() {
        $( ".nature, .space, .urban" ).removeClass('hide');
      });

    $( "#nature" ).click(function() {
        $( ".nature" ).removeClass('hide');
        $( ".space, .urban" ).addClass('hide');
      });

      $( "#space" ).click(function() {
        $( ".space" ).removeClass('hide');
        $( ".nature, .urban" ).addClass('hide');
      });

      $( "#urban" ).click(function() {
        $( ".urban" ).removeClass('hide');
        $( ".nature, .space" ).addClass('hide');
      });
});
