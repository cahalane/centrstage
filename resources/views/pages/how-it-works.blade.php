@extends('layout')

@section('title')
<title>How it Works | Centrstage</title>
@endsection

<main>

	<header class="header">

		@include('partials.navbar')

	</header>

	<section class="howItWorks">

		<h2 class="howItWorks-subtext">
			<span class="logotype-black">centr</span><span class="logotype-red">stage</span> is an online platform that allows subscribers to watch live music performances in real-time from the comfort of their own home.
		</h2>
		<p class="howItWorks-paragraph">
			Our mission is to become the primary outlet for viewing unique, professionally captured, live music performances online.
		</p>
		<p class="howItWorks-paragraph">
			We aim to establish ourselves as a brand that truly champions music, stands up for artistry and nurtures connectivity, whilst providing an exciting platform for musical discovery.
		</p>
		<a class="howItWorks-button-link" href="/signup">
			<button class="howItWorks-button button--primary">Sign Up</button>
		</a>

	</section>

</main>

@include('partials/footer')
