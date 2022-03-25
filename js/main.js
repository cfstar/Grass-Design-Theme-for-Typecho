function suit(){
    if($(".gd_main").width() >= 760){
        $(".gd_main").css('left', ($(window).width() / 2 - 400));
    }
    else{
        $(".gd_main").css('left', 'calc(10% - 20px)');
    }
    $("#d").css('height', $(".gd_copy").height() + 40);
}
suit();
$(window).resize(function(){
    suit();
});