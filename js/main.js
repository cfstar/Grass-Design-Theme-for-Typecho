console.log('This blog use Grass Design Theme v 1.0.1 Preview.');
function suit(){
	var width, height;
    if($(".gd_main").width() >= 760){
        $(".gd_main").css('left', ($(window).width() / 2 - 400));
        $("#menu").css("right","50px");
        $(".gd_box").css('padding','30px');
        $(".gd_box").css('width','calc(100% - 60px)');
        $(".gd_p ul, .gd_p ol").css('margin-left','30px');
        width = $(".gd_post_header").width() + 60;
        height = $(".gd_post_header").height() + 60;
    }
    else{
        $(".gd_main").css('left', 'calc(5% - 20px)');
        $("#menu").css('right','20px');
        $(".gd_box").css('padding','20px');
        $(".gd_box").css('width','calc(100% - 40px)');
        $(".gd_p ul,.gd_p ol").css('margin-left','20px');
        width = $(".gd_post_header").width() + 40;
        height = $(".gd_post_header").height() + 40;
    }
    if($("#header_image").width() < width){
		$("#header_image").css('height', 'auto');
		$("#header_image").css('width', '100%');
		$("#header_image").css('top', (height - $("#header_image").height()) / 2);
		$("#header_image").css('left', '0');
    }
    else if($("#header_image").height() < height){
		$("#header_image").css('height', '100%');
		$("#header_image").css('width', 'auto');
		$("#header_image").css('top', '0');
		$("#header_image").css('left', (width - $("#header_image").width()) / 2);
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
