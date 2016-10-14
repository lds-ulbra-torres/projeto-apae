	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bancos</title>
	<link rel="stylesheet" href="<?php echo site_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>
	<div class="container">
		<div class="page-header">
			<h4 style="text-align: center"> Novo Banco </h4> <br>
		</div>
		<form method="POST" action="<?= site_url('create'); ?>"> 
			<div class="row">
				<div class="form-group col-md-offset-4 col-md-4">
					<label for="nome">Nome do Banco</label>
					<input class="form-control" type="text" id="nome" name="bank[name_bank]" required>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-offset-4 col-md-4">
					<label for="telefone">Telefone do Banco</label>
					<input type="text"  class="form-control" attrname="telephone1" id="telefone" name="bank[phone_bank]" required>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-offset-4 col-md-1">
					<a href="<?= site_url(''); ?>" class="btn btn-primary"> Voltar </a>
				</div>
				<div class="col left">
					<button type="submit" class="btn btn-success">Criar</button>
				</div>
			</div>
		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="<?php echo site_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-masker/1.1.0/vanilla-masker.min.js"></script>
	<script type="text/javascript">
		function inputHandler(masks, max, event) {
			var c = event.target;
			var v = c.value.replace(/\D/g, '');
			var m = c.value.length > max ? 1 : 0;
			VMasker(c).unMask();
			VMasker(c).maskPattern(masks[m]);
			c.value = VMasker.toPattern(v, masks[m]);
		}
		var telMask = ['(99) 9999-99999', '(99) 99999-9999'];
		var tel = document.querySelector('input[attrname=telephone1]');
		VMasker(tel).maskPattern(telMask[0]);
		tel.addEventListener('input', inputHandler.bind(undefined, telMask, 14), false);
	</script>
</body>
</html>