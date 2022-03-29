console.log('This blog use Grass Design Theme v 1.0.0 Preview 4.');
function suit(){
    if($(".gd_main").width() >= 760){
        $(".gd_main").css('left', ($(window).width() / 2 - 400));
        $("#menu").css("right","50px");
        $(".gd_box").css('padding','30px');
        $(".gd_box").css('width','calc(100% - 60px)');
        $(".gd_p ul, .gd_p ol").css('margin-left','30px');
    }
    else{
        $(".gd_main").css('left', 'calc(10% - 20px)');
        $("#menu").css('right','20px');
        $(".gd_box").css('padding','20px');
        $(".gd_box").css('width','calc(100% - 40px)');
        $(".gd_p ul,.gd_p ol").css('margin-left','20px');
    }
    $(".gd_post_header").css('height', $("#header").height() + 60);
    $("#d").css('height', $(".gd_copy").height() + 40);
}
function menu(){
    if(menuStatus == false){
        $("#menu-content").fadeIn(300);
        menuStatus = true;
    }
    else{
        $("#menu-content").fadeOut(300);
        menuStatus = false;
    }
}
suit();
$(window).resize(function(){
    suit();
});
$("#menu").click(function(){
    menu();
});