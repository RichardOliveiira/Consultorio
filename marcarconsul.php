<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de consultório</title>
</head>

<body>
<?PHP include('menu.php'); ?>
<h1>Cadastro de consultório</h1>
<br>
<script type="text/javascript">
function valida_campos()
	{
		if(document.getElementById('Nome_pac').value == '')
			{
				alert('Por favor, preencha os campos obrigatórios.');
				document.getElementById('Nome_pac').focus();
				return false;

		if(document.getElementById('cpf').value == '')
			{
				alert('Por favor, preencha os campos obrigatórios.');
				document.getElementById('cpf').focus();
				return false;
			}
			if(document.getElementById('Espec_med').value == '')
			{
				alert('Por favor, preencha os campos obrigatórios.');
				document.getElementById('Espec_med').focus();
				return false;
			}
			if(document.getElementById('Nome_med').value == '')
			{
				alert('Por favor, preencha os campos obrigatórios.');
				document.getElementById('Nome_med').focus();
				return false;
			}
			if(document.getElementById('crm_med').value == '')
			{
				alert('Por favor, preencha os campos obrigatórios.');
				document.getElementById('crm_med').focus();
				return false;
			}
		if(document.getElementById('data_consul').value == '')
			{
				alert('Por favor, preencha os campos obrigatórios.');
				document.getElementById('data_consul').focus();
				return false;
				if(document.getElementById('hora_consul').value == '')
			{
				alert('Por favor, preencha os campos obrigatórios.');
				document.getElementById('hora_consul').focus();
				return false;
			}

			if(document.getElementById('num_consultorio').value == '')
			{
				alert('Por favor, preencha os campos obrigatórios.');
				document.getElementById('num_consultorio').focus();




				return false;
			}

			}
	}
</script>
<form action="cadastrarconsulta.php" method="post" onSubmit="return valida_campos();">
	* Nome do Paciênte<br>
    <input type="text" name="Nome_pac" id="Nome_pac">
	<br>
	* CPF<br>
    <input type="text" name="cpf" id="cpf">
	<br>
	* Especialidade Médica<br>
	<input type="text" name="Espec_med" id="Espec_med">
	<br>
	* Nome Médico<br>
	<input type="text" name="Nome_med" id="Nome_med">
	<br>
	* CRM do Médico<br>
	<input type="text" name="crm_med" id="crm_med">
	<br>
	* Data<br>
	<input type="text" name="data_consul" id="data_consul">
	<br>
	* Hora<br>
	<input type="text" name="hora_consul" id="hora_consul">
	<br>
	* Número do consultório<br>
	<input type="text" name="num_consultorio" id="num_consultorio">
	<br>
  <br><input type="submit" value="Cadastrar" class="but_comando">
</form>
</body>
</html>