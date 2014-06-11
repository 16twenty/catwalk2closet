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
    <div class="eight columns centered">
        VIPs get early access to the event so they can snag the best deals before anyone else. Want to get on the list? Fill out the form below.
        <form name="viplistform" action="{{ URL::to('vip') }} " method="post">
            <ul>
                <li class="field">
                    <label class="inline" for="firstname" >First Name:</label>
                    <input class="wide text input" type="text" name="firstname" id="firstname" placeholder="First Name" />
                </li>
                <li class="field">
                    <label class="inline" for="lastname" >Last Name:</label>
                    <input class="wide text input" type="text" name="lastname" id="lastname" placeholder="Last Name" />
                </li>
                <li class="field">
                    <label class="inline" for="email" >Email Address:</label>
                    <input class="wide text input" type="text" name="email" id="email" placeholder="Email Address" />
                </li>
                <li>
                    <div class="medium primary btn">
                        <input type="submit" value="submit" />
                    </div>
                </li>
            </ul>
        </form>
    </div>
</div>
<div class="row">
    <div class="six columns centered">
        Thank you for your interest in Catwalk 2 Closet!
    </div>
</div>
</div>

@include('content.contact')
@stop