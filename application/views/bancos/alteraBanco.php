<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pessoas</title>

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/materialize/css/materialize.min.css'); ?>">
</head>
<body>
	<br><br><br>

	<div class="container">
		<h4> Alterar Dados</h4>
		<form method="POST" action="<?= site_url('alterar-banco').'/'.$banco[0]['id_banco']; ?>" onsubmit="return valida_form(this)">
			<div class="row">
				<div class="input-field col s6">
					<input type="text" disabled value="<?= $banco[0]['id_banco']; ?>" name="banco[id_banco]">
					<label for="nome" >ID</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input type="hidden" value="<?= $banco[0]['id_banco']; ?>" name="banco[id_banco]">
					<input type="text" value="<?= $banco[0]['nome_banco']; ?> " id="nome" name="banco[nome_banco]">
					<label for="nome" >NOME</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input type="text" value="<?= $banco[0]['telefone_banco']; ?> " id="telefone" name="banco[telefone_banco]">
					<label for="telefone" >TELEFONE</label>
				</div>
			</div>
			<div class="row">
				<div class="col left">
					<button type="submit" class="btn orange" >Alterar</button>
				</div>
				<div class="col center">
					<a href="<?= site_url('listar-bancos'); ?>" class="btn red" >Cancelar</a>
				</div>
			</div>
		</form>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.min.js'); ?>"></script>
		<script type="text/javascript" language="javascript">
		function valida_form (){
			if(document.getElementById("nome").value == ""){
				alert('Por favor, preencha o campo nome');
				document.getElementById("nome").focus();
			return false
			}
			if(document.getElementById("telefone").value == ""){
				alert('Por favor, preencha o campo telefone');
				document.getElementById("telefone").focus();
			return false
			}
		}
	</script>

</body>
</html>