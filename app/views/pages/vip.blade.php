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
	@include('content.mediaday')
	<div class="row">
	    <div class="eight columns centered text-center">
	        <p>Sign up and be the first to receive C2C <strong>exclusive offers and contests</strong> as well as a <strong>personal VIP invite</strong> to shop the show first before we open to the public.<br> Fill out the form below and become a VIP.</p>

	        <form class="vip_list nine columns centered" name="viplistform" action="{{ URL::to('vip') }}" method="post">
	            <h3 class="text-center"><i class="icon-star"></i>Become a VIP</h3>
					@if($errors->count() > 0)
						@foreach($errors->all() as $message)
						<div class="danger alert">
							{{ $message }}
						</div>
						@endforeach
					@endif
                    @if(isset($chimperror))
                        <div class="danger alert">
							{{ $chimperror }}
						</div>
                    @endif
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
	@if(isset($success))
    <div class="row">
        <div class="four columns centered success alert">
            Thank you for your interest in Catwalk 2 Closet! A confirmation email has been sent to your email address.
        </div>
    </div>
@endif
</div>
</div>
@include('content.contact')
@stop