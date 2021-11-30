<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device, initial-scale=1.0">
	<title>Cursos de Programacion web</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<header  class="shadow-lg">
		<div class="bg-blue-900 py-1">
			<nav class="bg-blue-800 py-2">
				<a href="{{route('home')}}" class="">
						<img src="{{asset('images/isotipo-platzi.png')}}" class="h-8 mx-auto">
				</a>
			</nav>
		</div>
	</header><!-- /header -->
	<main class=" py-10">
		<div class="container mx-auto px-4">
			@yield('content')
		</div>
	</main>
	<footer class="text-center py-4">
		@auth
			<a href="{{url('dashboard')}}" class="text-sm text-gray-700 underline" >Dashboard</a>
		@else
			<a href="{{url('login')}}" class="text-sm text-gray-700 underline" >Login</a>
			<a href="{{url('register')}}" class="text-sm text-gray-700 underline ml-4" >Register</a>
		@endif
		<script src="{{asset('js/app.js')}}"></script>
	</footer>
</body>
</html>