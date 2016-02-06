<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Valkyrie-Missile</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/tether.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>


<nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
    <div class="container">
        <a class="navbar-brand" href="#">Valkyrie-Missile</a>
        <ul class="nav navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
            <li class="nav-item active"><a href="#" class="nav-link">Portfolio</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
    </div><!-- /.container -->
</nav><!-- /.navbar -->


<!--<section class="jumbotron text-xs-center">
    <div class="container">
        <h1 class="jumbotron-heading">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
        <p>
            <a href="#" class="btn btn-primary">Main call to action</a>
            <a href="#" class="btn btn-secondary">Secondary action</a>
        </p>
    </div>
</section>-->

<div class="album text-muted">
    <div class="container">

        @yield('content')

    </div>
</div>

<footer class="text-muted">
    <div class="container">
        <p class="pull-xs-right">
            <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
    </div>
</footer>
        <!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="{{asset('js/scripts.js')}}"></script>{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
@include('flash')
@yield('scripts')
</body>
</html>