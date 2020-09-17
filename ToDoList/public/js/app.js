$(document).ready(function () {
    $('a#edit').click(function () {
        var title_mission = $(this).parent('.action').parent('.mission_item').children('.content').children('p#title_mission').text();
        $(this).find('.mission_item').css('background-color', 'wheat')
        $(this).parent(".action").parent('.mission_item').next('#update_mission').slideDown()
        $(this).parent(".action").parent('.mission_item').next('#update_mission').children("form").children('input#update_box').val(title_mission)
        return false;
    })
    $("#update_mission a#close_update").click(function () {
        $("#update_mission").fadeOut()
        return false;

    })
    $(".table_item").hover(
        function () {
            $(this).children('a.delete_table').css('display', 'inline-block')
        },
        function () {
            $(this).children('a.delete_table').css('display', 'none')
        },
    )
    // $("#btn_add_mission").click(function(){
    //     var content=$("#add_mission form #input_box").val();
    //     if(content=="")
    //     {
    //         alert
    //     }
    // })
})