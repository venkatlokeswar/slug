<html>
    <head>
        <meta name="csrf-token" content="{{ Session::token()  }}" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <title>@yield('title')</title> 
        @include('css')
        @include('js')
    </head>
    <body>
          @yield('content')
    </body>
</html>

