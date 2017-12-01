<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Allez Ciné !</title>

		<!-- BOOTSTRAP -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- JQuery -->
		<script
			  src="http://code.jquery.com/jquery-1.12.4.min.js"
			  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
			  crossorigin="anonymous"></script>

		<!-- My Slideshow -->
		
	    <!-- jQuery Slidey 0.0.1 -->
	    <link href="Slidey/dist/jquery.slidey.css" rel="stylesheet">
	    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
	    <script src="Slidey/jquery.slidey.js"></script>
	    <script src="Slidey/dist/jquery.dotdotdot.min.js"></script>

		<!-- My CSS -->
		<link rel="stylesheet" type="text/css" href="css/style.css">	

	</head>
	<body>

		<div class="container-fluid">

			<section id="logo">

				<div class="row">
					
				</div>
					
			</section>

			<section id="navigation-bar">

				<div id="navbar">    
				  	<nav class="navbar navbar-default navbar-static-top" role="navigation">
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
			                    <span class="sr-only">Toggle navigation</span>
			                    <span class="icon-bar"></span>
			                    <span class="icon-bar"></span>
			                    <span class="icon-bar"></span>
			                </button>
			            </div>
			            
			            <div class="collapse navbar-collapse" id="navbar-collapse-1">

			                <ul class="nav navbar-nav text-center">
								
			                    <li class="empty-lg"><span></span></li>
								
			                    <li><a href="#">HOME</a></li>

			                    <li class="dropdown">
			                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Films <b class="caret"></b></a> 
			                      
			                        <ul class="dropdown-menu">
			                            <li><a href="#">Action</a></li>
			                            <li><a href="#">Adventure</a></li>
			                            <li><a href="#">Drama</a></li>                                   
			                        </ul>

			                    </li>

			                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Séries<b class="caret"></b></a>

			                        <ul class="dropdown-menu">
			                            <li><a href="#">Action</a></li>
			                            <li><a href="#">Adventure</a></li>
			                            <li><a href="#">Drama</a></li>	                                                           
			                        </ul>

			                    </li>

			                    <li class="empty"></li>
			                    <li class="empty"></li>
			                    <li class="empty"></li>
			                    <li class="empty"></li>

			                    <li class="empty-lg"><span></span></li>


			                </ul>

			            </div><!-- /.navbar-collapse -->
			        </nav>
				</div>

			</section>

			<header>
				
				<div id="slidey" style="display:none;">
					
					<ul>
						<li>
							<img src="img/drive-movie-6.jpg">
							<p class="title">Drive</p>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</li>
						<li>
							<img src="img/guardians-of-the-galaxy.jpg">
							<p class="title">Guardians Of The Galaxy</p>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</li>
						<li>
							<img src="img/interstellar.jpg">
							<p class="title">Interstellar</p>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</li>
						<li>
							<img src="img/mad-max-fury-road.jpg">
							<p class="title">Mad Max Fury Road</p>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</li>
						<li>
							<img src="img/the-walking-dead.jpg">
							<p class="title">The Walking Dead</p>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</li>
					</ul>

				</div>

			</header>

			<aside id="mySidenav" class="sidenav">

				<a href="#" id="about">Facebook</a>
				<a href="#" id="blog">Twitter</a>
				<a href="#" id="projects">Instagram</a>
				<a href="#" id="contact">Contact</a>

			</aside>
		
				
			<main class="container">
				
				<section>

					<div id="films">

						<div id="screen" class="modal fade">
							<div class="modal-dialog">
								
								<div class="modal-content">
									
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="text-center"></h4>
									</div>
									<div class="modal-body embed-responsive embed-responsive-16by9">
										<!-- Here comes the iframe-->
									</div>
									
								</div>

							</div>
						</div>

					</div>
					
				</section>

				<section id="features-movies">

					<div class="movies-container">

						<h4>FEATURED MOVIES</h4>

						<div class="movies">

							<div class="btn-group">
							 	<button type="button" class="btn btn-default">All</button>
							  	<button type="button" class="btn btn-default">Action</button>
							  	<button type="button" class="btn btn-default">Policier</button>
							  	<button type="button" class="btn btn-default">Hentaï Tentacles</button>

							</div>

							<br>
							
							<div class="twelves-movies">

								<div class="panel panel-default action">

									<div class="panel-body">
										<img class="img-responsive" src="img/oss-117.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Caire Nid d'Espions</h4>
										<p>2006</p>
									</div>
								
								</div>
								<div class="panel panel-default action">

									<div class="panel-body">
										<img class="img-responsive" src="img/oss-117.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Caire Nid d'Espions</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default action">

									<div class="panel-body">
										<img class="img-responsive" src="img/oss-117.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Caire Nid d'Espions</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default action">

									<div class="panel-body">
										<img class="img-responsive" src="img/oss-117.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Caire Nid d'Espions</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default action">

									<div class="panel-body">
										<img class="img-responsive" src="img/oss-117.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Caire Nid d'Espions</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default action">

									<div class="panel-body">
										<img class="img-responsive" src="img/oss-117.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Caire Nid d'Espions</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default action">

									<div class="panel-body">
										<img class="img-responsive" src="img/oss-117.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Caire Nid d'Espions</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default policier">

									<div class="panel-body">
										<img class="img-responsive" src="img/samurai-cop-2.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Samurai Cop 2</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default policier">

									<div class="panel-body">
										<img class="img-responsive" src="img/samurai-cop-2.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Samurai Cop 2</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default policier">

									<div class="panel-body">
										<img class="img-responsive" src="img/samurai-cop-2.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Samurai Cop 2</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default policier">

									<div class="panel-body">
										<img class="img-responsive" src="img/samurai-cop-2.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Samurai Cop 2</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default policier">

									<div class="panel-body">
										<img class="img-responsive" src="img/samurai-cop-2.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Samurai Cop 2</h4>
										<p>2006</p>
									</div>
									
								</div>
								
							</div>

							<div id="more-featured-movies">

								<div class="panel panel-default policier">

									<div class="panel-body">
										<img class="img-responsive" src="img/samurai-cop-2.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Samurai Cop 2</h4>
										<p>2006</p>
									</div>
								
								</div>
								<div class="panel panel-default policier">

									<div class="panel-body">
										<img class="img-responsive" src="img/samurai-cop-2.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Samurai Cop 2</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default hentai-tentacles">

									<div class="panel-body">
										<img class="img-responsive" src="img/drawn-tentacle-squid.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Squid no Lovo</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default hentai-tentacles">

									<div class="panel-body">
										<img class="img-responsive" src="img/drawn-tentacle-squid.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Squid no Lovo</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default hentai-tentacles">

									<div class="panel-body">
										<img class="img-responsive" src="img/drawn-tentacle-squid.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Squid no Lovo</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default hentai-tentacles">

									<div class="panel-body">
										<img class="img-responsive" src="img/drawn-tentacle-squid.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Squid no Lovo</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default hentai-tentacles">

									<div class="panel-body">
										<img class="img-responsive" src="img/drawn-tentacle-squid.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Squid no Lovo</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default hentai-tentacles">

									<div class="panel-body">
										<img class="img-responsive" src="img/drawn-tentacle-squid.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Squid no Lovo</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default hentai-tentacles">

									<div class="panel-body">
										<img class="img-responsive" src="img/drawn-tentacle-squid.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Squid no Lovo</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default action">

									<div class="panel-body">
										<img class="img-responsive" src="img/oss-117.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Caire Nid d'Espions</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default action">

									<div class="panel-body">
										<img class="img-responsive" src="img/oss-117.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Caire Nid d'Espions</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default action">

									<div class="panel-body">
										<img class="img-responsive" src="img/oss-117.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Caire Nid d'Espions</h4>
										<p>2006</p>
									</div>
									
								</div>
								
							</div>

							<div class="toggle-movies text-center">
								<button class="btn btn-default btn-lg" id="btn-featured-plus">PLUS DE FILMS</button>
							</div>
							
						</div>
						
					</div>
					
				</section>

				<section id="features-series">

					<div class="movies-container">

						<h4>FEATURED SERIES TV</h4>

						<div class="movies">

							<div class="btn-group">
							 	<button type="button" class="btn btn-default">All</button>
							  	<button type="button" class="btn btn-default">Action</button>
							  	<button type="button" class="btn btn-default">Policier</button>
							  	<button type="button" class="btn btn-default">Hentaï Tentacles</button>
							</div>

							<br>
							
							<div class="twelves-movies">

								<div class="panel panel-default action">

									<div class="panel-body">
										<img class="img-responsive" src="img/blacklist.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Blacklist</h4>
										<p>2006</p>
									</div>
								
								</div>
								<div class="panel panel-default action">

									<div class="panel-body">
										<img class="img-responsive" src="img/blacklist.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Blacklist</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default action">

									<div class="panel-body">
										<img class="img-responsive" src="img/blacklist.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Blacklist</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default action">

									<div class="panel-body">
										<img class="img-responsive" src="img/blacklist.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Blacklist</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default action">

									<div class="panel-body">
										<img class="img-responsive" src="img/blacklist.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Blacklist</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default action">

									<div class="panel-body">
										<img class="img-responsive" src="img/blacklist.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Blacklist</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default policier">

									<div class="panel-body">
										<img class="img-responsive" src="img/sherlock.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Sherlock</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default policier">

									<div class="panel-body">
										<img class="img-responsive" src="img/sherlock.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Sherlock</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default policier">

									<div class="panel-body">
										<img class="img-responsive" src="img/sherlock.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Sherlock</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default policier">

									<div class="panel-body">
										<img class="img-responsive" src="img/sherlock.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Sherlock</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default policier">

									<div class="panel-body">
										<img class="img-responsive" src="img/sherlock.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Sherlock</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default policier">

									<div class="panel-body">
										<img class="img-responsive" src="img/sherlock.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Sherlock</h4>
										<p>2006</p>
									</div>
									
								</div>
								
							</div>

							<div id="more-featured-series">

								<div class="panel panel-default hentai-tentacles">

									<div class="panel-body">
										<img class="img-responsive" src="img/error-404.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">You Made The Pope Sad</h4>
										<p>2006</p>
									</div>
								
								</div>
								<div class="panel panel-default hentai-tentacles">

									<div class="panel-body">
										<img class="img-responsive" src="img/error-404.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">You Made The Pope Sad</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default hentai-tentacles">

									<div class="panel-body">
										<img class="img-responsive" src="img/error-404.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">You Made The Pope Sad</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default hentai-tentacles">

									<div class="panel-body">
										<img class="img-responsive" src="img/error-404.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">You Made The Pope Sad</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default hentai-tentacles">

									<div class="panel-body">
										<img class="img-responsive" src="img/error-404.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">You Made The Pope Sad</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default hentai-tentacles">

									<div class="panel-body">
										<img class="img-responsive" src="img/error-404.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">You Made The Pope Sad</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default policier">

									<div class="panel-body">
										<img class="img-responsive" src="img/sherlock.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Sherlock</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default policier">

									<div class="panel-body">
										<img class="img-responsive" src="img/sherlock.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Sherlock</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default policier">

									<div class="panel-body">
										<img class="img-responsive" src="img/sherlock.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Sherlock</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default policier">

									<div class="panel-body">
										<img class="img-responsive" src="img/sherlock.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Sherlock</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default policier">

									<div class="panel-body">
										<img class="img-responsive" src="img/sherlock.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Sherlock</h4>
										<p>2006</p>
									</div>
									
								</div>
								<div class="panel panel-default policier">

									<div class="panel-body">
										<img class="img-responsive" src="img/sherlock.jpg">
									</div>
									<div class="panel-footer">
										<h4 class="text-center">Sherlock</h4>
										<p>2006</p>
									</div>
									
								</div>
								
							</div>

							<div class="toggle-movies text-center">
								<button class="btn btn-default btn-lg" id="btn-series-plus">PLUS DE SERIES</button>
							</div>
							
						</div>
						
					</div>
					
				</section>

				<section id="shop-movies">

					<div class="movies-container">

						<h4>SHOP MOVIES</h4>
						
						<div class="movies">

							<div class="row">

								<div id="shop-trailer" class="col-sm-12 col-md-7 embed-responsive embed-responsive-16by9">
								</div>

								<div id="shop-descriptions" class="col-sm-12 col-md-5">
									
									<h4 class="text-center"></h4>

									<table class="myTable">
										
										<tr>
											<td>
												<p>Résumé</p>
											</td>
											<td>
												<p id="resume"></p>
											</td>
										</tr>

										<tr>
											<td>
												<p>Date de sortie</p>
											</td>
											<td>
												<p id="release-date"></p>
											</td>
										</tr>

										<tr>
											<td>
												<p>Genre</p>
											</td>
											<td>
												<p id="genre"></p>
											</td>
										</tr>

										<tr>
											<td>
												<p>Prix</p>
											</td>
											<td>
												<p id="price"></p>
											</td>
										</tr>

									</table>
									
								</div>
							</div>

							<div class="row">

								<div id="shop-posters">
									
								</div>

							</div>

						</div>

					</div>
					
				</section>

				<section id="contact">
					
				</section>

			</main>
			
			<footer>
				
			</footer>

		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/alle_cine.js"></script>
	</body>
</html>