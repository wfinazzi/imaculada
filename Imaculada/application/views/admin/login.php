<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

		<title>Signin Template for Bootstrap</title>

		<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


		<!-- Custom styles for this template -->
		<link href="<?=base_url('css/signin.css')?>" rel="stylesheet">
	</head>

	<body class="text-center">
		<form class="form-signin" method="post" action="<?=base_url('Sou/login');?>">
			<img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
			<h1 class="h3 mb-3 font-weight-normal">Login</h1>
			<label for="inputEmail" class="sr-only">Email</label>
			<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
			<label for="inputPassword" class="sr-only">Senha</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>      
			<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
			<p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
		</form>
	</body>
</html>