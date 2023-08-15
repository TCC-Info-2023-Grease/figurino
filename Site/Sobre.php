<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos/stylegeral.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="otslider.css" />
	<link rel="stylesheet" type="text/css" href="estilos/stylehome.css" />
  <link rel="stylesheet" type="text/css" href="estilos/stylesobre.css" />
	
	
    <title>Sobre</title>

</head>
<body>
	
	

<div class="main">
		<?php 
		include('navbar.php');
		?>
        <div class="gradiente"></div>
        <div class="sessaosobre">
            <img src="media_sobre/ondastop.svg" alt="Erro em carregar imagem" style="height: auto;width: 100%;"> 
            <h class="titlesobre"
          >
            Quem somos?
            é uma história curta.</h>
            <div class="holdersobre">
              <div class="txtsobreholder">
                  <h class="txtitles" style="color: var(--vermelhoClaroRetro);margin:0;">No.1</h><br>
                  <h >Um grupo animado de<br> estudantes de<br> informática<br> embarcou 
                    em uma<br> emocionante<br> jornada para<br> desenvolver um site<br> inovador.
                  </h>
              </div>
              <img  class="img1" src="media_sobre/personsobre.png" alt="Erro em carregar imagem" title="Ilustração dos integrantes do grupo"style="height: auto;width: 30%;"> 
              
            </div>
            <div class="holdersobre" style="flex-direction: row-reverse;">
              <div class="txtsobreholder" style="text-align: end;">
                  <h class="txtitles" style="color: var(--vermelhoClaroRetro);margin:0;">No.2</h><br>
                  <h>Juntos,<br>
                  eles combinavam<br> habilidades de<br> design e<br> programação para<br> criar uma<br> plataforma funcional.
                  </h>
              </div>
              <img  class="img2" src="media_sobre/pcssobre.png" alt="Erro em carregar imagem" title="Ilustração de computadores"style="height: auto;width: 30%;"> 
              
            </div>
            <div class="holdersobre">
              <div class="txtsobreholder">
                  <h class="txtitles" style="color: var(--vermelhoClaroRetro);margin:0;">No.3</h><br>
                  <h>O objetivo era<br> reviver o clássico<br> musical“Grease: nos<br> Tempos da<br> Brilhantina”!
                  </h>
              </div>
              <img class="img3" src="media_sobre/sandydannysobre.png" alt="Erro em carregar imagem" title="Foto de Sandy e Danny"style="height: auto;width: 30%;margin-left:5%;"> 
              
            </div>
            <div class="holderfooter">
				
              <img  src="media_sobre/ondasbot.svg" alt="Erro em carregar imagem" style="height: auto;width: 100%;"> 
              <div class="footertexto">Esse projeto<br> aconteceu apenas<br> graças a ETEC de<br> Francisco Morato.<br> esperamos que gostem!</div>
              <a class="footertexto" href="Home.php" style="display: block;font-size: small;margin-top:10%;">Voltar a página inicial?</a>
              <div class="footerpag"></div>
            </div>
		
        </div>
          <!--Função de abrir menu responsivo--> 
		<script>
		function menuresponsivo() {
		  var x = document.getElementById("nav");
		  if (x.className === "navbar") {
			x.className += " responsive";
			
		  } else  {
			x.className = "navbar";
		  }
		}
		</script>
     
		
		
		
</div>