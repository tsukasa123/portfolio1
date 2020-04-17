<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @include('inc.navbar')

        <div class="container py-4">
            
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{ route('post.index') }}"><i class="fas fa-home"></i> Posts</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('post.create') }}" class="btn btn-primary form-control rounded-pill">Tweet</a>
                        </li>
                    </ul>
                </div>


                
                @yield('content')
                

              
            </div>

        </div>      
    </div>
</body>
</html>
