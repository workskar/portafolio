$(document).ready(function(){
	$('.carousel').carousel({
		hAlign:'left',hMargin:0.5,carouselWidth:930,carouselHeight:310,left:90,directionNav:true,shadow:false,reflection:true,buttonNav:'none'
	});
});

/*Load page AJAX */
$(document).ready(function(){
	$(".link-show").click(function(evento){
		evento.preventDefault();
		$("<div id='overlay'></div>").appendTo("#wrapper");
		$('#loader').css("display","inline");
		var info=$(this).attr('href');
		$("<div id='centre-me'></div>").appendTo("#wrapper");
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