@extends('site')

@section('title')
{{ $stream->title }} Live | CENTRSTAGE
@endsection

@section('content')

<main>

	<header class="header">

		@include('partials.navbar')

	</header>

	<div class="streamContainer">
		<section class="streamContainer-video">

			<div class="streamContainer-video-player fb-video" data-href="https://www.facebook.com/rockandrollhalloffame/videos/vb.21010144106/10154058192344107/" data-width="auto" data-allowfullscreen="true"></div>

		</section>

		<section class="streamContainer-details">
			<h1 class="streamContainer-details-title">{{ $stream->title }}</h1>
			<h2 class="streamContainer-details-date">Streaming on 1st March 2017 at 8:00pm GMT.</h2>
			<p class="streamContainer-details-description">Talking Heads were an American rock band formed in 1975 in New York City and active until 1991. The band comprised David Byrne, Chris Frantz, Tina Weymouth, and Jerry Harrison.</p>
			<div class="streamContainer-details-venue">
				<i class="streamContainer-details-venue-icon material-icons">location_on</i>
				<a class="streamContainer-details-venue-link" href="/">Venue Name, City, EG</a>
			</div>

			<donate-form :stream="{{ $stream }}"></donateForm>

		</section>

		<section class="streamContainer-comments">
			<div class="fb-comments" data-href="https://www.facebook.com/1615598228728084/videos/1870984349856136/" data-width="100%" data-numposts="5"></div>
		</section>
	</div>

	{{-- @include('components/streams-index') --}}

</main>

@include('partials/footer')

@endsection

@section('scripts')
@include('includes.facebookSDK')
<script src="https://checkout.stripe.com/checkout.js"></script>
@endsection
