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
	@include('content.location')
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