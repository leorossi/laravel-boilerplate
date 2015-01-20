<!DOCTYPE html>
<html>
<head>
  {{ HTML::script('bower_components/jquery/dist/jquery.min.js') }}
  {{ HTML::script('bower_components/bootstrap/dist/js/bootstrap.min.js') }}
  {{ HTML::style('bower_components/bootstrap/dist/css/bootstrap.min.css')}}
  {{ HTML::style('bower_components/bootstrap/dist/css/bootstrap-theme.min.css')}}
  <title>Users</title>
</head>
<body>
  <div class="container">
    @yield('content')
  </div>  
</body>
