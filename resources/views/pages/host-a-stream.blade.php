@extends('layout')

@section('title')
<title>Host a Stream | Centrstage</title>
@endsection

<header class="header">
	@include('partials.navbar')
</header>

<main>

	<section class="hostAStream">

		<h1 class="hostAStream-heroText">
			Want to host a stream?
		</h1>
		<h2 class="hostAStream-subtext">
			We'd love to hear from you. Please get in touch via the form below.
		</h2>
		
		@include('forms.contact')

	</section>

</main>

@include('partials/footer')
