<script src="{{ asset('gumby/js/libs/jquery-2.0.2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('gumby/js/libs/modernizr-2.6.2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('gumby/js/libs/gumby.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
	// bind to fixed modules events
$('nav').on('gumby.onFixed', function(e) {
  //$('header').addClass('test');
 $('.header').addClass('top_space');
 $('.logo_scroll').addClass('logo_on');
 $('.navbar ul').removeClass('centered').addClass('push_six');
// scrolled back up past fix position now in original state
}).on('gumby.onUnfixed', function(e) {
  $('.header').removeClass('top_space');
  $('.logo_scroll').removeClass('logo_on');
  $('.navbar ul').addClass('centered').removeClass('push_six');
  });

  $('#navcontact').click(function(event){
	  event.preventDefault();
	  $('html, body').animate({
		scrollTop: $('footer').offset().top}, 1000);
  });
</script>
<script type="text/javascript">
	var featuredcurrent = 0;
	var brandscurrent = 0;


function slidesection(index, current, panels) {
  		var lastpanel = panels.length-1;  		
  		console.log(index);
  		if (index == 0) { //previous
  			if (current == 0) {
	  			current = lastpanel;
	  			for(i = 0;i < lastpanel; i++) {
		  			$(panels[i]).animate({"margin-left": "-100%"},'slow');
		  		}
  			} else {
	  			current -= 1;
	  			$(panels[current]).animate({"margin-left": "0%"},'slow');	  			
	  		}
  		} else { //next
  			if (current == lastpanel) {
	  			current = 0;
	  			for(i = lastpanel-1; i >= 0; i--) {
		  			$(panels[i]).animate({"margin-left": "0%"},'slow');
		  		}
  			} else {
  				$(panels[current]).animate({"margin-left": "-100%"},'slow');
	  			current += 1;
	  		}
  		};
  		console.log(current);
  		return current;
}

	// bind to tabs click event
	$('.tab-nav li').click(function(e) {
		var index = $(this).val();
		var panels = $('.tab-content');
		featuredcurrent = slidesection(index,featuredcurrent,panels);
  	});
  	
  	//$('.tab-nav li').click(function(e) {
//		var index = $(this).val();
	//	var panels = $('.tab-content');
	//	slidesection(index,brandscurrent,panels);
 // 	});
</script>
