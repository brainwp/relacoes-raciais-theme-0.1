// JavaScript Document
jQuery(function() {
		jQuery('#foo3').carouFredSel({
		prev: '#prev3',
		next: '#next3',
		auto: {
			play: true,
		},
		circular: true,
		infinite: true,
		responsive: true,
		direction: "left",
		align: "center",
		items: {
			visible: 3,
			start: "random"
		}
	});
});
