<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <script>
        window.Laravel = {
            csrfToken: "{{ csrf_token() }}",
            stripeKey: "{{ config('services.stripe.key') }}"
        }
    </script>

    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <link href="/css/materialize.min.css" rel="stylesheet">
    <link href="{{ mix('/css/admin.css') }}" rel="stylesheet" type="text/css">

</head>
<body>

<div id="admin">
    @include('partials.sidenav')
        <header class="header">
            <nav class="header-navbar">
                <a href="#" data-activates="slide-out" class="header-navbar-button-collapse button-collapse"><i class="material-icons">menu</i></a>
                <h3 class="header-navbar-title">@yield('header')</h3>
            </nav>
        </header>
        <main>
            <div class="container">
                @yield('main')
            </div>
        </main>
        <footer>
            @yield('footer')
        </footer>
    </div>
</div>

@yield('scripts')

<script src="/js/jquery.min.js" type="text/javascript"></script>
<script src="/js/materialize.min.js" type="text/javascript"></script>
<script src="{{ mix('/js/admin.js') }}" type="text/javascript"></script>

</body>
</html>