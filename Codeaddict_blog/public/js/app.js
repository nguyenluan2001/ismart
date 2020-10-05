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
    $("#menu_respon .item:eq(4)").click(
        function () {
            $(this).children("#info_user").slideToggle();
        },
       
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
    // -------BACK TO TOP-----
    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            $('#back_to_top').stop().fadeIn(150);
        } else {
            $('#back_to_top').stop().fadeOut(150);
        }
    });
    $('#back_to_top').click(function () {
        $('body,html').stop().animate({scrollTop: 0}, 800);
    });
    // $path=$("#detail_post img").attr('src');
    // alert($path);
    $('img').each(function(){
        var path=$(this).attr('src');
        var fullpath="admin/"+path;
        $(this).attr('src', fullpath);
        });
        $("#sidebar #topic #list_topic .item i").addClass('d-none','font-black')
        
        $("#menu_respon .item:eq(3)").click(
           
            function () {
                $(this).children("#list_topic").slideToggle();
            },
           
        )
        $("#menu_respon>i").click(function(){
            $("#menu_respon").slideUp()
        })
})