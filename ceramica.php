<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
<title>Barrobello - Blocos e telhas cerâmicas</title>
<style>
body{font-family: MyriadPro-Regular, 'Myriad Pro Regular', MyriadPro, 'Myriad Pro', Helvetica, Arial, sans-serif;}
.menu{display:inline; line-height:60px; text-decoration:none; color:#9b9b9a; font-weight:bold; padding:0px 7px; text-align:center;}
.menu:hover{color:#f7a565;}
</style>


   	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.jcarousel.css" />
	<link rel="stylesheet" type="text/css" href="css/skin.css" />
	<script type="text/javascript">
	$(document).ready(function () {
		
		//jCarousel Plugin
	    $('#carousel').jcarousel({
			vertical: true,
			scroll: 1,
			auto: 2,
			wrap: 'last',
			initCallback: mycarousel_initCallback
	   	});

	//Front page Carousel - Initial Setup
   	$('div#slideshow-carousel a img').css({'opacity': '0.5'});
   	$('div#slideshow-carousel a img:first').css({'opacity': '1.0'});
   	$('div#slideshow-carousel li a:first').append('<span class="arrow"></span>')

  
  	//Combine jCarousel with Image Display
    $('div#slideshow-carousel li a').hover(
       	function () {
        		
       		if (!$(this).has('span').length) {
        		$('div#slideshow-carousel li a img').stop(true, true).css({'opacity': '0.5'});
   	    		$(this).stop(true, true).children('img').css({'opacity': '1.0'});
       		}		
       	},
       	function () {
        		
       		$('div#slideshow-carousel li a img').stop(true, true).css({'opacity': '0.5'});
       		$('div#slideshow-carousel li a').each(function () {

       			if ($(this).has('span').length) $(this).children('img').css({'opacity': '1.0'});

       		});
        		
       	}
	).click(function () {

	    $('span.arrow').remove();        
		$(this).append('<span class="arrow"></span>');
       	$('div#slideshow-main li').removeClass('active');        
       	$('div#slideshow-main li.' + $(this).attr('rel')).addClass('active');	
        	
       	return false;
	});


});


//Carousel Tweaking

function mycarousel_initCallback(carousel) {
	
	// Pause autoscrolling if the user moves with the cursor over the clip.
	carousel.clip.hover(function() {
		carousel.stopAuto();
	}, function() {
		carousel.startAuto();
	});
}
	
</script>
<style rel="stylesheet" type="text/css">
body {
    font-family:arial;    
}
img {
    border:0;
}
/* Styling up the image gallery */
#slideshow-main {
    /*width:429px; */
	width: 650px;

    float:left; 
    margin-left: 0px;
}
#slideshow-main ul {
    margin:0; 
    padding:0; 
    /*width:429px;*/
	width: 650px;
}
#slideshow-main li {
    /*width:429px; */
	width: 650px;
    height:290px; 
    display:none;
    position:relative;
}
#slideshow-main li.active {
    display:block !important;
}
#slideshow-main li span.opacity {
    position:absolute;
    bottom:0; left:0;
    display:block; 
    width:100%;
    height:60px;
    background:#000;
    filter:alpha(opacity=50); 
    -moz-opacity:0.5; 
    -khtml-opacity: 0.5; 
    opacity: 0.5;
    z-index:500;
}
#slideshow-main li span.content {
    position:absolute;
    bottom:0; left:0;
    display:block; 
    width:100%;
    height:60px;
    z-index:1000;
}
#slideshow-main li span.content h1 {
    font-size:14px;
    margin:5px 0;
    padding:0 0px;;
    color:#42e2e8;
}
#slideshow-main li span.content p {
    font-size:11px;
    margin:5px 0;
    padding:0 0px;;
    color:#42e2e8;
}
/* Styling up the carousel */
#slideshow-carousel {
    float:left; 
    width:206px;
    position:relative;
	overflow: visible;
}
#slideshow-carousel ul {
    margin:0; 
    padding:0;
    list-style:none;
}
#slideshow-carousel li {
    background:#fff; 
    height:97px; 
    position:relative
}
#slideshow-carousel li .arrow {
    left:3px; 
    top:28px; 
    position:absolute; 
    width:20px; 
    height:40px; 
    background:url(images/arrow_white.png) no-repeat 0 0; 
    display:block;
}
#slideshow-carousel li a {
    background:#000; 
    display:block; 
    width:206px; 
    height:95px;
}
#slideshow-carousel .active {
    filter:alpha(opacity=100); 
    -moz-opacity:1.0; 
    -khtml-opacity: 1.0; 
    opacity: 1.0;
}
#slideshow-carousel .faded {
    filter:alpha(opacity=50); 
    -moz-opacity:0.5; 
    -khtml-opacity: 0.5; 
    opacity: 0.5;
}

#frameSlider{
	padding-top: 100px;	
}
</style>


</head>
<body style='margin:0px; background-image:url(imagens/bgblocos.png);'>
<div style='width:980px; margin:0px auto; background-image:url(imagens/bgtopoblocos.png); background-position:right; background-repeat:no-repeat;'>
	<div style='display:table-cell; width:360px; height:140px; text-align:center;'><a href="index.php"><img src="imagens/logo.png" border=0></a></div>
	<div style='display:table-cell; width:620px; height:140px; vertical-align:top;'>
		<div align="right" style='color:#5b5b5b; font-weight:bold; font-size:12px; padding:40px 8px 0px 0px;'>
			0800 - 703 1533<br />TEL/FAX: 21(19)3567-1533 - vendas@ceramicabarrobello.com.br
		</div>
		<div style="padding:0px; margin:20px; margin-right:45px; text-align:right;">
			<a class=menu href="ceramica.php" style='padding-top:26px; background-image:url(imagens/cursor.png); background-position:center top; background-repeat:no-repeat;'>A CERÂMICA</a>
			<a class=menu href="blocos.php">BLOCOS</a>
			<a class=menu href="telhas.php">TELHAS</a>
			<a class=menu href="fotos.php">FOTOS</a>
			<a class=menu href="contato.php">CONTATO</a>
		</div>
	</div>
</div><br><br>
<div style='width:980px; margin:0px auto;'>
	<div style='display:table-cell; width:490px; vertical-align:top; color:#5B5B5B; font-size:14px;'>
		A Cerâmica Barrobello está localizada na cidade de Santa Cruz da Conceição, no estado de São Paulo, nas proximidades da Rodovia Anhanguera, Km 199. Fundada em outubro de 1986, a Cerâmica Barrobello tem como maior preocupação sempre oferecer produtos com a máxima qualidade e um atendimento impecável. Para isso, todos os processos desde a seleção da matéria-prima até a entrega final têm sua contribuição para a melhoria desses itens.<br><br>
		A empresa possui uma busca contínua na melhoria de todos os seus processos para atender com eficiência as necessidades do mercado e inovar seu sistema produtivo com as novidades tecnológicas mais evoluídas.<br><br>
		<div style='color:#242424;'>Cerâmica Barrobello, a perfeição nos detalhes.</div>
	</div>
	<div style='display:table-cell; padding-left:20px; width:470px; text-align:center;'>
		<iframe width="490" height="250" src="http://www.youtube.com/embed/rjmwtp5DDWE" frameborder="0" allowfullscreen></iframe>
		
	</div>
</div><br><br>

<div id='frameSlider' style='width:980px; margin:0px auto; text-align:center; padding-left: 20%;'> <!-- slider -->
	    <div id="slideshow-carousel">                
          <ul id="carousel" class="jcarousel jcarousel-skin-tango">
            <li><a href="#" rel="p1"><img src="imagens/imgCeramica1.jpg" width="206" height="95" alt="#"/></a></li>
            <li><a href="#" rel="p2"><img src="imagens/imgCeramica2.jpg" width="206" height="95" alt="#"/></a></li>
            <li><a href="#" rel="p3"><img src="imagens/imgCeramica3.jpg" width="206" height="95" alt="#"/></a></li>
            <li><a href="#" rel="p4"><img src="imagens/imgCeramica4.jpg" width="206" height="95" alt="#"/></a></li>
          </ul>
    </div>
        
    <div id="slideshow-main">
        <ul>
            <li class="p1 active">
                <a href="#">
                    <img src="imagens/imgCeramica1.jpg" width="650" height="290" alt=""/>
                    <span class="opacity"></span>
                    <span class="content"><h1>Cerâmica Barrobello</h1><p>Imagem superior da fábrica.</p></span>
                </a>
            </li>
            <li class="p2">
                <a href="#">
                    <img src="imagens/imgCeramica2.jpg" width="650" height="290" alt=""/>
                    <span class="opacity"></span>
                    <span class="content"><h1>Cerâmica Barrobello</h1><p>Imagem superior da fábrica.</p></span>
                </a>
            </li>
            <li class="p3">
                <a href="#">
                    <img src="imagens/imgCeramica3.jpg" width="650" height="290" alt=""/>
                    <span class="opacity"></span>
                    <span class="content"><h1>Cerâmica Barrobello</h1><p>Imagem superior da fábrica.</p></span>
                </a>
            </li>
            <li class="p4">
                <a href="#">
                    <img src="imagens/imgCeramica4.jpg" width="650" height="290" alt=""/>
                    <span class="opacity"></span>
                    <span class="content"><h1>Cerâmica Barrobello</h1><p>Imagem superior da fábrica.</p></span>
                </a>
            </li>
        
        </ul>                                        
    </div>
                
    <div class="clear"></div>
</div><br><br> <!-- slider -->

<div style='width:980px; margin:0px auto; text-align:center;'><img src=imagens/certificacao.png></div><br><br>
<div style='text-align:center; color:#5A5A5A; font-size:15px; background-color:#ffffff; padding:12px; font-weight:bold;'>
	Rodovia Anhanguera, saída 199 Km 01 Santa Cruz da Conceição/SP CEP 13625-000<br>
	© 2013 - Barrobello Blocos e Telhas Cerâmicas - Direitos Reservados
</div>
</body>
</html>