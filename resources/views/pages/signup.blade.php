@extends('site')

@section('title')
Sign up to CENTRSTAGE
@endsection

@section('content')

<header class="header">
	@include('partials.navbar')
</header>

<main>
	
	<section class="content fullWidthPadding" id="signup">
		<h1>
			Sign up to <span class="logotype-black">CENTR</span><span class="logotype-red">STAGE</span> completely free.
		</h1>
		<p>
			Join us as we embark on bringing live music everywhere. Don't worry about us filling your inboxes, we'll only email you with big updates.
		</p>

		@include('forms.signup')

	</section>

	@include('components.streams-index')

</main>

@include('partials.footer')

@endsection