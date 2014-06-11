<div class="header">
	<div class="row">
		<div class="six columns centered text-center">
			<img class="logo" src="{{ asset('img/logo.png') }}" width="316">
			<p class="tagline">Toronto's Only Bi-Annual Designer Sample Sale</p>
			<p class="social">
				<i class="icon-facebook-squared"></i>
				<i class="icon-twitter"></i>
				<i class="icon-instagram"></i>
			</p>
		</div>
	</div>
</div>
<nav class="nav" gumby-fixed=".event" gumby-offset="75">	
	<div class="row navbar" id="nav1">
		<a class="toggle" gumby-trigger="#nav1 > ul" href="#"><i class="icon-menu"></i></a>
		<div class="one column alpha logo_scroll">
			<img class="logo" src="{{ asset('img/logo_small.png') }}">
		</div>
		<h1 class="five columns">Direct Energy Centre, Oct 23 - Oct 26</h1>
		<ul class="six columns">
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
				<a href="" id="navcontact">Contact</a>
			</li>
		</ul>
	</div>
</nav>