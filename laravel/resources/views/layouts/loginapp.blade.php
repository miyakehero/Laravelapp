<html>
<head>
  <style>
    h1 { font-size:25pt; text-align:left; color:#000; margin: 0px 0px -10px 0px; }
    h2 { font-size:10pt; text-align:left; color:#000;}
    h3 { font-size:15pt; text-align:left; color:#000;}
    a {text-decoration: none}
  </style>
</head>
<body>
  <h1> Laravel </h1>
  <h2>
    <a href={{ route('login') }}> login <a>
    <a href={{ route('register') }}> register <a>
    <hr>
  </h2>
  <h3> @yield('title') </h3>
  <h2> @yield('content') </h2>
</body>
</html>
