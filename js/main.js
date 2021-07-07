


(function ($) {

    
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");
    });

   				
		
})(jQuery);


                              

			




    $(document).scroll(function () {

        var top = $(document).scrollTop();
        console.log(top);

        if (top > 300) {
            $('.back-top').fadeIn();
        } else {
            $('.back-top').fadeOut();
        }

    });

    $('.back-top').click(function () {
        $('html').animate({
            scrollTop: 0
        }, 1500);
    });

$ (document).ready(function(){
								$('.breaking-news ul').innerfade({animationtype: 'fade', speed: 100 , timeout: 3500});
							});
	



