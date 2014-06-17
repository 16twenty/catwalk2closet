@extends('layouts.default')

@section('content')
<div class="event">
	<div class="row">
		<div class="six columns centered">
			<div class="ribbon">
				<h2>The Exhibitors</h2>
			</div>
		</div>
	</div>
	@include('content.sellsheet')
	<div class="row" style="margin-top:30px;">
		<div class="ten columns centered">
			<div class="promo text-center">
				<h4>Over 120 premium designer brands</h4>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="four columns">	
			<!--<ul class="exhibitor_list">
				<li><a href="#">Lorem ipsum dolor sit amet</a></li>
				<li><a href="#">consectetuer adipiscing elit</a></li>
				<li><a href="#">Aliquam tincidunt mauris eu risus</a></li>
				<li><a href="#">Vestibulum auctor dapibus neque</a></li>
				<li><a href="#">Nunc dignissim risus id metus</a></li>
				<li><a href="#">Cras ornare tristique eli</a></li>
			</ul>-->
		</div>
		<div class="four columns">
			<ul class="exhibitor_list">
				<li><a href="http://www.northland-pro.com/en/" target="_blank">Northland Pro</a></li>
				<li><a href="http://shoplazypants.com/" target="_blank">Lazypants</a></li>
			</ul>
		</div>
		<div class="four columns">
			<!--<ul class="exhibitor_list">
				<li><a href="#">Cras iaculis ultricies nulla</a></li>
				<li><a href="#">Donec quis dui at dolor tempor interdum</a></li>
				<li><a href="#">Vivamus molestie gravida turpis</a></li>
				<li><a href="#">Fusce lobortis lorem at ipsum semper sagitti.</a></li>
				<li><a href="#">Nam convallis pellentesque nisl</a></li>
				<li><a href="#">Integer malesuada commodo nulla</a></li>
			</ul>-->
		</div>
	</div>
</div>
@include('content.brands')
@include('content.contact')
@stop