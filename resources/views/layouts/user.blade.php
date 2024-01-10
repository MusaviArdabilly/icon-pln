<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Icon PLN</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="assets/css/idea.css" rel="stylesheet" />
	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-xxl">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
				aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Features</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pricing</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
							aria-expanded="false">
							Dropdown link
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">Action</a></li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
	<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
	<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.js"
		integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	@yield('content')

</body>
<div class=" mt-5">
	<!-- Footer -->
	<footer class="text-center text-lg-start text-dark pt-2" style="background-color: #ECEFF1">
		<!-- Section: Links  -->
		<section class="">
			<div class="container text-center text-md-start mt-5">
				<!-- Grid row -->
				<div class="row mt-3">
					<!-- Grid column -->
					<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
						<!-- Content -->
						<h6 class="text-uppercase fw-bold">Company name</h6>
						<hr class="mb-4 mt-0 d-inline-block mx-auto"
							style="width: 60px; background-color: #14A2BA; height: 2px" />
						<p>
							Here you can use rows and columns to organize your footer
							content. Lorem ipsum dolor sit amet, consectetur adipisicing
							elit.
						</p>
					</div>
					<!-- Grid column -->

					<!-- Grid column -->
					<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
						<!-- Links -->
						<h6 class="text-uppercase fw-bold">Products</h6>
						<hr class="mb-4 mt-0 d-inline-block mx-auto"
							style="width: 60px; background-color: #14A2BA; height: 2px" />
						<p>
							<a href="#!" class="text-dark">MDBootstrap</a>
						</p>
						<p>
							<a href="#!" class="text-dark">MDWordPress</a>
						</p>
						<p>
							<a href="#!" class="text-dark">BrandFlow</a>
						</p>
						<p>
							<a href="#!" class="text-dark">Bootstrap Angular</a>
						</p>
					</div>
					<!-- Grid column -->

					<!-- Grid column -->
					<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
						<!-- Links -->
						<h6 class="text-uppercase fw-bold">Useful links</h6>
						<hr class="mb-4 mt-0 d-inline-block mx-auto"
							style="width: 60px; background-color: #14A2BA; height: 2px" />
						<p>
							<a href="#!" class="text-dark">Your Account</a>
						</p>
						<p>
							<a href="#!" class="text-dark">Become an Affiliate</a>
						</p>
						<p>
							<a href="#!" class="text-dark">Shipping Rates</a>
						</p>
						<p>
							<a href="#!" class="text-dark">Help</a>
						</p>
					</div>
					<!-- Grid column -->

					<!-- Grid column -->
					<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
						<!-- Links -->
						<h6 class="text-uppercase fw-bold">Contact</h6>
						<hr class="mb-4 mt-0 d-inline-block mx-auto"
							style="width: 60px; background-color: #14A2BA; height: 2px" />
						<p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
						<p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
						<p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
						<p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
					</div>
					<!-- Grid column -->
				</div>
				<!-- Grid row -->
			</div>
		</section>
		<!-- Section: Links  -->

		<!-- Section: Social media -->
		<section class="d-flex justify-content-center p-4 text-black">
			<!-- Right -->
			<div>
				<a href="" class="text-black me-4">
					<i class="bi bi-facebook"></i>
				</a>
				<a href="" class="text-black me-4">
					<i class="bi bi-twitter"></i>
				</a>
				<a href="" class="text-black me-4">
					<i class="bi bi-google"></i>
				</a>
				<a href="" class="text-black me-4">
					<i class="bi bi-instagram"></i>
				</a>
				<a href="" class="text-black me-4">
					<i class="bi bi-linkedin"></i>
				</a>
				<a href="" class="text-black me-4">
					<i class="bi bi-github"></i>
				</a>
			</div>
			<!-- Right -->
		</section>
		<!-- Section: Social media -->

		<!-- Copyright -->
		<div class="text-center p-3 text-white" style="background-color: #125D72">
			© 2022 IdeaBox. All rights reserved.
		</div>
		<!-- Copyright -->
	</footer>
	<!-- Footer -->
</div>

</html>