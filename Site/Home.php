<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos/stylegeral.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
	<style>
		body{
			overflow-x: hidden;
			min-width: 300px;
			
		}
			/*Código que cria e posiciona as listras coloridas na esquerda*/
			.ArcoRetro{
			position: absolute;
			width: 50%;
			height: 100%;
			z-index: -1;
			right: 0px;
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
				rgba(0, 0, 0, 0) 45.65% 50%,
				var(--LaranjaRetro) 50% 58.3%,
    			rgba(0, 0, 0, 0) 58.3% 62.45%,
    			var(--vermelhoClaroRetro) 62.45% 70.75%,
    			rgba(0, 0, 0, 0) 70.75% 74.9%,
   				var(--verdeRetro) 74.9% 83.2%,
				rgba(0, 0, 0, 0) 83.2% 87.35%,
				var(--azulClaroRetro) 87.35% 95.65%, 
				rgba(0, 0, 0, 0) 95.65%  
			);
		}
		.ArcoRetro2{
			position: absolute;
			display: list-item;
			flex-direction: row;
			width: 50%;
			height: 100%;
			z-index: -1;
			left: 0px;
			animation: grow 1.5s;
			bottom: -100%;
			background: linear-gradient(
				to right,
   				var(--LaranjaRetro) 8.3%,
    			rgba(0, 0, 0, 0) 8.3% 12.45%,
    			var(--vermelhoClaroRetro) 12.45% 20.75%,
    			rgba(0, 0, 0, 0) 20.75% 24.9%,
   				var(--verdeRetro) 24.9% 33.2%,
				rgba(0, 0, 0, 0) 33.2% 37.35%,
				var(--azulClaroRetro) 37.35% 45.65%,
				rgba(0, 0, 0, 0) 45.65% 50%,
				var(--LaranjaRetro) 50% 58.3%,
    			rgba(0, 0, 0, 0) 58.3% 62.45%,
    			var(--vermelhoClaroRetro) 62.45% 70.75%,
    			rgba(0, 0, 0, 0) 70.75% 74.9%,
   				var(--verdeRetro) 74.9% 83.2%,
				rgba(0, 0, 0, 0) 83.2% 87.35%,
				var(--azulClaroRetro) 87.35% 95.65%, 
				rgba(0, 0, 0, 0) 95.65%  
			);
		}
		/*Animação utilizadas em geral*/
 			@keyframes grow {
   				 0% {height: 0%;}
   				 100% {height: 100%;}  
 			}
			@keyframes entrance {
				0% {height:0;}
				100% {height:max-height;}
			}
			@keyframes slideLeft {
				0% {opacity: 0;
					transform: translateX(-250px);
					}
				100% {opacity: 1;
					  transform: translateX(0);
					}
			}
			@keyframes slideBottom {
				0% {opacity: 0;
					transform: translateY(250px);
	               }
				100% {opacity: 1;
					  transform: translateY(0);
	                 }
					 /*ex: animation: slideBottom 1s ease-in-out s 1 normal forwards;*/
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
 .separa1 {
   position: absolute;
   display: list-item;
   left: 0;
   top: 96vh;
   width: 100%;
   height: 9%; 
   z-index: 9;
   background: linear-gradient(
    0deg,
    var(--azulClaroRetro) 25%,
    var(--verdeRetro) 25% 50%,
    var(--vermelhoClaroRetro) 50% 75%,
    var(--LaranjaRetro) 75%
  );
}
.separa2 {
   position: absolute;
   display: list-item;
   left: 0;
   bottom: -100%;
   width: 100%;
   height: 9%; 
   background: linear-gradient(
    0deg,
    var(--azulClaroRetro) 25%,
    var(--verdeRetro) 25% 50%,
    var(--vermelhoClaroRetro) 50% 75%,
    var(--LaranjaRetro) 75%
  );
 
  
}
.separa3 {
   position: absolute;
   display: list-item;
   left: 0;
   bottom: -200%;
   width: 100%;
   height: 9%; 
   background: linear-gradient(
    0deg,
    var(--azulClaroRetro) 25%,
    var(--verdeRetro) 25% 50%,
    var(--vermelhoClaroRetro) 50% 75%,
    var(--LaranjaRetro) 75%
  );
}
.tela1{
    width: 50%;
    height: 93vh;
    float: right;
	background-image: url(media_inicio/Danny_zuko_home.png);
	background-repeat: no-repeat;
    background-size: 60%; 
	background-position-y: bottom;
    background-position-x: right;
	position: relative;

 }
 .arcoduplo1{ 
	padding-top: 3.5rem;
    width: 100%;
    height: 92%;
	background-image: url(media_inicio/faixabranca.png);
	float: inherit;
    background-repeat: no-repeat;
	position: inherit;
	background-size: cover;
    background-position-y: 5vh;
    background-position-x: right;
    z-index: -1;
	animation: entrance 1s;
 }
 .textbox{
	margin: auto;
    margin-top: 10%;
    width: 70%;
    color: white;
    border-style: inset;
	padding: 4%;
	border-width: 5px;
	max-height: 300px;
	font-size: calc(40px + 0.390625vw);
	backdrop-filter: blur(3px);
	overflow: auto;
	border-color: var(--brancoRetro);
	animation: slideLeft 1s ease-out 0s 1 normal forwards;
 }
.titulo{
	font-size: xx-large;
    text-align: center;
	font-family: 'RobotoBold';
	color: var(--LaranjaRetro);
}
 .primeiratela{
	display: flex;
	margin-top: 3.5rem;
 }
 .tela2{
	float: left;
	width: 50%;
	font-family: 'Roboto';
 }
 .alignButton{
	display: flex;
    align-items: flex-end;
    justify-content: center;
    height: 20%;
	
 }
 .botaoPrimeiratela{
	z-index: 11;
    height: 50px;
    border-radius: 30px;
    font-size: xx-large;
    color: white;
    background-color: var(--verdeRetro);
    border: none;
    padding: 10px;
    padding-left: 25px;
    padding-right: 25px;
	box-shadow: -5px 11px 16px -11px rgba(0,0,0,0.75);
	border-bottom: 5px solid #7CB997;
	transition: 0.3s;
 }
 .botaoPrimeiratela:hover {
  border-bottom-width: 0;
  transform: translateY(5px);
}
.xs{
	background-image: url(media_inicio/xs.png);
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    z-index: -2;
	background-repeat: no-repeat;
}



 

 @media screen and (max-width: 985px){
	.alignButton{
		height: 45%;
	}
	.arcoduplo1{
	display: none;
	}
	.titulo{
		font-size: large;
	}
	.ArcoRetro{   
	top: 74%;
    width: 100%;
    height: 30%;
	animation: none;
		background: linear-gradient(
				360deg,
   				var(--LaranjaRetro) 8.3%,
    			rgba(0, 0, 0, 0) 8.3% 12.45%,
    			var(--vermelhoClaroRetro) 12.45% 20.75%,
    			rgba(0, 0, 0, 0) 20.75% 24.9%,
   				var(--verdeRetro) 24.9% 33.2%,
				rgba(0, 0, 0, 0) 33.2% 37.35%,
				var(--azulClaroRetro) 37.35% 45.65%,
				rgba(0, 0, 0, 0) 45.65% 50%,
				var(--LaranjaRetro) 50% 58.3%,
    			rgba(0, 0, 0, 0) 58.3% 62.45%,
    			var(--vermelhoClaroRetro) 62.45% 70.75%,
    			rgba(0, 0, 0, 0) 70.75% 74.9%,
   				var(--verdeRetro) 74.9% 83.2%,
				rgba(0, 0, 0, 0) 83.2% 87.35%,
				var(--azulClaroRetro) 87.35% 95.65%, 
				rgba(0, 0, 0, 0) 95.65%  
			);
		}
		.textbox{
			height: 50%;
			font-size: xx-large;
		}
		.tela2{
			width: 100%;
		}
	.tela1{
		display: none;
	}	
 }
	</style>
</head>
<body>
	
	

<div class="main">
	<div class="ArcoRetro"></div>
	<div class="ArcoRetro2"></div>
	
		<?php 
		include('navbar.php');
		
		?>
		<div class="separa1"></div>
		<div class="separa2"></div>
		<div class="separa3"></div>
		<div class="gradiente"></div>
		<div class="separa1"></div>
		<div class="separa2"></div>
		<div class="separa3"></div>
		<div class="primeiratela">
			<div class="tela2">
				<div class="textbox">
					<span class="titulo">
						<p>NOS TEMPOS DA BRILHANTINA</p>
					</span>
						<p>Venha conhecer o incrível figurino por trás de grease,
					  	 o musical que marcou os anos 80.
						</p>
				</div>
 				<div class="xs"> </div>
				<div class="alignButton">
					<button class="botaoPrimeiratela">VER FIGURINO</button>
				</div>
			</div>
		
			<div class="tela1"> 	
			 <div class=arcoduplo1></div>
			</div>	
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
</body>
</html>