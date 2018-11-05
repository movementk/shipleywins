(function($) {
    // 헤더 스크롤
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 0) {
            $('body').addClass('scrolled');
        } else {
            $('body').removeClass('scrolled');
        }
    });
    
    // client nav
    $(document).on("click", "#header .btn-open-client", function(e) {
        $("body").addClass("client-opened");
        e.preventDefault();
    });
    $(document).on("click", "#client-nav .nav-backdrop, #client-nav .btn-close", function(e) {
        $("body").removeClass("client-opened");
    });

    // gnb nav
    $(document).on("click", "#header .btn-open-nav", function(e) {
        $("body").addClass("gnb-opened");
        e.preventDefault();
    });
    $(document).on("click", "#gnb-nav .nav-backdrop, #gnb-nav .btn-close", function(e) {
        $("body").removeClass("gnb-opened");
    });

    // 메뉴 관련
    $(document).on("click", "#gnb-nav .nav-container > ul > li > a", function(e) {		
        if ($(this).parent().hasClass("active")) {
            $(this).parent().removeClass("active");
        } else {
            $(this).parent().siblings(".active").removeClass("active");
            $(this).parent().addClass("active");
        }
        e.preventDefault();
    });
})(jQuery);