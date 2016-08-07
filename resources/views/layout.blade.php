<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>
		@yield('header-section')
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ elixir('css/app.css') }}">
        
</head>
<body>
	<div class="container">
		
	@yield('content-variable')
	@yield('footer')
	</div>
</body>
</html>