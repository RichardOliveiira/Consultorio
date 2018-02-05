<?PHP include('menu.php'); ?>
<?PHP

include('config.php');

$nome_usu = ucwords($_POST['nome_usu']);
$email_usu = $_POST['email_usu'];
$senha_usu = $_POST['senha_usu'];
$crm_usu = $_POST['crm_usu'];
$idade_usu = $_POST['idade_usu'];
$in = mysqli_query($conexao,"insert into tb_usuario (nome_usu,email_usu,senha_usu) values ('$nome_usu','$email_usu','$senha_usu')") or die("Erro");
?>
<div class="msg1 padding20">Cadastro realizado com sucesso</div>