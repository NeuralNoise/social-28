<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <script src="{{ URL::to('src/js/jquery-2.2.0.js') }}"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/main.css') }}">
        <script type="text/javascript" src="{{ URL::to('src/js/app.js') }}"></script>
    </head>
    <body>
    	@include('includes.header')
        <div class="container">
        	@yield('content')
        </div>

       
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
