@extends('site')

@section('title')
About CENTRSTAGE
@endsection

@section('content')

<header class="header">
	@include('partials.navbar')
</header>

<main>

	<section class="content fullWidthPadding" id="about">
		<h3>
			<span class="logotype-black">CENTR</span><span class="logotype-red">STAGE</span> is an online platform that allows subscribers to watch live music performances in real-time from the comfort of their own home.
		</h3>
		<p>
			Our mission is to become the primary outlet for viewing unique, professionally captured, live music performances online.
		</p>
		<p class="about-subtext">
			We aim to establish ourselves as a brand that truly champions music, stands up for artistry and nurtures connectivity, whilst providing an exciting platform for musical discovery.
		</p>
		<a class="button is-primary" href="/signup">
			Sign Up
		</a>
	</section>

	@include('components.streams-index')

</main>

@include('partials.footer')

@endsection