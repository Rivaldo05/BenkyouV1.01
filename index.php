<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Benkyou 1.0</title>
	<link rel="stylesheet" type="text/css" href="estilo_index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
</head>
<body>

	<?php  /*$pasta_atual = dirname(__FILE__);
	 include('header-footer/header.php');*/
	include_once (dirname(__FILE__).'/header-footer/header.php');
	 ?>

	<div id="frase"><h2>Escolha o que deseja estudar hoje</h2></div>


	<main class="conteudo_princ">
		<div class="materia fisica">
			<div class="flex_materia">
				<div class="materia_img">
					<img src="imagens/fisica img.png" alt="imagem do 'logo' da lista de conteúdo de fisica">	
				</div>
				<h1>Fisica</h1>
				<div class="linha"></div>
			</div>
			<div class="lista_conteudo">
				<ul>
					<li><a href="fisica/ondulatoria.php">Ondulatória</a></li>
					<li><a href="fisica/calorimetria.php">Calorimetria</a></li>
					<li><a href="fisica/Leis de Newton.php">Leis de Newton</a></li>
					<li><a href="fisica/MRU.php">Movimento retilineo uniforme</a></li>
					<li><a href="fisica/MRUV.php">Movimento Retilineo uniforme variado</a></li>
				</ul>
			</div>
		</div>
		<div class="materia quimica">
			<div class="flex_materia">
				<div class="materia_img">
					<img src="imagens/quimica img.png" alt="imagem do logo da lista de quimica">	
				</div>
				<h1>Quimica</h1>
				<div class="linha"></div>
			</div>

			<div class="lista_conteudo">
				<ul>						
					<li><a href="#">Misturas</a></li>
					<li><a href="#">Transformações da matéria</a></li>
					<li><a href="#">Equações quimicas</a></li>
					<li><a href="#">Termoquímica</a></li>
					<li><a href="#">Equilibrio quimico</a></li>
					<li><a href="#">Oxido redução</a></li>
				</ul>
			</div>
		</div>

		<div class="materia matematica">
			<div class="flex_materia">
				<div class="materia_img">
					<img src="imagens/matematica img.png" alt="imagem do logo da lista de matematica">	
				</div>
				<h1>Matematica</h1>
				<div class="linha"></div>
			</div>

			<div class="lista_conteudo">
				<ul>
					<li style="color: white; text-transform: uppercase; font-size: 1.01em;">Em desenvolvimento</li>
				</ul>
			</div>

		</div>

		<div class="materia biologia">
			<div class="flex_materia">
				<div class="materia_img">
					<img src="imagens/biologia img.png" alt="imagem do logo da lista de biologia">	
				</div>
				<h1>Biologia</h1>
				<div class="linha"></div>
			</div>

			<div class="lista_conteudo">
				<ul>
					<li style="color: white; text-transform: uppercase; font-size: 1.01em;">Em desenvolvimento</li>
				</ul>
			</div>

		</div>

	</main>



</body>
</html>