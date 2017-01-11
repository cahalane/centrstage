@extends('layout')

@section('title')
<title>Live Concert Streams | Centrstage</title>
@endsection

<main>

	<header class="header">

		@include('partials.navbar')

	</header>

	<section class="explanation">

		<h1 class="explanation-heroText">
			We're launching soon, keep posted for our first streams.
		</h1>
		<a class="explanation-button-link" href="/signup">
			<button class="explanation-button button--primary">Sign Up</button>
		</a>
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
