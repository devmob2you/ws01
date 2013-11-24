<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Barrobello - Blocos e telhas cerâmicas</title>

<script src="js/jquery-1.4.2.min.js"></script>

<style rel="stylesheet" type="text/css" media="all">
*{font-family: MyriadPro-Regular, 'Myriad Pro Regular', MyriadPro, 'Myriad Pro', Helvetica, Arial, sans-serif;}
.menu{display:inline; line-height:60px; text-decoration:none; color:#9b9b9a; font-weight:bold; padding:0 7px; text-align:center;}
.menu:hover{color:#f7a565;}

img {
    border:0;
}

}
*{margin: 0;padding:0;}
</style>

<script type="text/javascript">
//initialize on domready
$(document).ready(function(){
	srcBtn1= $('#btn1').attr("src");
	srcBtn2= $('#btn2').attr("src");
	srcBtn3= $('#btn3').attr("src");
	img = 1;
	
	$('.textoSlider1').show(); //slider1
	$('#imgSlider1').show();  //slider1
	
	$('.textoSlider2').hide(); //slider2
	$('#imgSlider2').hide();  //slider2
	
	$('.textoSlider3').hide(); //slider3
	$('#imgSlider3').hide();  //slider3
	
	/*function randomImages(){
		if(img == 1){
			$('.textoSlider2').hide(); 
			$('#imgSlider2').hide();  
			
			$('.textoSlider3').hide();
			$('#imgSlider3').hide(); 
			
			$('.textoSlider1').fadeIn(4000); 
			$('#imgSlider1').fadeIn(4000);
			img = 2;
		}
		else if(img == 2){
			$('.textoSlider1').hide(); 
			$('#imgSlider1').hide();
			
			$('.textoSlider2').fadeIn(4000);
			$('#imgSlider2').fadeIn(4000);
			
			$('.textoSlider3').hide();
			$('#imgSlider3').hide(); 
			
			
			img = 3;
		}
		else if(img == 3){
			$('.textoSlider1').hide(); 
			$('#imgSlider1').hide();
			
			$('.textoSlider2').hide();
			$('#imgSlider2').hide();
			
			$('.textoSlider3').fadeIn(4000);
			$('#imgSlider3').fadeIn(4000);
			img = 1;
		}
	}
	setInterval(randomImages,10000);*/
	
	$('#btn1').click(function(){
		//alert(1);
		$('.textoSlider2').hide(); 
		$('#imgSlider2').hide();  
	
		$('.textoSlider3').hide(); 
		$('#imgSlider3').hide();  
		
		$('.textoSlider1').fadeIn("slow"); 
		$('#imgSlider1').fadeIn("slow");  
		
		srcBtn1 = "img/newHome/botao_azul.png";
		
		//alert(srcBtn1+'\n'+srcBtn2+'\n'+srcBtn3);
		/*$('#btn1').attr("src") = "img/newHome/botao_azul.png";
		$('#btn2').attr("src") = "img/newHome/botao_laranja.png";
		$('#btn3').attr("src") = "img/newHome/botao_laranja.png";*/
		
		
		
	});
	
	$('#btn2').click(function(){
		$('.textoSlider1').hide(); 
		$('#imgSlider1').hide();  
		
		$('.textoSlider3').hide(); 
		$('#imgSlider3').hide();  
		
		$('.textoSlider2').fadeIn("slow"); 
		$('#imgSlider2').fadeIn("slow");  
		
		
	});
	
	$('#btn3').click(function(){
		$('.textoSlider1').hide(); 
		$('#imgSlider1').hide();  
		
		$('.textoSlider2').hide(); 
		$('#imgSlider2').hide(); 
		
		$('.textoSlider3').fadeIn("slow"); 
		$('#imgSlider3').fadeIn("slow");  
	});
	
	
});
</script>
</head>

<body style="width:100%; margin:0;background-image:url(img/newHome/bgColor.png);">

	<div class="page" style="width:100%;height:1000px;background-image:url(img/newHome/bg_slider.png);background-repeat:no-repeat;background-position:top center;">
		<div class="content" style="width:1024px;height:1000px;margin:0 auto; border: 1px solid red;">
			
			<div class="menuTop" style='width:980px; margin:0px auto; background-image:url(imagens/bgtopoblocos.png); background-position:right; background-repeat:no-repeat;'>
				<div style='display:table-cell; width:360px; height:140px; text-align:center;'><a href="index.php"><img src="imagens/logo.png" border=0></a></div>
				<div style='display:table-cell; width:620px; height:140px; vertical-align:top;'>
					<div align="right" style='color:#5b5b5b;font-weight:bold;font-size:12px; padding:40px 8px 0px 0px;'>
						<span><a href="contato.php" style="text-decoration: none;color:#5b5b5b;font-weight:bold;font-size:12px;" href="#">0800 - 703 1533<br />
				TEL/FAX: 21(19)3567-1533 - vendas@ceramicabarrobello.com.br</a></span>
					</div>
					<div style="padding:0px; margin:20px;; margin-right:45px; text-align:right;">
						<a class=menu href="ceramica.php">A CERÂMICA</a>
						<a class=menu href="blocos.php">BLOCOS</a>
						<a class=menu href="telhas.php">TELHAS</a>
						<a class=menu href="fotos.php">FOTOS</a>
						<a class=menu href="contato.php">CONTATO</a>
					</div>
				</div>
			</div><!--FIM: menuTop -->
			
			<div class="slidesTextos" style='width:100%;height:auto; margin:0px auto;position:absolute;top:0;border:1px solid blue;'>
				<div style='padding-top:155px;padding-left:75px;display:table-cell; width:490px; vertical-align:top; color:#5B5B5B; font-size:14px;'>
					<span>PROTEÇÃO SOB MEDIDA</span><br>
					<span>PARA O MELHOR</span><br>
					<span>DO SEU SONHO</span>
				</div>
				<div style='padding-top:155px;display:table-cell; padding-left:0px; width:470px; text-align:center;'>
					<img src="img/newHome/img_slide_1.png" />
				</div>
			</div><!--FIM: slidesTextos -->

		</div><!--FIM: content -->
	</div>
	

</body>
</html>