<!DOCTYPE html>
<html>
<head>
	<style>
	
		/*Código que cria e posiciona as listras coloridas na esquerda*/
		.ArcoRetro{
			position: absolute;
			display: list-item;
			flex-direction: row;
			width: 50%;
			height: 100%;
			z-index: -1;
			left: 18px;
			animation: grow 1.5s;
			background: linear-gradient(
				to right,
   				var(--LaranjaRetro) 8.3%,
    			rgba(0, 0, 0, 0) 8.3% 12.45%,
    			var(--vermelhoClaroRetro) 12.45% 20.75%,
    			rgba(0, 0, 0, 0) 20.75% 24.9%,
   				var(--verdeRetro) 24.9% 33.2%,
				rgba(0, 0, 0, 0) 33.2% 37.35%,
				var(--azulClaroRetro) 37.35% 45.65%,
				rgba(0, 0, 0, 0) 45.65% 50%

   				/* var(--LaranjaRetro) 50% 58.3%,
    			rgba(0, 0, 0, 0) 58.3% 62.45%,
    			var(--vermelhoClaroRetro) 62.45% 70.75%,
    			rgba(0, 0, 0, 0) 70.75% 74.9%,
   				var(--verdeRetro) 74.9% 83.2%,
				rgba(0, 0, 0, 0) 83.2% 87.35%,
				var(--azulClaroRetro) 87.35% 95.65%, 
				rgba(0, 0, 0, 0) 95.65% */
			);

		}
		input[type=password], select {
     		margin-top: 15%;   
  		}
		  input[type=email], select {
    		margin-top: 20%;
  		}
		/*Código que cria e posiciona as listras coloridas na direita*/
		.ArcoRetro2{
			position: absolute;
			display: list-item;
			flex-direction: row;
			width: 50%;
			height: 100%;
			z-index: -1;
			right: 18px;
			animation: grow 1.5s;
			background: linear-gradient(
				to left,
   				var(--LaranjaRetro) 8.3%,
    			rgba(0, 0, 0, 0) 8.3% 12.45%,
    			var(--vermelhoClaroRetro) 12.45% 20.75%,
    			rgba(0, 0, 0, 0) 20.75% 24.9%,
   				var(--verdeRetro) 24.9% 33.2%,
				rgba(0, 0, 0, 0) 33.2% 37.35%,
				var(--azulClaroRetro) 37.35% 45.65%,
				rgba(0, 0, 0, 0) 45.65% 50%
			)
		}
		/*Cores padrão do site*/
		:root{
   --vermelhoClaroRetro: #C76E7A;
   --vermelhoEscuroRetro: #895570;
   --azulClaroRetro: #A1C1D1;
   --azulEscuroRetro:#6A87A5;
   --verdeRetro: #95D2B4;
   --LaranjaRetro: #FAB18B;
   --begeRetro: #EAE5D9;
   --pretoRetro: #1A1A1A;
   --brancoRetro: #f1f1f1;
 }
 /*sistema de camadas que posiciona a navbar na camada mais alta de todos os elementos utilizados*/
 .navbar{
	z-index: 2;
 }
 /*Animação utilizada nas faixas coloridas*/
 @keyframes grow {
    0% {height: 0%;}
    100% {height: 100%;}  
 }
 /*Elemento circular que se posiciona atrás da logo "grease"*/
 .oval {
  width: 250px;
  height: 20%;
  border-radius: 50%;
  margin: auto;
}
/*posicionamento utilizado nos greasers*/
.imgcenter{
	left: 17%;
	bottom: -15%;
	width: 70%;
	position: fixed;
	z-index: -1;
}
@media screen and (max-width: 1025px){
 .imgcenter{
	bottom: -1%;
 }
}
 /*responsividade dos greasers*/
@media screen and (max-width: 426px){
 .imgcenter{
	width: 145%;
	left: -20%;
 }
}
body{
	overflow-y: hidden;
}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilos/stylegeral.css" />
   <link rel="stylesheet" type="text/css" href="estilos/stylecadlogin.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Login</title>
</head>


<body>

<div class="ArcoRetro"></div>
<div class="ArcoRetro2"></div>
	<div class="main">
		
		<?php 
		include('navbar.php');
		?>
		
		<!--Botão para abrir o form-->
		<button class="btnLog" id="btnAcessar" onclick="abrirForm()">
			<p class="p2"> Entrar</p>
		</button>
		<!--O form-->
		<div class="form-popup" id="form-log" data-closable>	
			<div class="principal">		
				<div class="direita">
					<div class="LogIn"><p class="p3">Log In</p></div>
					<button onclick="fecharForm()" class="close" formnovalidate>&times;</button>

					<form class="signIn">
						<input type="email" id="email" name="email" placeholder="Email" required>
						<input type="password" id="pwd" name="pwd" placeholder="Senha"required>
						<button type="submit" class="btnEntrar"value="submit"><p class="p2">Aceitar</p></button>
						<span class="hreflogar"><p class="p1">Não tem uma conta?<a href="#">Clique aqui.</p3></a></span>
					</form> 
				</div>
			</div>
		</div>		
	</div>
	<div class="gradiente"></div>
	<div class="footer"></div>
	<div class="oval"><img src="media_cadastro/greaselogoescola.png" style="width:100%;"></div>
	<div class="imgholderLog">
		
	<!--Função de esconder e abrir pelo botão-->
	<script>
		function abrirForm(){
			document.getElementById("form-log").style.display = "block";
			document.getElementById("btnAcessar").style.display = "none";
		}
		
		function fecharForm() {
			document.getElementById("form-log").style.display = "none";
			document.getElementById("btnAcessar").style.display = "inline";

		}
	</script>
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
</body>
</html>