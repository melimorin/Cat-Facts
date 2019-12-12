<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<title>Programmation Web dynamique 3 - Travail pratique 2</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo_style.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/styles.css)}}"> --}}
</head>
<body>
	<header class="site-header container animated fadeInDown">
		<div class="header-wrapper">
			<div class="row">
				<div class="col-md-4">
					<div class="site-branding">
						<a href="#"><h1>Cat facts</h1></a>
					</div>
				</div>
				<a href="#" class="toggle-nav hidden-md hidden-lg">
					<i class="fa fa-bars"></i>
				</a>
			</div>
		</div>
	</header>


	<div id="menu-container">
		<div id="menu-1" class="homepage home-section container">
			<div class="home-intro text-center">
				<h2 class="welcome-title animated fadeInLeft">Fact #1</h2>
                @yield('contenu')
                <p>On average, cats spend 2/3 of every day sleeping. That means a nine-year-old cat has been awake for only three years of its life.</p>
			</div>
			<div class="home-projects">

                @yield('contenu')

				<div class="row">
					<div class="project-home-holder">
						<div class="row">
							<div class="col-md-3 col-sm-3">
								<div class="project-item one">
									<img src="img/img.png" alt="">
								</div>
							</div>
							<div class="col-md-3 col-sm-3">
								<div class="project-item two">
									<img src="img/img.png" alt="">
								</div>
							</div>
							<div class="col-md-3 col-sm-3">
								<div class="project-item three">
									<img src="img/img.png" alt="">
								</div>
							</div>
							<div class="col-md-3 col-sm-3">
								<div class="project-item four">
									<img src="img/img.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<footer class="site-footer container text-center">
		<div class="row">
			<div class="col-md-12">
				<div class="main-footer">
					<ul class="social">
						<li><a href="#">Liste de faits</a></li>
						<li><a href="#">Ajouter un fait</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>
