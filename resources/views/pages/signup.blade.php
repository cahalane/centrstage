@extends('site')

@section('title')
<title>Sign up to Centrstage</title>
@endsection

@section('content')

<header class="header">
	@include('partials.navbar')
</header>

<main>
	
<section class="signup">
	
<h1 class="signup-heroText">
	Sign up to Centrstage completely free.
</h1>

<p class="signup-paragraph">
	Join us as we embark on bringing live music everywhere. Don't worry about us filling your inboxes, we'll only email you with big updates.
</p>

@include('forms.signup')

</section>

</main>

@include('partials.footer')

@endsection