@extends('layouts.default')

@section('content')
<div class="event">
	<div class="row">
		<div class="six columns centered">
			<div class="ribbon">
				<h2>About the Show</h2>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="six columns cta">
			<h3><i class="icon-location"></i>Location</h3>
			<p>
				<strong>Heritage Court: Direct Energy Centre, CNE</strong>
				<br>100 Princes' Blvd.
				<br>Toronto, ON
				<br><a href="https://www.google.ca/maps/place/100+Princes'+Blvd/@43.6344829,-79.4108713,17z/data=!3m1!4b1!4m2!3m1!1s0x882b351a5bca91e9:0xaa5cc333a2007728"><i class="icon-map"></i>Directions</a>
			</p>
		</div>
		<div class="six columns cta_blue">
			<h3><i class="icon-calendar"></i>Dates</h3>
			<p>
				<strong>Thurs, Oct 23, 2014</strong><span class="pull_right">10:00 AM - 9:00 PM</span>
				<br><strong>Fri, Oct 24, 2014</strong><span class="pull_right">10:00 AM - 9:00 PM</span>
				<br><strong>Sat, Oct 25, 2014</strong><span class="pull_right">10:00 AM - 9:00 PM</span>
				<br><strong>Sun, Oct 263, 2014</strong><span class="pull_right">10:00 AM - 9:00 PM</span>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="twelve columns centered">
			<img class="bordered" src="{{ asset('img/POOL_trade_show_feb12_HypeType-3_2000.jpg') }}">
		</div>
	</div>
	<div class="row">
		<div class="twelve columns centered">
			<p><strong>Catwalk <span class="big_two">2</span> Closet (C<span class="big_two">2</span>C)</strong> is an innovative new consumer show selling designer and high-end label samples and surplus inventories at wholesale or better prices. Product mix includes ladies and men's outerwear, clothing, bags, scarves, hats, jewellery, sunglasses and shoes. </p>
		</div>
	</div>
	<div class="row" style="margin-top:30px;">
		<div class="ten columns centered">
			<div class="promo text-center">
				<h4>"the only show of its kind in Toronto"</h4>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="twelve columns centered">	
			<p>Show Exhibitors are amongst the most sought after new and well established labels that will offer a great variety of product selections. Fashionista's and Fashionisto's can shop till they drop at 50 to 80% off retail prices. <strong>Catwalk <span class="big_two">2</span> Closet</strong> is the only show of its kind in Toronto that offers over 100 brands to shop under one roof.</p>
		</div>
	</div>
	<div class="row">
		<div class="twelve columns centered">	
			<p style="padding-bottom:30px;">Follow us on <a href=""><i class="icon-twitter"></i>Twitter</a> and LIKE us on <a href=""><i class="icon-facebook-squared"></i>Facebook</a> to learn more about the brands offered at the show and <strong>win great prizes!</strong></p>
		</div>
	</div>
</div>
@include('content.contact')
@stop