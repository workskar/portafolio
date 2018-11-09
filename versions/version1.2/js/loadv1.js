
$(document).ready(function(){
	$(".link-show").click(function(evento){
		evento.preventDefault();
		$("<div id='overlay'></div>").appendTo(".home");
		$('#loader').css("display","inline");
		var info=$(this).attr('href');
		$("<div id='centre-me'></div>").appendTo(".home");
		/*var dialog=$("#centre").dialog({
			autoOpen:false,
			height:405,width:980
			
			});
			dialog.load(info).dialog('open');	*/						 
		$("#centre-me").load(info, function(){
			$('#loader').css("display","none");
		});
	});
})