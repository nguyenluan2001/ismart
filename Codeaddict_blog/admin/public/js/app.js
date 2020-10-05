$(document).ready(function () {

    $("#header .container #menu .item:last-child").hover(
        function () {
            $(this).children("#info_user").css({ display: 'block' });
        },
        function () {
            $(this).children("#info_user").css({ display: 'none' });
        }
    )
    $("#header a#menu_icon i").click(function () {
        $("#menu_respon").slideToggle()
        return false;
    })
    $("#menu_respon .item:last-child").hover(
        function () {
            $(this).children("#info_user").css({ display: 'block' });
        },
        function () {
            $(this).children("#info_user").css({ display: 'none' });
        }
    )

    $(".owl-carousel").owlCarousel({
        items:4,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true
    });
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[1000])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    });
    

})