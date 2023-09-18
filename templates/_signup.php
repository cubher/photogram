<?
$signup=false;
if(isset($_POST['username']) and isset($_POST['password']) and isset($_POST['phone']) and isset($_POST['email'])){
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$email= $_POST['email'];
$error = User::signup($username,$password,$email,$phone);
$signup=true;
}

if($signup){
    if(!$error){?>
<main class="container">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>signup success</h1>
    <p class="lead">enjoy yourself on this page.</p>
  </div>
</main>

<?}
else{ ?>
<main class="container">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>signup failed</h1>
    <p class="lead">due to <?=$error?></p>
  </div>
</main>
<?}}
else{?>
<body class="text-center">
<div class="album py-5 bg-light">
	<main class="form-signin w-100 m-auto">
		<form method="post" action="signup.php">
			<img class="mb-4" src="/app/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
			<h1 class="h3 mb-3 fw-normal">Please sign up</h1>

			<div class="form-floating">
				<input name="username" type="text" class="form-control" id="floatingInput" placeholder="username">
				<label for="floatingInput">Username</label>
			</div>
			<div class="form-floating">
				<input name= "password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
				<label for="floatingPassword">Password</label>
			</div>
            <div class="form-floating">
				<input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
				<label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
				<input name="phone" type="text" class="form-control" id="floatingInput" placeholder="9876543210">
				<label for="floatingInput">phone</label>
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
<?}?>