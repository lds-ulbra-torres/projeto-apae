	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bancos</title>
	<link rel="stylesheet" href="<?php echo site_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>
	<div class="container">
		<div class="col s12">
			<div class="page-header">
				<h4 style="text-align: center"> Bancos </h4> <br>
			</div>
			<a class="btn btn-success" href="<?= site_url('create-bank');?>">Novo</a> <br> <br>
			<table class="table table-responsive">
				<thead>
					<tr>
						<th>Código</th>
						<th>Nome</th>
						<th>Telefone</th>

					</tr>
				</thead>
				<tbody>
				<?php
					if(count($banks)>=1){
					foreach($banks as $bank){
				?> 
					<tr>
						<td><?= $bank['id_bank'];?> </td>
						<td><?= $bank['name_bank']; ?></td>
						<td><?= $bank['phone_bank']; ?></td>
						<td><a class="btn btn-danger" onclick="confirma_exclusao()" href="<?= site_url('delete-bank')."/".$bank['id_bank'];?>">EXCLUIR</a></td>
						<td><a class="btn btn-warning" href="<?= site_url('update-bank')."/".$bank['id_bank'];?>">ALTERAR</a></td>
					</tr>
				<?php 
					} 
				}
				?>
				</tbody>
			</table>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="<?php echo site_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" language="javascript">
			function confirma_exclusao(){
				alert("Deseja excluir?");
			}
	</script>
</body>
</html>