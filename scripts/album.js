$(document).ready(function(){
	$('#tglCapa').show();
	$('#linkAno li').click(function(){
		$('#tglCapa').hide(1500).fadeIn(1500);	
	});
});