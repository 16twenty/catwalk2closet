<!--Brands Homepage -->
@include('content.brands')
<div class="brands">
@include('content.sellsheet')
<div class="row">
		<div class="six columns centered text-center" style="margin-bottom:40px;">
			<div class="medium primary btn">
				<a href="{{ URL::to('/exhibitors') }}">More Exhibitors</a>
			</div>
		</div>
	</div>
</div>