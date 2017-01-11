@extends('layout')

@section('title')
<title>{{ $stream->title }} Live | Centrstage</title>
@endsection

@section('content')

<main>

	<header class="header">

		@include('partials.navbar')

	</header>

	<div class="streamContainer">
		<section class="streamContainer-video">

			<div class="streamContainer-video-player fb-video" data-href="https://www.facebook.com/AcousticTrench/videos/bc.AbpWHy9R9mHqS3n3dqfYdLg-JFF7-sTA-fCslZUfQ-BFrJp3Zxp1LxSf8UadzFKPGggBA0SL5zMd6i522FV1hGD7kzjbmKBbKjPoAgL8m_8yX2tGOhxqExMwcil0tCT9S9FIp0laSMspaPoT4i7ilztH/1120243774661784/" data-width="auto" data-allowfullscreen="true"></div>

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
			<div class="fb-comments" data-href="https://www.facebook.com/AcousticTrench/videos/bc.AbpWHy9R9mHqS3n3dqfYdLg-JFF7-sTA-fCslZUfQ-BFrJp3Zxp1LxSf8UadzFKPGggBA0SL5zMd6i522FV1hGD7kzjbmKBbKjPoAgL8m_8yX2tGOhxqExMwcil0tCT9S9FIp0laSMspaPoT4i7ilztH/1120243774661784/" data-width="100%" data-numposts="5"></div>
		</section>
	</div>

	@include('components/streamsIndex')

</main>

@include('partials/footer')

@endsection

@section('scripts')
@include('includes.facebookSDK')
<script src="https://checkout.stripe.com/checkout.js"></script>
@endsection
