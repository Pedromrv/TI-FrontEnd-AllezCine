$(document).ready(
	function () {
		$('.pgwSlider').pgwSlider(
			{
				 transitionDuration : 2000,
				 maxHeight: 600,
				 intervalDuration: 5000
			}
		);

		$('#btn-featured').click(
			function () {
				$('#more-featured-movies').slideToggle('slow');
				$('#btn-featured').text('MOINS DE FILMS');
			}
		);

	}
);