<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('head.title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/styles/default.min.css' rel='stylesheet'/>
  @yield('css')
 
  <style>
  
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

  </style>
</head>
<body>

@include('partials.navbar')
@yield('body.content')
@include('partials.footer')
 @yield('javascript')
</body>
</html>
