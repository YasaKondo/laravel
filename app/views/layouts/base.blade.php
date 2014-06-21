<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    @section('header')
    <title>Laravel道場</title>
    @show
</head>

<body>
<ul class="nav">
    @section('nav')
    <li><a href='#'>TOP</a></li>
    @show
</ul>
@yield('content')
<footer style="background-color:green;color:white;text-align:center">
    @section('footer')
    <h2><?php echo $corporation;?></h2>
    @show
</footer>
</body>
</html>