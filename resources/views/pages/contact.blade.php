@extends('site')

@section('title')
Get in touch | CENTRSTAGE
@endsection

@section('content')

<header class="header">
	@include('partials.navbar')
</header>

<main>

	<section class="content fullWidthPadding" id="contact">

		<h1>
			Get in touch
		</h1>
		<p>
			We'd love to hear from you. Please get in touch via the form below.
		</p>
		
		@include('forms.contact')

	</section>

</main>

@include('partials/footer')

@endsection('content')
