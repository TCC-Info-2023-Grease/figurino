<!DOCTYPE html>
<html>
<head>
	<style>
	
	
		input[type=password], select {
     		margin-top: 15%;   
  		}
		  input[type=email], select {
    		margin-top: 20%;
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


<div class="main">
		
		<?php 
		include('navbar.php');
		?><div class="wrapper">
		<div class="oval" alt="Erro em carregar imagem"><img class="greaserslogo" src="media_cadastro/greaselogoescola.png"></div>
		<!--Botão para abrir o form-->
		<div class="botao">
			<button class="btnLog" id="btnAcessar" onclick="abrirForm()">
				<p class="p2"> Entrar</p>
			</button>
		</div>	
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
						<span class="hreflogar"><p class="p1">Não tem uma conta?<a href="Cadastro.php">Clique aqui.</p3></a></span>
					</form> 
				</div>
			</div>
		</div>	
		<div class="img-wrapper" title="Greasers & Logo Grease" alt="Erro em carregar imagem"><div class="imgholderLog"></div>	
	</div>
</div>
	<div class="gradiente"></div>
	<div class="footer"></div>
	<div class="ArcoRetro"></div>
	<div class="ArcoRetro2"></div>
	
	
		
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