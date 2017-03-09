@extends('site')

@section('title')
<title>Host a Stream | Centrstage</title>
@endsection

@section('content')

<header class="header">
	@include('partials.navbar')
</header>

<main>

	<section class="contact">

		<h1 class="contact-heroText">
			Get in touch
		</h1>
		<h2 class="contact-subtext">
			We'd love to hear from you. Please get in touch via the form below.
		</h2>
		
		@include('forms.contact')

	</section>

</main>

@include('partials/footer')

@endsection('content')
