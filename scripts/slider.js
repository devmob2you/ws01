$(document).ready(function() {
	
	/*
	$('#content1_2').hide();
	$('#content1').hide();
	
	$('#content1_2').hide(function(){
		$('#content1').fadeIn(2000).delay(2000);
		$('#content1').fadeOut(1000);

	});*/
	//$('#content1_2').hide();
	
	
	//Speed of the slideshow
	var speed = 5000;
	
	//You have to specify width and height in #slider CSS properties
	//After that, the following script will set the width and height accordingly
	$('#mask-gallery, #gallery li').width($('#slider').width());	
	$('#gallery').width($('#slider').width() * $('#gallery li').length);
	$('#mask-gallery, #gallery li, #mask-excerpt, #excerpt li').height($('#slider').height());
	
	$('#mask-gallery2, #gallery2 li').width($('#slider2').width());	
	$('#gallery2').width($('#slider2').width() * $('#gallery2 li').length);
	$('#mask-gallery2, #gallery2 li, #mask-excerpt2, #excerpt2 li').height($('#slider2').height());
	//Assign a timer, so it will run periodically
	var run = setInterval('newsscoller(0)', speed);	
	
	$('#gallery li:first, #excerpt li:first').addClass('selected');
	$('#gallery2 li:first, #excerpt2 li:first').addClass('selected');

	//Pause the slidershow with clearInterval
	$('#btn-pause').click(function () {
		clearInterval(run);
		return false;
	});

	//Continue the slideshow with setInterval
	$('#btn-play').click(function () {
		run = setInterval('newsscoller(0)', speed);	
		return false;
	});
	
	//Next Slide by calling the function
	$('#btn-next').click(function () {
		newsscoller(0);	
		return false;
	});	

	//Previous slide by passing prev=1
	$('#btn-prev').click(function () {
		newsscoller(1);	
		return false;
	});	
	
	//Mouse over, pause it, on mouse out, resume the slider show
	$('#slider').hover(
	
		function() {
			clearInterval(run);
		}, 
		function() {
			run = setInterval('newsscoller(0)', speed);	
		}
	); 	
	$('#slider2').hover(
	
		function() {
			clearInterval(run);
		}, 
		function() {
			run = setInterval('newsscoller(0)', speed);	
		}
	); 	
	
});

function newsscoller(prev) {
/*
var listItem = document.getElementById( "sld1" );
alert( "Index: " + $( "li" ).index( listItem ) ); //INDICE = 5

var listItem = document.getElementById( "sld2" );
alert( "Index: " + $( "li" ).index( listItem ) ); //INDICE = 6

var listItem = document.getElementById( "sld3" );  //INDICE = 7
alert( "Index: " + $( "li" ).index( listItem ) );*/

	//Get the current selected item (with selected class), if none was found, get the first item
	var current_image = $('#gallery li.selected').length ? $('#gallery li.selected') : $('#gallery li:first');
	var current_excerpt = $('#excerpt li.selected').length ? $('#excerpt li.selected') : $('#excerpt li:first');
	var current_texto = $('#gallery2 li.selected').length ? $('#gallery2 li.selected') : $('#gallery2 li:first');
	var current_excerpt_texto = $('#excerpt2 li.selected').length ? $('#excerpt2 li.selected') : $('#excerpt2 li:first');


	//if prev is set to 1 (previous item)
	if (prev) {
		//Get previous sibling
		var next_image = (current_image.prev().length) ? current_image.prev() : $('#gallery li:last');
		var next_excerpt = (current_excerpt.prev().length) ? current_excerpt.prev() : $('#excerpt li:last');
		var next_texto = (current_texto.prev().length) ? current_texto.prev() : $('#gallery2 li:last');
		var next_excerpt_texto = (current_excerpt_texto.prev().length) ? current_excerpt_texto.prev() : $('#excerpt2 li:last');
		
	//if prev is set to 0 (next item)
	} else {
		//Get next sibling
		var next_image = (current_image.next().length) ? current_image.next() : $('#gallery li:first');
		var next_excerpt = (current_excerpt.next().length) ? current_excerpt.next() : $('#excerpt li:first');
		var next_texto = (current_texto.next().length) ? current_texto.next() : $('#gallery2 li:first');
		var next_excerpt_texto = (current_excerpt_texto.next().length) ? current_excerpt_texto.next() : $('#excerpt2 li:first');
		
	}


	//clear the selected class
	$('#excerpt li, #gallery li').removeClass('selected');
	$('#excerpt2 li, #gallery2 li').removeClass('selected');
	
	//reassign the selected class to current items
	next_image.addClass('selected');
	next_excerpt.addClass('selected');
	next_texto.addClass('selected');
	next_excerpt_texto.addClass('selected');

	//Scroll the items
	$('#mask-gallery').scrollTo(next_image, 800);		
	$('#mask-excerpt').scrollTo(next_excerpt, 800);						
	$('#mask-gallery2').scrollTo(next_texto, 800);		
	$('#mask-excerpt2').scrollTo(next_excerpt_texto, 800);						
}