<html>
	<head>
		<title>Site em PHP</title>
		<link rel="stylesheet" type="text/css" href="css/formato.css">
	</head>
	<body>
	
	<div id="geral">
		<div id="topo">
			<?php include "topo.php";?>
		</div>
		<div id="menu">
			<?php include "menu.php";?>
		</div>
		<div id="conteudo">
		<br><br>
			<form action="cad_contato.php" method="POST">
				<label class="legenda">Nome:</label><br>
				<input type="text" name="nome" class="campos" placeholder="Preencha este campo com o seu nome completo!" required><br>
				
				<label class="legenda">E-mail:</label><br>
				<input type="email" name="email" class="campos" placeholder="Digite o seu e-mail aqui...!" required><br>
				
				<label class="legenda">Assunto:</label><br>
				<input type="assunto" name="assunto" class="campos" placeholder="Sobre o que deseja falar?!" required><br>
				
				<label class="legenda">Conteudo:</label><br>
				<textarea name="conteudo" class="campo2" placeholder="Digite no maximo de 150 caracteres o conteudo" maxlength="150"></textarea><br>
				<input type="submit" value="Enviar" class="bt_enviar">
				
			</form>
		</div>
		<div id="rodape">
			<?php include "rodape.php";?>
		</div> 
	</div><!--fim da div geral-->
	</body>
</html>