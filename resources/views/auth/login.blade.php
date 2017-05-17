@extends('site')

@section('title')
Log in to CENTRSTAGE
@endsection

@section('content')

<header class="header">
    @include('partials.navbar')
</header>

<main>
    
    <section class="content fullWidthPadding" id="login">

        @include('forms.login')

    </section>

    @include('components.streams-index')

</main>

@include('partials.footer')

@endsection