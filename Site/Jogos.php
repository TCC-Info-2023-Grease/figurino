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
	<link rel="stylesheet" type="text/css" href="estilos/stylejogos.css" />
  <title>Jogos</title>

</head>
<div class="main">
		<?php 
		include('navbar.php');
		?>
        <div class="gradiente"></div>
		<div class="sessao" style="justify-content: center;align-items: center;">
			<div class="containerquiz">
				<script src="quizperguntas2.js"></script>

				<h1>Quiz</h1>
  				<div id="quiz-container"></div>
  				<button onclick="checkAnswers()">Verificar Respostas</button>
  				<div id="result-container"></div>
 		 		<br/>
  				<form action="comentario.php" method="POST">
  		  			<textarea name="comentario" rows="4" cols="50"></textarea>
   					<br/>
   			 		<button type="submit">Enviar Comentário</button>
  				</form>
		</div>





        <!--Função de abrir menu responsivo para telas pequenas--> 
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