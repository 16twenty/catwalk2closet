<div class="event">
	<div class="row">
		<div class="six columns centered">
			<div class="ribbon">
				<h2>The Event</h2>
			</div>
		</div>
	</div>
	@include('content.location')
	<div class="row inner_nav">
		<div class="four columns">
			<div class="box" id="about">
				<a href="{{ URL::to('/about') }}">About The Show</a>
				<span class="paint_pink"></span>
			</div>
		</div>
		<div class="four columns">
			<div class="box" id="exhibitors">
				<a href="{{ URL::to('/exhibitors') }}">The Exhibitors</a>
				<span class="paint_blue"></span>
			</div>
		</div>
		<div class="four columns">
			<div class="box" id="vip">
				<a href="{{ URL::to('/vip') }}">Shop The Show First</a>
				<span class="paint_pink"></span>
			</div>
		</div>
	</div>
	@include('content.sellsheet')
</div>