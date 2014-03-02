$(document).ready(function(){
	$("#menu li").on("click", function(){
	$(this).css("font-weight","bold").siblings().css("font-weight","normal");;
});
});
