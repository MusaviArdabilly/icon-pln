<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Icon PLN</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/idea.css') }}" rel="stylesheet" />
	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
	<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
	<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

	{{-- v1 --}}
	{{-- <nav id="navbar" class="navbar navbar-expand-lg sticky-top var-bg-primary">
		<div class="container">
			<a class="navbar-brand" href="/">
				<img src="{{ asset('assets/image/logo/pln-logo.png') }}" alt="Logo" height="28px">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
				aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link fw-600 text-light active" aria-current="page" href="/">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link fw-600 text-light" href="/idea">Ide</a>
					</li>
					<li class="nav-item">
						<a class="nav-link fw-600 text-light" href="/innovation">Inovasi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link fw-600 text-light" href="/repository">Pustaka</a>
					</li>
					<div class="vr text-light"></div>
					<li class="nav-item">
						<a class="nav-link fw-600 text-light" href="/login">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav> --}}
	{{-- v2  --}}
	<nav id="navbar" class="navbar navbar-expand-lg sticky-top bg-light shadow">
		<div class="container">
			<a class="navbar-brand" href="/">
        <h1 class="d-flex align-items-center top-nav-link fs-16 fw-700 m-0">IC<img id="nav-brand-logo" src="{{ asset('assets/image/icon/landing-page/box.png') }}" alt="" height="16px" class="mx-1px">NIC</h1>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
				aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item me-2">
						<a class="nav-link top-nav-link fw-600 text-dark active" aria-current="page" href="/">Home</a>
					</li>
					<li class="nav-item me-2">
						<a class="nav-link top-nav-link fw-600 text-dark" href="/idea">Ide</a>
					</li>
					<li class="nav-item me-2">
						<a class="nav-link top-nav-link fw-600 text-dark" href="/innovation">Inovasi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link top-nav-link fw-600 text-dark" href="/repository">Pustaka</a>
					</li>
					<div class="d-none top-nav-link d-md-block vr text-dark mx-2"></div>
					<li class="nav-item">
						<a class="nav-link top-nav-link fw-600 text-dark" href="/login">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	@yield('content')
	 {{-- v1  --}}
	{{-- <footer class="var-bg-primary">
		<div class="container py-3">
			<img src="{{ asset('assets/image/logo/pln-logo.png') }}" alt="" height="28px" class="mb-3">
			<ul class="navbar-nav d-flex flex-row">
				<li class="nav-item">
					<a class="nav-link fw-600 text-light me-3" aria-current="page" href="/">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-600 text-light me-3" href="/idea">Ide</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-600 text-light me-3" href="/innovation">Inovasi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-600 text-light me-3" href="/repository">Pustaka</a>
				</li>
				<div class="vr text-light me-3"></div>
				<li class="nav-item">
					<a class="nav-link fw-600 text-light me-3" href="/login">Login</a>
				</li>
			</ul>
			<hr class="text-light">
			<div class="text-center text-light fw-400">
				© 2024 Icon PLN. All rights reserved.
			</div>
		</div>
	</footer> --}}
	{{-- v2 --}}
	<footer id="footer" class="bg-light">
		<div class="container py-3">
			<h1 class="d-flex align-items-center fs-16 fw-700 my-2">IC<img src="{{ asset('assets/image/icon/landing-page/box.png') }}" alt="" height="16px" class="mx-1px">NIC</h1>
			<ul class="navbar-nav d-flex flex-row">
				<li class="nav-item">
					<a class="nav-link fw-600 text-dark me-3 py-0" aria-current="page" href="/">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-600 text-dark me-3 py-0" href="/idea">Ide</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-600 text-dark me-3 py-0" href="/innovation">Inovasi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-600 text-dark me-3 py-0" href="/repository">Pustaka</a>
				</li>
			</ul>
			<hr class="text-dark">
			<div class="text-center text-dark fw-400 fs-12">
				© 2024 Icon PLN. All rights reserved.
			</div>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
	<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
	<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.js"
		integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>