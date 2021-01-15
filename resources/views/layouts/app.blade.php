<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mapping School</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('img/smk.png') }}" type="image/x-icon">
	
	{{-- JS --}}
	<script src="{{ asset('js/app.js') }}"></script>
			
	{{-- CSS --}}
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	@stack('css')

	<link href="{{ asset('datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    {{-- Fontawesome --}}
	<script src="https://kit.fontawesome.com/f3e03d1e1d.js" crossorigin="anonymous"></script>

	{{-- Font Google --}}
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <style>
			*{
				font-family: 'Poppins', sans-serif;
			}
			::-webkit-scrollbar {
				width: 12px;
				background: transparent ;
			}

			::-webkit-scrollbar-thumb {
				background: rgb(145, 151, 157) ;
				border-radius: 5px;

			}
			body {
				overflow: hidden;
			}
			#wrapper {
				overflow-x: hidden;
			}
			.sidebar {
				min-height: 100vh;
				margin-left: -15rem;
				-webkit-transition: margin .25s ease-out;
				-moz-transition: margin .25s ease-out;
				-o-transition: margin .25s ease-out;
				transition: margin .25s ease-out;
			}
			.sidebar .sidebar-header {
				padding: 0.875rem 1.25rem;
				font-size: 1.2rem;
				/* background-color: #222; */
			}
			.sidebar-header .img-logo {
				width: 35px;
				height: 35px;
			}
			.sidebar .list-group {
				width: 16rem;
			}
			.page-content {
                min-width: 100vw;
			}
			.list-group-item span {
				font-size: 0.9em;
			}
			/* .page-content .content {
				max-height: 100%;
				overflow: auto;
			} */
			#wrapper.toggled .sidebar {
				margin-left: 0;
			}

			@media (min-width: 768px) {
				.sidebar {
					margin-left: 0;
				}

				.page-content {
					min-width: 0;
					width: 100%;
				}

				#wrapper.toggled .sidebar {
					margin-left: -15rem;
				}
			}
    </style>

</head>
<body>
    
    <div class="d-flex" id="wrapper">

      		<!-- Sidebar -->
			<div class="sidebar bg-dark border-right">
				<div class="sidebar-header d-flex">
					<img src="{{ asset('img/smk.png') }}" class="img-logo mr-3" alt="img-logo">
					<span class="mt-1 text-light">Mapping School</span>
				</div>
				<div class="list-group mt-2">
					<a href="/" class="list-group-item list-group-item-action bg-dark text-light {{ (request()->is('/')) ? 'active' : '' }}">
						<i class="fas fa-map-marker-alt fa-md text-white mt-1 mr-3 ml-3"></i>
						<span>Maps</span>
					</a>
					<a href="{{ route('ruangan.index') }}" class="list-group-item list-group-item-action bg-dark text-light {{ (request()->is('ruangan')) ? 'active' : '' }}">
						<i class="fas fa-chalkboard-teacher fa-md text-white mt-1 mr-3 ml-2"></i>
						<span>Ruangan</span>
					</a>
					<a href="{{ route('sarpras.index') }}" class="list-group-item list-group-item-action bg-dark text-light {{ (request()->is('sarpras')) ? 'active' : '' }}">
						<i class="fas fa-tools fa-md text-white mt-1 mr-4 ml-2"></i>
						<span>Sarpras</span>
					</a>
				</div>
			</div>
			<!-- Sidebar End -->

			<!-- Page Content -->
			<div class="page-content">

				<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
					<button class="btn btn-light" id="btn-toggle">
						<i class="fas fa-bars fa-lg text-dark mt-2"></i>	
                    </button>
                    <h4 class="ml-2 mt-2">{{ $title }}</h4>
				</nav>

				<div class="container-fluid content">
                    @yield('content')
				</div>
				
			</div>
			<!-- Page Content End -->

	</div>		
	
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

	<script src="{{ asset('datatables/jquery.dataTables.min.js') }}"></script>
  	<script src="{{ asset('datatables/dataTables.bootstrap4.min.js') }}"></script>

	<script>
		$("#btn-toggle").click(function(e) {
			e.preventDefault();
			$("#wrapper").toggleClass("toggled");
		});
	</script>
		
	@stack('js')			
    
</body>
</html>