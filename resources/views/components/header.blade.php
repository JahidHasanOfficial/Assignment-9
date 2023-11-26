<header>

	<nav class="navbar navbar-expand-lg bg-info fixed-top header-padding">
		<div class="container-fluid">
		  <a class="navbar-brand fs-3 " href="/">Portfolio</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarScroll">
			<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll fs-4" style="--bs-scroll-height: 100px;">
				<li class="nav-item active padding">
					<a class="nav-link" href="{{ route('home') }}">Home</a>
				</li>
				<li class="nav-item active padding">
					<a class="nav-link" href="{{ route('about') }}">About Me</a>
				</li>
				<li class="nav-item padding">
					<a class="nav-link" href="{{ route('project') }}">Projects</a>
				</li>
				<li class="nav-item padding">
					<a class="nav-link" href="{{ route('skill') }}">Skills</a>
				</li>
				<li class="nav-item padding">
					<a class="nav-link" href="{{ route('contact') }}">Contact</a>
				</li>
			</ul>
			<form class="d-flex" role="search">
			  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
			  <button class="btn btn-outline-success" type="submit">Search</button>
			</form>
		  </div>
		</div>
	  </nav>



			{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
				<div class="container">
					<a class="navbar-brand" href="{{ route('home') }}">Portfolio</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="{{ route('home') }}">Home</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="{{ route('about') }}">About Me</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('project') }}">Projects</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('skill') }}">Skills</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('contact') }}">Contact</a>
							</li>
						</ul>
					</div>
				</div>
			</nav> --}}
	</header>


	
