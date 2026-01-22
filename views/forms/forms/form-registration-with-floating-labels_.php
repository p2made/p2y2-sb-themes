<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Registration Page With Floating Labels</title>
	<!-- Favicon-->
	<link href="assets/img/favicon.ico" type="image/x-icon" rel="icon">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" rel="stylesheet" crossorigin="anonymous">
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
	<link href="assets/css/registration-page-with-floating-labels.min.css" rel="stylesheet">
</head>
<body>
	<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-xl-9 mx-auto">
				<div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
					<div class="card-img-left d-none d-md-flex">
						<!-- Background image for card set in CSS! -->
					</div>
					<div class="card-body p-4 p-sm-5">
						<h5 class="card-title text-center mb-5 fw-light fs-5">Register</h5>
						<form>

							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" required autofocus>
								<label for="floatingInputUsername">Username</label>
							</div>

							<div class="form-floating mb-3">
								<input type="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
								<label for="floatingInputEmail">Email address</label>
							</div>

							<hr>

							<div class="form-floating mb-3">
								<input type="password" class="form-control" id="floatingPassword" placeholder="Password">
								<label for="floatingPassword">Password</label>
							</div>

							<div class="form-floating mb-3">
								<input type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password">
								<label for="floatingPasswordConfirm">Confirm Password</label>
							</div>

							<div class="d-grid mb-2">
								<button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
							</div>

							<a class="d-block text-center mt-2 small" href="#">Have an account? Sign In</a>

							<hr class="my-4">

							<div class="d-grid mb-2">
								<button class="btn btn-lg btn-google btn-login fw-bold text-uppercase" type="submit">
									<i class="fab fa-google me-2"></i> Sign up with Google
								</button>
							</div>

							<div class="d-grid">
								<button class="btn btn-lg btn-facebook btn-login fw-bold text-uppercase" type="submit">
									<i class="fab fa-facebook-f me-2"></i> Sign up with Facebook
								</button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JS-->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
