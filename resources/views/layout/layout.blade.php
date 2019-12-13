<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<title>Programmation Web dynamique 3 - Travail pratique 2</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo_style.css')}}">
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
				<h2 class="welcome-title animated fadeInLeft">@yield('fact title')</h2>
                @yield('contenu')
                @yield('contenu-liste')

			</div>
			<div class="home-projects">
				<div class="row">
					<div class="project-home-holder">
						<div class="row">
							<div class="col-md-3 col-sm-3">
								<div class="project-item one">
                                    <img src="img/chat1.jpg" alt="">
								</div>
							</div>
							<div class="col-md-3 col-sm-3">
								<div class="project-item two">
									<img src="img/chat2.jpg" alt="">
								</div>
							</div>
							<div class="col-md-3 col-sm-3">
								<div class="project-item three">
									<img src="img/chat3.jpg" alt="">
								</div>
							</div>
							<div class="col-md-3 col-sm-3">
								<div class="project-item four">
									<img src="img/chat4.jpg" alt="">
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
					@yield('boutons')
				</div>
			</div>
		</div>
	</footer>
</body>
</html>
