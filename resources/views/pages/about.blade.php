@extends('site')

@section('title')
About Centrstage
@endsection

@section('content')

<header class="header">
	@include('partials.navbar')
</header>

<main>

	<section class="about">

		<h1 class="about-heroText">
			<span class="logotype-black">centr</span><span class="logotype-red">stage</span> is an online platform that allows subscribers to watch live music performances in real-time from the comfort of their own home.
		</h1>
		<h2 class="about-subtext">
			Our mission is to become the primary outlet for viewing unique, professionally captured, live music performances online.
		</h2>
		<h2 class="about-subtext">
			We aim to establish ourselves as a brand that truly champions music, stands up for artistry and nurtures connectivity, whilst providing an exciting platform for musical discovery.
		</h2>
		<a class="about-button-link" href="/signup">
			<button class="about-button button--primary">Sign Up</button>
		</a>

	</section>

</main>

@include('partials/footer')

@endsection