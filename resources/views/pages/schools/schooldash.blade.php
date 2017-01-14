<!DOCTYPE html>
<html lang="en">

    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible">
      <title>TransNzoia &mdash; County Education System</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Trans Nzoia County Education  System" />
      <meta name="keywords" content="transnzoia county, education in kenya, kenya education" />
      <meta name="author" content="InFed" />

        <!-- Facebook and Twitter integration -->
      <meta property="og:title" content=""/>
      <meta property="og:image" content=""/>
      <meta property="og:url" content=""/>
      <meta property="og:site_name" content=""/>
      <meta property="og:description" content=""/>
      <meta name="twitter:title" content="" />
      <meta name="twitter:image" content="" />
      <meta name="twitter:url" content="" />
      <meta name="twitter:card" content="" />

      <link rel="shortcut icon" href="{{ asset ('imondcorp.ico')}}">

      <!-- {!! Charts::assets() !!} -->
              <!-- Bootstrap -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Google Font -->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Junction">

        {!! Charts::assets() !!}

        <!-- Font Awesome -->
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{asset('css/gentelella.min.css')}}" rel="stylesheet">
        <!-- style.css -->
        <!-- <link rel="stylesheet" href="{{ asset ('css/style.css')}}"> -->
        @stack('stylesheets')

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">

                @include('pages/schools/includes/sidebar')

                @include('pages/schools/includes/topbar')

                @yield('main_container')

            </div>
        </div>

        <footer class="imond">
            <div class="pull-right">
                System By <a href="https://afrobay.co.ke">Infed</a>
            </div>
            <div class="clearfix"></div>
        </footer>

        <!-- jQuery -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- Custom Theme Scripts -->
        <script src="{{asset('js/gentelella.min.js')}}"></script>

        @stack('scripts')

    </body>
</html>
