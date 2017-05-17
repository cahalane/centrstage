@extends('site')

@section('title')
Reset Password | CENTRSTAGE
@endsection

@section('content')

<header class="header">
    @include('partials.navbar')
</header>

<main>
    
    <section class="content fullWidthPadding" id="signup">
        <h1>
            Reset your <span class="logotype-black">CENTR</span><span class="logotype-red">STAGE</span> password.
        </h1>

        @include('forms.resetpassword')

    </section>

    @include('components.streams-index')

</main>

@include('partials.footer')

@endsection