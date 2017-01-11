@extends('layout')

@section('title')
<title>About Centrstage</title>
@endsection

<main>

	<header class="header">

		@include('partials.navbar')

	</header>

	<section class="about">

		<h2 class="about-subtext">
			<span class="logotype-black">centr</span><span class="logotype-red">stage</span> is an online platform that allows subscribers to watch live music performances in real-time from the comfort of their own home.
		</h2>
		<p class="about-paragraph">
			Our mission is to become the primary outlet for viewing unique, professionally captured, live music performances online.
		</p>
		<p class="about-paragraph">
			We aim to establish ourselves as a brand that truly champions music, stands up for artistry and nurtures connectivity, whilst providing an exciting platform for musical discovery.
		</p>
		<a class="about-button-link" href="/signup">
			<button class="about-button button--primary">Sign Up</button>
		</a>

	</section>

</main>

@include('partials/footer')
