<?PHP
session_start();
if(isset($_SESSION['nome_usu_sessao']))
	{
		?>
        <div class="padding20"><?PHP echo 'Olá '.$_SESSION['nome_usu_sessao'].', Seja bem vindo!'; ?></div><?PHP
	}
?>
<link rel="stylesheet" href="style.css">
<div class="menu">Menu</div>
<p><a href="conteudo.php">Conteúdo restrito</a></p>
<p><a href="cadastro.php">Cadastro de médicos</a></p>
<p><a href="consultorio.php">Cadastro de consultórios</a></p>
<p><a href="Marcarconsul.php">Marcar Consulta</a></p>
<p><a href="login.php">Login</a></p>
<p><a href="logout.php">Logout</a></p>
