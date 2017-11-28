$(document).ready(
	function () {
		$(".pgwSlider").pgwSlider(
			{
				 transitionDuration : 2000,
				 maxHeight: 600,
				 intervalDuration: 5000
			}
		);

		$("#btn-featured-plus").click(
			function () {
				$("#more-featured-movies").slideToggle("slow");

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

	}
);