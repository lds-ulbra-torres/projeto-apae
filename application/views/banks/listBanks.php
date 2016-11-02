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
			<a class="btn btn-success" href="<?= site_url('add');?>">Novo</a> <br> <br>
			<table class="table table-responsive">
				<thead>
					<tr>
						<th>Código</th>
						<th>Nome</th>
						<th>Telefone</th>
						<th>Agência</th>
						<th>Dígito Verificador</th>
						<th>Conta</th>
						<th>Dígito Verificador</th>
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
						<td><?= $bank['agency_number']; ?></td>
						<td><?= $bank['check_digit_agency']; ?></td>
						<td><?= $bank['account_number']; ?></td>
						<td><?= $bank['check_digit_account']; ?></td>
						<td><a type="button" data-toggle="modal" data-target=".bs-example-modal-sm" class="btn btn-danger" >EXCLUIR</a></td>
						<td><a class="btn btn-warning" href="<?= site_url('edit')."/".$bank['id_bank'];?>">ALTERAR</a></td>
					</tr>
				<?php 
					} 
				}
				?>
				</tbody>
			</table>
		</div>
	</div>

	<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	  <div class="modal-dialog modal-sm" role="document">
	    <div class="modal-content">
	      	<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        			<span aria-hidden="true">&times;</span>
        		</button>
        		<h4 class="modal-title" id="gridSystemModalLabel">Atenção</h4>
      		</div>
      		<div class="modal-body">
          		<div>Deseja realmente excluir esse banco?</div>
        	</div>
      		<div class="modal-footer">
       	 		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        		<button type="button" class="btn btn-success" name="Confirmar" id="Confirmar">Confirmar</button>
      		</div>
	    </div>
	  </div>
	</div>
	<script src="<?php echo site_url('assets/js/jquery-3.1.1.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" language="javascript">
		$('#Confirmar').click(function(e) {
	        e.preventDefault();
	        window.location.href =  "<?= site_url('delete')."/".$bank['id_bank'];?>"
		});
	</script>
</body>
</html>