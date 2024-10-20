<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login - Flat Able</title>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="Login to the admin dashboard" />
	<meta name="keywords" content="admin, login, dashboard">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<!-- Vendor CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<!-- [ auth-signin ] start -->
	<div class="auth-wrapper">
		<div class="auth-content text-center">
			<img src="assets/images/logo.png" alt="Logo" class="img-fluid mb-4">
			<div class="card borderless">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="card-body">
							<h4 class="mb-3 f-w-400">Sign in</h4>
							<hr>
							<form action="/login" method="POST">
								@csrf
								<div class="form-group mb-3">
									<input type="email" class="form-control" name="email" placeholder="Email address" required>
								</div>
								<div class="form-group mb-4">
									<input type="password" class="form-control" name="password" placeholder="Password" required>
								</div>
								<div class="custom-control custom-checkbox text-left mb-4 mt-2">
									<input type="checkbox" class="custom-control-input" id="customCheck1">
									<label class="custom-control-label" for="customCheck1">Save credentials.</label>
								</div>
								<button type="submit" class="btn btn-block btn-primary mb-4">Sign in</button>
							</form>
							<hr>
							<p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
							<p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- [ auth-signin ] end -->

	<!-- Required JS -->
	<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/js/plugins/bootstrap.min.js"></script>
	<script src="assets/js/pcoded.min.js"></script>
</body>

</html>
