(function($) {


	var urls = [],
		$lide = $('.slidedata');

	$lide.each(function(i){
		$me = $(this);
		urls[i] = $me.html();
		$me.html(''); // empty data
		$me.css({
			'background-image':'url('+ urls[i] +')',
			'background-size': 'cover',
			'background-position': 'center center'
		})
	})
	
	var total = urls.length + 1,
		current = 1;

	function nextSlide(){


		$('.slidedata:nth-child('+current+')').css('opacity','0');
		current++;
		if(current >= total) current = 1;
		$('.slidedata:nth-child('+current+')').css('opacity','1');

		setTimeout(nextSlide, 7000)
	}

	nextSlide();	


})(jQuery);