	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bancos</title>

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/materialize/css/materialize.min.css'); ?>">
</head>
<body>
	<div class="container">
		<h4> Novo Banco </h4> <br>
		<form method="POST" action="<?= site_url('novo-banco'); ?>" onsubmit="return valida_form(this)"> 
			<div class="row">
				<div class="input-field col s6">
					<input type="text" id="nome" name="banco[nome_banco]">
					<label for="nome" >Nome do Banco</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input type="text"  attrname="telephone1" id="telefone" name="banco[telefone_banco]">
					<label for="telefone" >Telefone do Banco</label>
				</div>
			</div>
			<div class="row">
				<div class="col center">
					<a href="<?= site_url(''); ?>" class="btn blue"> Voltar </a>
				</div>
				<div class="col left">
					<button type="submit" class="btn green" >Criar</button>
				</div>
			</div>
		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/valida.js'); ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-masker/1.1.0/vanilla-masker.min.js"></script>
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