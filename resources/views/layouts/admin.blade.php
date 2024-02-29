<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Dashboard</title>
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('assets/css/sb-admin-2.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome/css/all.css') }}">
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
		{{-- <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}"> --}}
		<link href="{{ asset('assets/css/idea.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/css/timeline.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/css/xstyle.css') }}" rel="stylesheet">
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	
		<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
		<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		
		{{-- DatePicker --}}
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">

		{{-- Sweet Alert --}}
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	</head>
	<body id="page-top" class="text-dark">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
		<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
		<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

		<!-- Page Wrapper -->
		<div id="wrapper">

				<!-- Sidebar -->
				<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

						<!-- Sidebar - Brand -->
						<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
								<h1 class="d-flex align-items-center top-nav-link fs-36 fw-700 m-0 text-white cursor-pointer">
									<label class="sidebar-brand-text font-weight-bold m-0 cursor-pointer">IC</label>
									<img id="nav-brand-logo" src="{{ asset('assets/image/icon/landing-page/box.png') }}" class="mx-1 sidebar-brand-icon" alt="" height="36px" style="filter: invert(100)">
									<label class="sidebar-brand-text font-weight-bold m-0 cursor-pointer">NIC</label>
								</h1>			
						</a>

						{{-- <!-- Divider -->
						<hr class="sidebar-divider my-0">

						<!-- Nav Item - Dashboard -->
						<li class="nav-item active">
								<a class="nav-link" href="index.html">
										<i class="fas fa-fw fa-tachometer-alt"></i>
										<span>Dashboard</span></a>
						</li> --}}

						<!-- Divider -->
						<hr class="sidebar-divider">

						<!-- Heading -->
						<div class="sidebar-heading">
								Data
						</div>

						@if (Auth::user()->role == 'super_admin')

							<!-- Nav Item -->
							<li id="nav-idea" class="nav-item">
									<a class="nav-link" href="/admin/idea">
											<i class="fas fa-fw fa-chart-area"></i>
											<span>Ide</span></a>
							</li>

							<!-- Nav Item -->
							<li id="nav-innovation" class="nav-item">
									<a class="nav-link" href="/admin/innovation">
											<i class="fas fa-fw fa-table"></i>
											<span>Inovasi</span></a>
							</li>

							<!-- Nav Item -->
							<li id="nav-repository" class="nav-item">
									<a class="nav-link" href="/admin/repository">
											<i class="fas fa-fw fa-table"></i>
											<span>Pustaka</span></a>
							</li>

							<!-- Divider -->
							<hr class="sidebar-divider d-none d-md-block">

							<!-- Heading -->
							<div class="sidebar-heading">
									User
							</div>

							<!-- Nav Item -->
							<li id="nav-user" class="nav-item">
									<a class="nav-link" href="/admin/user-management">
											<i class="fas fa-fw fa-user"></i>
											<span>Manajemen User</span></a>
							</li>

							<!-- Divider -->
							<hr class="sidebar-divider d-none d-md-block">

							<!-- Heading -->
							<div class="sidebar-heading">
									CMS
							</div>

							<!-- Nav Item -->
							<li id="nav-landing-page" class="nav-item">
									<a class="nav-link" href="/admin/cms/landing-page">
											<i class="fas fa-fw fa-list"></i>
											<span>Landing Page</span></a>
							</li>

							<!-- Divider -->
							<hr class="sidebar-divider d-none d-md-block">
							
						@elseif (Auth::user()->role == 'admin')

							<!-- Nav Item -->
							<li id="nav-idea" class="nav-item">
									<a class="nav-link" href="/admin/idea">
											<i class="fas fa-fw fa-chart-area"></i>
											<span>Ide</span></a>
							</li>

							<!-- Nav Item -->
							<li id="nav-innovation" class="nav-item">
									<a class="nav-link" href="/admin/innovation">
											<i class="fas fa-fw fa-table"></i>
											<span>Inovasi</span></a>
							</li>

							<!-- Nav Item -->
							<li id="nav-repository" class="nav-item">
									<a class="nav-link" href="/admin/repository">
											<i class="fas fa-fw fa-table"></i>
											<span>Pustaka</span></a>
							</li>

							<!-- Divider -->
							<hr class="sidebar-divider d-none d-md-block">

						@else

							<!-- Nav Item -->
							<li id="nav-idea" class="nav-item">
									<a class="nav-link" href="/user/idea">
											<i class="fas fa-fw fa-chart-area"></i>
											<span>Ide</span></a>
							</li>

							<!-- Nav Item -->
							<li id="nav-innovation" class="nav-item">
									<a class="nav-link" href="/user/innovation">
											<i class="fas fa-fw fa-table"></i>
											<span>Inovasi</span></a>
							</li>

							<!-- Divider -->
							<hr class="sidebar-divider d-none d-md-block">
							
						@endif

						<!-- Sidebar Toggler (Sidebar) -->
						<div class="text-center d-none d-md-inline">
								<button class="rounded-circle border-0" id="sidebarToggle"></button>
						</div>

				</ul>
				<!-- End of Sidebar -->

				<!-- Content Wrapper -->
				<div id="content-wrapper" class="d-flex flex-column">

						<!-- Main Content -->
						<div id="content">

								<!-- Topbar -->
								<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="height: 65px">

										<!-- Sidebar Toggle (Topbar) -->
										<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
												<i class="fa fa-bars"></i>
										</button>

										<!-- Topbar Navbar -->
										<ul class="navbar-nav ml-auto no-hover">

												<li class="nav-item dropdown no-arrow mx-1">
														<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<i class="fas fa-bell fa-fw"></i>
																<!-- Counter - Alerts -->
																<span class="badge badge-danger badge-counter">&bull;</span>
														</a>
														<!-- Dropdown - Alerts -->
														<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
																<h6 class="dropdown-header">
																		Notification
																</h6>
																<div id="notifications">

																</div>
														</div>
												</li>

												<!-- Nav Item - User Information -->
												<li class="nav-item dropdown no-arrow">
														<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
																data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
																<img class="img-profile rounded-circle"
																		src="{{ asset('assets/image/tumbnail/default_ava.png') }}">
														</a>
														<!-- Dropdown - User Information -->
														<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
																aria-labelledby="userDropdown">
																<a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal">
																		<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
																		Logout
																</a>
														</div>
												</li>

										</ul>

								</nav>
								<!-- End of Topbar -->

								<!-- Begin Page Content -->
								<div class="container-fluid">

									@yield('content')

								</div>
								<!-- /.container-fluid -->

						</div>
						<!-- End of Main Content -->

						<!-- Footer -->
						<footer class="sticky-footer bg-white">
								<div class="container my-auto">
										<div class="copyright text-center my-auto">
												<span>Copyright &copy; Icon PLN x LOD Agency 2024</span>
										</div>
								</div>
						</footer>
						<!-- End of Footer -->

				</div>
				<!-- End of Content Wrapper -->

		</div>
		<!-- End of Page Wrapper -->

		<!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded" href="#page-top">
				<i class="fas fa-angle-up"></i>
		</a>

		<!-- Logout Modal-->
		<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
										<button class="close" type="button" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">×</span>
										</button>
								</div>
								<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
								<div class="modal-footer">
										<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
										<a class="btn btn-primary" href="/logout">Logout</a>
								</div>
						</div>
				</div>
		</div>

		<script>
			function getUnreadNotifications() {
					$.ajax({
							url: '/get-unread-notifications',
							type: 'GET',
							dataType: 'json',
							success: function (data) {
									// console.log(data)
									// Update notifications in the navbar
									updateNotifications(data.notifications);
							},
							error: function (error) {
									console.error('Error fetching notifications:', error);
							}
					});
			}
	
			function updateNotifications(notifications) {
					$('#notifications').empty();
					notifications.forEach(function (notification) {
							const dateString = notification.created_at;

							// Create a Date object from the string
							const dateObject = new Date(dateString);

							// Extract day, month, and year
							const day = dateObject.getDate();
							const month = dateObject.toLocaleString('en-US', { month: 'long' }); // 'long' gives full month name
							const year = dateObject.getFullYear();
							const hour = dateObject.getHours();
							const minute = dateObject.getMinutes();

							// Format single-digit hours and minutes with leading zeros
							const formattedHour = hour < 10 ? `0${hour}` : hour;
							const formattedMinute = minute < 10 ? `0${minute}` : minute;

							// Combine the components
							const formattedDate = `${formattedHour}:${formattedMinute} - ${day} ${month} ${year}`;
							$('#notifications').append(`
								<div class="dropdown-item d-flex align-items-center">
										<div class="mr-3">
												<div class="icon-circle bg-primary">
														<i class="fas fa-file-alt text-white"></i>
												</div>
										</div>
										<div>
												<div class="small text-gray-500">${formattedDate}</div>
												<span>${notification.message}</span>
										</div>
								</div>
							`);
					});
			}
			getUnreadNotifications()
			setInterval(getUnreadNotifications, 60000);
	</script>

		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

		<!-- Bootstrap core JavaScript-->
		<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

		<!-- Core plugin JavaScript-->
		<script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

		<!-- Custom scripts for all pages-->
		<script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/datatables-demo.js') }}"></script>
		
		<script src="{{ asset('assets/js/timeline.js') }}"></script>
	</body>
</html>