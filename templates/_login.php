<?
$username = $_POST['email'];
$password = $_POST['password'];
$result = validate_credentials($username,$password);

if($result){
?>
<main class="container">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>login success</h1>
    <p class="lead">enjoy yourself on this site</p>
  </div>
</main>
<?
}
else{
?>
<body class="text-center">
<div class="album py-5 bg-light">
	<main class="form-signin w-100 m-auto">
		<form method="post" action="login.php">
			<img class="mb-4" src="/app/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
			<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

			<div class="form-floating">
				<input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
				<label for="floatingInput">Email address</label>
			</div>
			<div class="form-floating">
				<input name= "password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
				<label for="floatingPassword">Password</label>
			</div>

			<div class="checkbox mb-3">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div>
			<button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
			<p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
		</form>
	</main>
</div>

<?php
}
?>
</body>