@extends('site')

@section('title')
CENTRSTAGE | Live Music Anywhere
@endsection

@section('content')

<main class="homepage">

	<section class="hero is-medium">
		<div class="hero-head">
			@include('partials.navbar')
		</div>

		<div class="hero-body">
			<div class="columns">
				<div class="column is-offset-7">
					<h1 class="title">
						Join the band.
					</h1>
					<h2 class="subtitle">
						Live music streamed anywhere, on any device.
					</h2>
					<a class="button is-primary" href="https://livestream.com/centrstage">
						Watch now
					</a>
					<a class="button is-white is-outlined" href="/signup">
						Sign up
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="content fullWidthPadding" id="explanation">
		<h1>
			We're bringing live music everywhere.</br>
			Join the movement.
		</h1>
		<p>
			Find new bands, keep up with your favourites or discover new artists on <span class="logotype-black">CENTR</span><span class="logotype-red">STAGE</span>.
		</p>
		<p>
			Watch live concert streams for free, voluntarily donate to the band and support real musicians with a virtual busking case.
		</p>
	</section>

	@include('components/streams-index')

</main>

@include('partials/footer')

@endsection