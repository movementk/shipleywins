(function($) {
    // 메인 탑 슬라이더
    $(document).on("ready", function(){
        $('#jumbo > .jumbo-slider ul').bxSlider({
            auto: true,
            controls: false,
            pause: 8000,
            touchEnabled: false,
            buildPager: function(slideIndex) {
                return '<span class="sr-only">'+slideIndex+'</span>';
            },
            onSliderLoad: function(currentIndex) {
                $("#jumbo").find("h2").css({"visibility":"visible"}).animate({opacity:1});
                //$("#header").css("visibility", "visible").animate({opacity:1});

                var $currentElem = $('#jumbo > .jumbo-slider ul li:not(.bx-clone):eq(0)');
                $currentElem.addClass('active');
            },
            onSlideBefore: function($slideElement, oldIndex, newIndex) {
                $('#jumbo > .jumbo-slider ul .active').removeClass('active');
            },
            onSlideAfter: function($slideElement, oldIndex, newIndex) {
                $slideElement.addClass('active');
            }
        });
    })
	
    
    // 목표 달성 관련
	setTimeout(function(){
		var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',');
		$(".aninum1").animateNumber({
			number: 199525,
			numberStep: comma_separator_number_step
		}, 3000);

		var decimal_places = 1;
		var decimal_factor = decimal_places === 0 ? 1 : Math.pow(10, decimal_places);

		$(".aninum2").animateNumber({
			number: 849,
			numberStep: function(now, tween){
				var floored_number = Math.floor(now) / decimal_factor,
					target = $(tween.elem);

				if(decimal_places > 0){
					// force decimal places even if they are 0
					floored_number = floored_number.toFixed(decimal_places);
					
					// replace '.' separator with ','
					//floored_number = floored_number.toString().replace('.', ',');
				}

				target.text(floored_number);
			}
		}, 3000);

		$(".target-bar").stop().animate({"height":"84%"}, 3000);
		$(".target-bar2").stop().animate({"height":"90%"}, 3000);
		
	}, 3000);
})(jQuery);