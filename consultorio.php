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
		if(document.getElementById('Num_consul').value == '')
			{
				alert('Por favor, preencha os campos obrigatórios.');
				document.getElementById('Num_consul').focus();
				return false;
			}
		if(document.getElementById('Nome_consul').value == '')
			{
				alert('Por favor, preencha os campos obrigatórios.');
				document.getElementById('Nome_consul').focus();
				return false;

			}
	}
</script>
<form action="cadastrarconsultorio.php" method="post" onSubmit="return valida_campos();">
	* Número do Consulótio<br>
    <input type="text" name="Num_consul" id="Num_consul">
	<br>
	* Nome do Consultório<br>
	<input type="text" name="Nome_consul" id="Nome_consul">
	<br>
  <br><input type="submit" value="Cadastrar" class="but_comando">
</form>
</body>
</html>