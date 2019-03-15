$(function(){
	menu_set();
	$(window).resize(function() {
		menu_set();
	});
	$(".menu").click(function(){
		if($(this).attr("class")=="menu on"){
			$("header .menu").removeClass("on");
			$("header .header").removeClass("on");
		}else{
			$("header .menu").addClass("on");
			$("header .header").addClass("on");
		}
	});
});
function menu_set(){
	if($(window).width()<768){
		$("header .menu").removeClass("on");
		$("header .header").removeClass("on");
	}
}
