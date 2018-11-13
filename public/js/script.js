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
        $( ".fantasy, .classic" ).removeClass('hide');
      });

    $( "#fantasy" ).click(function() {
        $( ".fantasy" ).removeClass('hide');
        $( ".classic" ).addClass('hide');
      });

      $( "#classic" ).click(function() { 
        $( ".classic" ).removeClass('hide');
        $( ".fantasy" ).addClass('hide');
      });

});
