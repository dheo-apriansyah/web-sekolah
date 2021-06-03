<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Dashboard - SB Admin</title>
	<link href="{{'assets/css/styles.css'}}" rel="stylesheet" />
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
		@include('admin.layouts.navbar')
		<div id="layoutSidenav">
			@include('admin.layouts.sidenav')				
			<div id="layoutSidenav_content">
					<main>
						<div class="container-fluid">
							<h1 class="mt-4">Dashboard</h1>
							<ol class="breadcrumb mb-4">
									<li class="breadcrumb-item active">Dashboard</li>
							</ol>
							<div class="row">
									<div class="col-xl-3 col-md-6">
											<div class="card bg-primary text-white mb-4">
													<div class="card-body">Primary Card</div>
													<div class="card-footer d-flex align-items-center justify-content-between">
															<a class="small text-white stretched-link" href="#">View Details</a>
															<div class="small text-white"><i class="fas fa-angle-right"></i></div>
													</div>
											</div>
									</div>
									<div class="col-xl-3 col-md-6">
											<div class="card bg-warning text-white mb-4">
													<div class="card-body">Warning Card</div>
													<div class="card-footer d-flex align-items-center justify-content-between">
															<a class="small text-white stretched-link" href="#">View Details</a>
															<div class="small text-white"><i class="fas fa-angle-right"></i></div>
													</div>
											</div>
									</div>
									<div class="col-xl-3 col-md-6">
											<div class="card bg-success text-white mb-4">
													<div class="card-body">Success Card</div>
													<div class="card-footer d-flex align-items-center justify-content-between">
															<a class="small text-white stretched-link" href="#">View Details</a>
															<div class="small text-white"><i class="fas fa-angle-right"></i></div>
													</div>
											</div>
									</div>
									<div class="col-xl-3 col-md-6">
											<div class="card bg-danger text-white mb-4">
													<div class="card-body">Danger Card</div>
													<div class="card-footer d-flex align-items-center justify-content-between">
															<a class="small text-white stretched-link" href="#">View Details</a>
															<div class="small text-white"><i class="fas fa-angle-right"></i></div>
													</div>
											</div>
									</div>
							</div>
							@yield('content') 
						</div>
					</main>
					<footer class="py-4 bg-light mt-auto">
						<div class="container-fluid">
							<div class="d-flex align-items-center justify-content-between small">
								<div class="text-muted">Copyright &copy; Dheo Apriansyah {{ date('Y') }}</div>
								<div>
									<a href="#">www.situs.blogspot.com</a>
									&middot;
									<a href="#">Github DheoAP</a>
								</div>
							</div>
						</div>
					</footer>
			</div>
		</div>

		@include('admin.layouts.scripts')
</body>
</html>
