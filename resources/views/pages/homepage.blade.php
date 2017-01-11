@extends('layout')

@section('content')

<main>

	<section class="heroArea">

		@include('partials.navbar')

		<div class="heroArea-content heroArea-content--tabletAndBelow">
			<h1 class="heroArea-content-heading">Join the band.</h1>
			<h3 class="heroArea-content-subtitle">Live music streamed anywhere, on any device.</h3>
			<a class="heroArea-content-button-link" href="/streams">
				<button class="heroArea-content-button button--primary">Watch now</button>
			</a>
			<a class="heroArea-content-button-link" href="/signup">
				<button class="heroArea-content-button button--secondary">Sign up</button>
			</a>
		</div>

	</section>

	<section class="explanation">

		<h1 class="explanation-heroText">
			We're bringing live music everywhere.</br>
			Join the movement.
		</h1>
		<h2 class="explanation-subtext">
			Find new bands, keep up with your favourites or discover new artists on <span class="logotype-black">centr</span><span class="logotype-red">stage</span>.
		</h2>
		<h2 class="explanation-subtext">
			Watch live concert streams for free, voluntarily donate to the band and support real musicians with a virtual busking case.
		</h2>

	</section>

	@include('partials/streams-index')

</main>

@include('partials/footer')

@endsection