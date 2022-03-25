function suit(){
    if($(".gd_main").width() >= 760){
        $(".gd_main").css('left', ($(window).width() / 2 - 400));
    }
    else{
        $(".gd_main").css('left', 'calc(10% - 20px)');
    }
    $(".gd_post_header").css('height', $("header").height() + 60);
    $("#d").css('height', $(".gd_copy").height() + 40);
}
suit();
$(window).resize(function(){
    suit();
});
console.log("Grass Design Theme for Typecho v 1.0 | Copyright (c) 2022 Grass S&T");