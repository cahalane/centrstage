@extends('layout')

@section('title')
<title>Host a Stream | Centrstage</title>
@endsection

<main>

	<header class="header">

		@include('partials.navbar')

	</header>

	<section class="hostAStream">

		<h1 class="hostAStream-heroText">
			Want to host a stream?
		</h1>
		<h2 class="hostAStream-subtext">
			We'd love to hear from you. Please get in touch via the form below.
		</h2>
		<form class="hostAStream-contactForm" method="POST" action="/contact">
			{{ csrf_field() }}

			<label class="hostAStream-contactForm-label" for="name"></label>
			<input class="hostAStream-contactForm-textInput" type="text" name="name" validate>

			<label class="hostAStream-contactForm-label" for="email"></label>
			<input class="hostAStream-contactForm-emailInput" type="email" name="email" validate>

			<label class="hostAStream-contactForm-label" for="message"></label>
			<input class="hostAStream-contactForm-textareaInput" type="textarea" name="message" validate>

			<button class="hostAStream-contactForm-submitButton">
			<i class="hostAstream-contactForm-submitButton-icon material-icon">send</i>
				Send
			</button>
		</form>

	</section>

</main>

@include('partials/footer')
