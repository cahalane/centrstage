@extends('layout')

@section('title')
<title>Live Concert Streams | Centrstage</title>
@endsection

<main>

	<header class="header">

		@include('partials.navbar')

	</header>

	<section class="streamsPage">

		<h1 class="streamsPage-heroText">
			We're launching soon, keep posted for our first streams.
		</h1>
		<h2 class="streamsPage-subtext">
			Find new bands, keep up with your favourites or discover new artists on <span class="logotype-black">centr</span><span class="logotype-red">stage</span>.
		</h2>
		<h2 class="streamsPage-subtext">
			Watch live concert streams for free, voluntarily donate to the band and support real musicians with a virtual busking case.
		</h2>
		<a class="streamsPage-button-link" href="/signup">
			<button class="streamsPage-button button--primary">Sign Up</button>
		</a>

	</section>

	@include('components/streamsIndex')

</main>

@include('partials/footer')
