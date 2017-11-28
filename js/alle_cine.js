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

		$("#btn-series-plus").click(
			function () {
				$("#more-featured-series").slideToggle("slow");

				if ($(this).attr('id') == 'btn-series-plus') {
					$(this).text("MOINS DE FILMS");
					$(this).attr("id", "btn-series-moins");
					console.log($(this).attr("id"));
				}
				else {
					$(this).text("PLUS DE FILMS");
					$(this).attr("id", "btn-series-plus");
					console.log($(this).attr("id"));
				}
			}
		);

	}
);