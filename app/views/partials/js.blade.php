<script src="{{ asset('gumby/js/libs/jquery-2.0.2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('gumby/js/libs/modernizr-2.6.2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('gumby/js/libs/gumby.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
	// bind to fixed modules events
$('nav').on('gumby.onFixed', function(e) {
  //$('header').addClass('test');
 $('.header').addClass('top_space');
 $('.logo_scroll').addClass('logo_on');
// scrolled back up past fix position now in original state
}).on('gumby.onUnfixed', function(e) {
  $('.header').removeClass('top_space');
  $('.logo_scroll').removeClass('logo_on');
  });
</script>
