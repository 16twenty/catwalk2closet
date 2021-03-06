<div class="header">
	<div class="row">
		<div class="six columns centered text-center">
			<a href="{{ URL::to('/') }}"><img class="logo" src="{{ asset('img/logo.png') }}" width="443"></a>
			<p class="tagline">Toronto's Largest Designer Sample Sale</p>
			<p class="tagline_2">October 23 - 26, 2014</p>
			<p class="social">
				<a href="https://www.facebook.com/pages/Catwalk-2-Closet-Toronto/670426873007197" target="_blank"><i class="icon-facebook-squared"></i></a>
				<a href="https://twitter.com/Catwalk2Closet" target="_blank"><i class="icon-twitter"></i></a>
			</p>
		</div>
	</div>
</div>
<nav class="nav" gumby-fixed=".event" gumby-offset="75">	
	<div class="row navbar" id="nav1">
		<a class="toggle" gumby-trigger="#nav1 > ul" href="#"><i class="icon-menu"></i></a>
		<div class="one column alpha logo_scroll">
			<a href="{{ URL::to('/') }}"><img class="logo" src="{{ asset('img/logo_small.png') }}"></a>
		</div>
		<ul class="six columns centered">
			<li>
				<a href="{{ URL::to('/') }}"><i class="icon-home"></i></a>
			</li>
			<li>
				<a href="{{ URL::to('/about') }}">About</a>
			</li>
			<li>
				<a href="{{ URL::to('/exhibitors') }}">Exhibitors</a>
			</li>
			<li>
				<a href="{{ URL::to('/vip') }}">VIP</a>
			</li>
			<li>
				<a id="navcontact">Contact</a>
			</li>
		</ul>
	</div>
</nav>