@extends('layouts.default')

@section('content')

@include('content.event')
@include('content.featured')
@include('content.brands')
<div class="brands">
<div class="row">
	<div class="cta">
		<h3>Become an Exhibitor Now!</h3>
		<p>With over 30K attendees anticipated to make their way to our <strong>FIRST EVER CATWALK <span class="big_two">2</span> CLOSET SAMPLE SALE</strong>, we are the best place in Toronto to show off your goods! Have a look at our <strong>SELL SHEET</strong> below and contact us for pricing and details! </p>
		<div class="medium default btn icon-left entypo icon-map"><a href="#">SELL SHEET</a></div>
	</div>
</div>
<div class="row">
		<div class="six columns centered text-center" style="margin-bottom:40px;">
			<div class="medium primary btn">
				<a href="{{ URL::to('/exhibitors') }}">More Exhibitors</a>
			</div>
		</div>
	</div>
</div>
@include('content.contact')

@stop
