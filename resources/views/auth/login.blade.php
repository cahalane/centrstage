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
        <h1>
            Login to <span class="logotype-black">CENTR</span><span class="logotype-red">STAGE</span>.
        </h1>


        @include('forms.login')

    </section>

    @include('components.streams-index')

</main>

@include('partials.footer')

@endsection