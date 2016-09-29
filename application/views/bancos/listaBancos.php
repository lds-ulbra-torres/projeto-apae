<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pessoas</title>

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/materialize/css/materialize.min.css'); ?>">
</head>
<body>
	<div class="container">
		<div class="col s12">
			<h4> Lista de Bancos </h4>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Telefone</th>
					</tr>
				</thead>
				<tbody>
				<?php  foreach($bancos as $banco){?> 
					<tr>
						<td><?= $banco['id_banco'];?> </td>
						<td><?= $banco['nome_banco']; ?></td>
						<td><?= $banco['telefone_banco']; ?></td>
						<td><a class="right btn red" href="<?= site_url('deletar-banco')."/".$banco['id_banco'];?>">EXCLUIR</a></td>
						<td><a class="btn orange" href="<?= site_url('alterar-banco')."/".$banco['id_banco'];?>">ALTERAR</a></td>
					</tr>
				<?php 
					} 
				?>
				</tbody>
			</table>
			<a class="btn grey" href="<?= site_url('home');?>">Voltar</a>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.min.js'); ?>"></script>
</body>
</html>