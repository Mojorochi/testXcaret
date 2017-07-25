$().ready(function(){
	
	$(".top-visual .buttons a").on("click",function(){
		$(".top-visual")
		.removeClass("carousel-active")
		.removeClass("map-active").addClass($(this).data("item")+"-active");
	});
	
});