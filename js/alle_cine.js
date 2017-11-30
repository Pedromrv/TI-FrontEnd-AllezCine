$(document).ready(
	function () {


		$(".pgwSlider").pgwSlider(
			{
				 transitionDuration : 2000,
				 maxHeight: 600,
				 intervalDuration: 5000
			}
		);



//SHOW-MORE BUTTONS


		$("#btn-featured-plus").click(
			function () {
				$("#more-featured-2").slideToggle("slow");

				if ($(this).attr('id') == 'btn-featured-plus') {
					$(this).text("MOINS DE FILMS");
					$(this).attr("id", "btn-featured-moins");
					console.log($(this).attr("id"));
				}
				else {
					$(this).text("PLUS DE FILMS");
					$(this).attr("id", "btn-featured-plus");
					console.log($(this).attr("id"));
				}	
			}
		);


		$("#btn-series-plus").click(
			function () {
				$("#more-featured-series").slideToggle("slow");

				if ($(this).attr('id') == 'btn-series-plus') {
					$(this).text("MOINS DE SERIES");
					$(this).attr("id", "btn-series-moins");
					console.log($(this).attr("id"));
				}
				else {
					$(this).text("PLUS DE SERIES");
					$(this).attr("id", "btn-series-plus");
					console.log($(this).attr("id"));
				}
			}
		);



//FILTERS


		function displayGenre (location, genre) {

			var myQuery = location + ' .panel-default';
			$(myQuery).each(
				function () {
					if (!$(this).hasClass(genre)) {
						$(this).fadeOut(800);
					}
					else {

						if ($(this).is(':hidden')) {
							$(this).fadeIn(1200);
						}
					}
				}
			);
		}


		$('#features-movies .btn-group .btn-default').click(
			function () {
				switch ($(this).text()) {

					case 'All':
						$('#features-movies .panel-default').fadeIn();
						break;

					case 'Action':
						displayGenre('#features-movies', 'action');
						break;

					case 'Policier':
						displayGenre('#features-movies', 'policier');
						break;

					case 'Hentaï Tentacles':
						displayGenre('#features-movies', 'hentai-tentacles');
						break;

					default:
						console.log('ALL YOUR BASES ARE BELONG TO US');
				}
			}
		);


		$('#features-series .btn-group .btn-default').click(
			function () {
				switch ($(this).text()) {

					case 'All':
						$('#features-series .panel-default').fadeIn();
						break;

					case 'Action':
						displayGenre('#features-series', 'action');
						break;

					case 'Policier':
						displayGenre('#features-series', 'policier');
						break;

					case 'Hentaï Tentacles':
						displayGenre('#features-series', 'hentai-tentacles');
						break;

					default:
						console.log('ALL YOUR BASES ARE BELONG TO US');
				}
			}
		);




//FILMS



		var newRelease = [
			{
				title		: 'Drive',
				resume		: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				release_date: '2015',
				genre		: 'drama',
				price		: '15 euro',
				poster		: 'img/drive-mini.jpg',
				trailer		: '<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/KBiOF3y1W0Y" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>'
			},

			{
				title		: 'Guardians Of The Galaxy',
				resume		: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				release_date: '2015',
				genre		: 'action',
				price		: '15 euros',
				poster		: 'img/guardians-mini.png',
				trailer		: '<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/d96cjJhvlMA" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>'
			},

			{
				title		: 'Interstellar',
				resume		: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				release_date: '2015',
				genre		: 'sci-fi',
				price		: '15 euro',
				poster		: 'img/interstellar-mini.jpg',
				trailer		: '<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/zSWdZVtXT7E" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>'
			},

			{
				title		: 'Mad Max Fury Road',
				resume		: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				release_date: '2015',
				genre		: 'action/sci-fi',
				price		: '15 euro',
				poster		: 'img/mad-max-mini.jpg',
				trailer		: '<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/hEJnMQG9ev8" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>'
			},

			{
				title		: 'The Walking Dead Season 1',
				resume		: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				release_date: '2015',
				genre		: 'horror',
				price		: '65 euro',
				poster		: 'img/walking-dead-mini.jpg',
				trailer		: '<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/R1v0uFms68U" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>'
			},

			{
				title		: 'Vikings Season 3',
				resume		: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				release_date: '2015',
				genre		: 'historical',
				price		: '65 euro',
				poster		: 'img/vikings-mini.jpg',
				trailer		: '<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/UQm9torR1K8" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>'
			}
		];

		function displayNewRelease (movie) {

			$('.modal-header h4').text(movie.title);
			$('.modal-body')	 .html(movie.trailer);
		}

		for (var i = 0; i < newRelease.length; i++) {

			var myDiv = document.createElement('div');
			myDiv.classList.add('panel');
			myDiv.classList.add('panel-default');
			myDiv.dataset.toggle = 'modal';
			myDiv.dataset.target = '#screen';
			myDiv.id = i;

			myDiv.innerHTML = 	'<div class="panel-body">' +
									'<img class="img-responsive" src="' + newRelease[i].poster + '">' +
								'</div>' +
								'<div class="panel-footer">' +
									'<h4 class="text-center">' + newRelease[i].title + '</h4>' +
									'<p>' + newRelease[i].release_date + 
								'</div>';
			
			myDiv.addEventListener('click', 
				function () {
					displayNewRelease(newRelease[this.id]);
				}
			);

			$('#films').append(myDiv);
		}

		$('#screen').on('hidden.bs.modal', 
			function () {
			    $("#screen iframe").attr("src", $("#screen iframe").attr("src"));
			}
		);





//SHOP MOVIES DISPLAY



		var moviesForSale = [
			{
				title		: 'Star Wars VIII',
				resume		: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				release_date: '2015',
				genre		: 'sci-fi',
				price		: '15 euro',
				poster		: 'img/star-wars-8-mini.jpg',
				trailer		: '<iframe width="560" height="315" src="https://www.youtube.com/embed/Q0CbN8sfihY" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>'
			},

			{
				title		: 'Punisher',
				resume		: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				release_date: '2015',
				genre		: 'action',
				price		: '15 euros',
				poster		: 'img/punisher-mini.jpg',
				trailer		: '<iframe width="560" height="315" src="https://www.youtube.com/embed/OMW_dPtm7Bo" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>'
			},

			{
				title		: 'Justice League',
				resume		: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				release_date: '2015',
				genre		: 'sci-fi',
				price		: '15 euro',
				poster		: 'img/justice-league-mini.jpg',
				trailer		: '<iframe width="560" height="315" src="https://www.youtube.com/embed/r9-DM9uBtVI" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>'
			},

			{
				title		: 'Iron Sky 2',
				resume		: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				release_date: '2015',
				genre		: 'action/sci-fi',
				price		: '15 euro',
				poster		: 'img/iron-sky-mini.jpg',
				trailer		: '<iframe width="560" height="315" src="https://www.youtube.com/embed/JKPwtDjzJMI" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>'
			},

			{
				title		: 'Avengers Infinity War',
				resume		: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				release_date: '2015',
				genre		: 'sci-fi',
				price		: '65 euro',
				poster		: 'img/infinity-war-mini.png',
				trailer		: '<iframe width="560" height="315" src="https://www.youtube.com/embed/6ZfuNTqbHE8" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>'
			}
			
		];

		function displayShopMovie (movie) {

			$('#shop-trailer')		 .html(movie.trailer);
			$('#shop-description h4').text(movie.title);
			$('#resume')			 .text(': ' + movie.resume);
			$('#release-date')		 .text(': ' + movie.release_date);
			$('#genre')				 .text(': ' + movie.genre);
			$('#price')				 .text(': ' + movie.price);
		}

		for (var i = 0; i < moviesForSale.length; i++) {

			var myDiv = document.createElement('div');
			myDiv.classList.add('panel');
			myDiv.classList.add('panel-default');
			myDiv.id = i;

			myDiv.innerHTML = 	'<div class="panel-body">' +
									'<img class="img-responsive" src="' + moviesForSale[i].poster + '">' +
								'</div>' +
								'<div class="panel-footer">' +
									'<h4 class="text-center">' + moviesForSale[i].title + '</h4>' +
									'<p>' + moviesForSale[i].release_date + '<span class="pull-right">' + moviesForSale[i].price + '</span>' + '</p>' +
								'</div>';
			
			myDiv.addEventListener('click', 
				function () {
					displayShopMovie(moviesForSale[this.id]);
				}
			);

			$('#shop-posters').append(myDiv);
		}

		displayShopMovie(moviesForSale[0]);
	}
);