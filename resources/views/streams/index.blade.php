@extends('site')

@section('title')
Live Concert Streams | CENTRSTAGE
@endsection

@section('content')

<main>

	<header class="header">

		@include('partials.navbar')

	</header>

	<section class="content fullWidthPadding" id="streams-page">

		<h1>
			We're launching soon, keep posted for our first streams.
		</h1>
		<p>
			Find new bands, keep up with your favourites or discover new artists on <span class="logotype-black">CENTR</span><span class="logotype-red">STAGE</span>.
		</p>
		<p>
			Watch live concert streams for free, voluntarily donate to the band and support real musicians with a virtual busking case.
		</p>
		<a class="button is-primary" href="/signup">
			Sign Up
		</a>

	</section>

	@include('components/streams-index')

</main>

@include('partials/footer')

@endsection
