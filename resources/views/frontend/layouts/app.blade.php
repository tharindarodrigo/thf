<html>
<head>
    <title>{{ config('app.name', 'The Hair Factory') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('frontend/css/style.min.css') }}" rel="stylesheet"/>

    @stack('styles')

</head>
<body>

@include('frontend.layouts.navBar')

@yield('content')

@include('frontend.layouts.footer')

<script src="{{ asset('frontend/js/jquery-3.1.1.min.js') }}" type="application/javascript"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}" type="application/javascript"></script>

@stack('scripts')

</body>
</html>