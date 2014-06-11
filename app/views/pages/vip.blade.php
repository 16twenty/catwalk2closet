@extends('layouts.default')

@section('content')
<div class="event">
	<div class="row">
		<div class="six columns centered">
			<div class="ribbon">
				<h2>Get On The VIP List</h2>
			</div>
		</div>
	</div>
	<div class="row">
	    <div class="eight columns centered text-center">
	        <strong>VIPs</strong> get exclusive access to the showroom on opening night so they can snag the best deals before anyone else. <strong>Want to get on the list?</strong> Fill out the form below.
	        <form class="vip_list nine columns centered" name="viplistform" action="{{ URL::to('vip') }} " method="post">
	            <h3 class="text-center"><i class="icon-star"></i>Become a VIP</h3>
	            <ul>
	                <li class="field text-center">
	                    <input class="wide text input" type="text" name="firstname" id="firstname" placeholder="First Name" />
	                </li>
	                <li class="field text-center">
	                    <input class="wide text input" type="text" name="lastname" id="lastname" placeholder="Last Name" />
	                </li>
	                <li class="append field text-center">
	                    <input class="wide text input" type="email" name="email" id="email" placeholder="Email Address" />
	                    <div class="medium primary btn"><input type="submit" value="Go"/></div>
	                </li>
	            </ul>
	        </form>
	    </div>
	</div>
</div>

@include('content.contact')
@stop