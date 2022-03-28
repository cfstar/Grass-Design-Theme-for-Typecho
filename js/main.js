console.log('This blog use Grass Design Theme v 1.0.0 Preview 3.');
function suit(){
    if($(".gd_main").width() >= 760){
        $(".gd_main").css('left', ($(window).width() / 2 - 400));
        $("#menu").css("right","50px");
    }
    else{
        $(".gd_main").css('left', 'calc(10% - 20px)');
        $("#menu").css('right','20px');
    }
    $(".gd_post_header").css('height', $("#header").height() + 60);
    $("#d").css('height', $(".gd_copy").height() + 40);
}
function menu(){
    if(menuStatus == false){
        $("#menu-content").fadeIn(200);
        menuStatus = true;
    }
    else{
        $("#menu-content").fadeOut(200);
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