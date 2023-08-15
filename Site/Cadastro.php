<!DOCTYPE html>
<html>
<head>
	<style>

 /*sistema de camadas que posiciona a navbar na camada mais alta de todos os elementos utilizados*/
 .navbar{
	z-index: 2;
 }
 /*Animação utilizada nas faixas coloridas*/
 @keyframes grow {
    0% {height: 0%;}
    100% {height: 100%;}  
 }
 
/*posicionamento utilizado nos greasers*/



 /*responsividade dos greasers*/
 @media screen and (max-width: 1025px){
 .imgcenter{
	bottom: -1%;
 }
}
 @media screen and (max-width: 426px){
 .imgcenter{
	width: 145%;
	left: -18%;
 }
 button[type=submit], select {
    
}
}
 

	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilos/stylegeral.css" />
   <link rel="stylesheet" type="text/css" href="estilos/stylecadlogin.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Cadastro</title>
</head>


<body>
	

	<div class="main"><?php 
		include('navbar.php');
		?><div class="wrapper">
		
		
		
		<div class="oval" alt="Erro em carregar imagem"><img class="greaserslogo" src="media_cadastro/greaselogoescola.png"></div>
		<!--Botão para abrir o form-->
		<div class="botao">
			<button class="btnLog" id="btnAcessar" onclick="abrirForm()">
				 Cadastrar
			</button>
		</div>
		<!--O form-->
		<div class="form-popup" id="form-log" data-closable>	
			<div class="principal">		
				<div class="direita">
					<div class="LogIn"><p class="p3">Sign In</p></div>
					<button onclick="fecharForm()" class="close" formnovalidate>&times;</button>
					
					<form action="cadastro/cadastro_user.php" class="signIn" method="post">
						<input type="text" id="user" name="user" placeholder="Usuário" required>
						<input type="email" id="email" name="email" placeholder="Email" required>
						<input type="password" id="pwd" name="pwd" placeholder="Senha"required>
						<button class="btnEntrar" type="submit" value="submit"><p class="p2">Aceitar</p></button>
						<span><p class="p1">Já tem uma conta?<a href="Login.php">Clique aqui.</p3></a></span>
					</form> 
				</div>
			</div>
		</div>		
		<div class="img-wrapper" title="Greasers & Logo Grease" alt="Erro em carregar imagem"><div class="imgholderCad"></div>
	</div>
</div>
	<div class="gradiente"></div>
	<div class="footer"></div>
	<div class="ArcoRetro"></div>
	<div class="ArcoRetro2"></div>
	
</div>
	
		
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