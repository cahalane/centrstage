<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
    	var Centrstage = {
    		csrfToken: "{{ csrf_token() }}",
    		stripeKey: "{{ config('services.stripe.key') }}"
    	}
    </script>

    @yield('title')

    <!-- Material Design Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="app">
    @yield('content')
</div>

@yield('scripts')
<script src="/js/app.js" type="text/javascript"></script>

</body>
</html>