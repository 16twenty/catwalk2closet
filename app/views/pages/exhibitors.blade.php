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
			<ul class="exhibitor_list">
				<li><a href="http://www.fredperry.com/" target="_blank">Fred Perry</a></li>
				<li><a href="http://oliverspencer.co.uk/" target="_blank">Oliver Spencer</a></li>
				<li><a href="http://www.filson.com/" target="_blank">Filson</a></li>
				<li><a href="http://aigleboots.com/" target="_blank">Aigle</a></li>
				<li><a href="http://www.nau.com/" target="_blank">Nau</a></li>
				<li><a href="http://rivieras-shoes.com/world/fr/?iso_site=eu" target="_blank">Rivieras</a></li>
				<li><a href="http://www.swissarmy.com/ca/app/content/" target="_blank">Victorinox</a></li>
				<li><a href="www.narces.com" target="_blank">Narces</a></li>
			</ul>
		</div>
		<div class="four columns">
			<ul class="exhibitor_list">
				<li><a href="http://www.northland-pro.com/en/" target="_blank">Northland Pro</a></li>
				<li><a href="http://shoplazypants.com/" target="_blank">Lazypants</a></li>
				<li><a href="http://www.wayneclarkdesign.com/#/home" target="_blank">Wayne Clark</a></li>
				<li><a href="www.arthurmendonca.ca" target="_blank">Arthur Mendonca</a></li>
				<li><a href="http://www.bekerfashions.com/" target="_blank">Frascara</a></li>
				<li><a href="http://www.hue.com/Default.aspx" target="_blank">Hue Legwear</a></li>
				<li><a href="http://www.yummielife.com/" target="_blank">Yummie By Heather Thompson</a></li>
				<li><a href="www.jewellerybykaren.com" target="_blank">Karen McFarlane</a></li>
			</ul>
		</div>
		<div class="four columns">
			<ul class="exhibitor_list">
				<li><a href="http://www.gloverall.com/" target="_blank">Gloverall</a></li>
				<li><a href="http://www.rubyanded.co.uk/" target="_blank">Ruby + Ed</a></li>
				<li><a href="www.randolphusa.com" target="_blank">Randolph</a></li>
				<li><a href="http://www.toddsnyder.com/" target="_blank">Todd Snyder</a></li>
				<li><a href="http://www.coteetciel.com/en-CA/" target="_blank">Cote-Ciel</a></li>
				<li><a href="http://www.prettyyoulondon.com/" target="_blank">Pretty You Slippers</a></li>
				<li><a href="http://lamarquecollection.com/" target="_blank">LaMarque</a></li>
			</ul>
		</div>
	</div>
</div>
@include('content.brands')
@include('content.contact')
@stop





















