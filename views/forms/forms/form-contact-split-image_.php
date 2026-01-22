<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Contact Form Split Image</title>
	<!-- Favicon-->
	<link href="assets/img/favicon.ico" type="image/x-icon" rel="icon">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" rel="stylesheet" crossorigin="anonymous">
	<link href="assets/css/contact-form-split-image.min.css" rel="stylesheet">
</head>
<body>

	<!-- Bootstrap 5 Contact Form Snippet -->
	<div class="container-fluid px-5 my-5">
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<div class="card border-0 rounded-3 shadow-lg overflow-hidden">
					<div class="card-body p-0">
						<div class="row g-0">
							<div class="col-sm-6 d-none d-sm-block bg-image"></div>
							<div class="col-sm-6 p-4">
								<div class="text-center">
									<div class="h3 fw-light">Contact Form</div>
									<p class="mb-4 text-muted">Split layout contact form</p>
								</div>

						<!-- * * * * * * * * * * * * * *
						// * * SB Forms Contact Form * *
						// * * * * * * * * * * * * * * *

						// This form is pre-integrated with SB Forms.
						// To make this form functional, sign up at
						// https://startbootstrap.com/solution/contact-forms
						// to get an API token!
						-->

								<form id="contactForm" data-sb-form-api-token="API_TOKEN">

									<!-- Name Input -->
									<div class="form-floating mb-3">
										<input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required>
										<label for="name">Name</label>
										<div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
									</div>

									<!-- Email Input -->
									<div class="form-floating mb-3">
										<input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email>
										<label for="emailAddress">Email Address</label>
										<div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
										<div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
									</div>

									<!-- Message Input -->
									<div class="form-floating mb-3">
										<textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
										<label for="message">Message</label>
										<div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
									</div>

									<!-- Submit success message -->
									<div class="d-none" id="submitSuccessMessage">
										<div class="text-center mb-3">
											<div class="fw-bolder">Form submission successful!</div>
											<p>To activate this form, sign up at</p>
											<a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
										</div>
									</div>

									<!-- Submit error message -->
									<div class="d-none" id="submitErrorMessage">
										<div class="text-center text-danger mb-3">Error sending message!</div>
									</div>

									<!-- Submit button -->
									<div class="d-grid">
										<button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
									</div>
								</form>
								<!-- End of contact form -->

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- CDN Link to SB Forms Scripts -->
	<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

	<!-- Bootstrap core JS-->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
