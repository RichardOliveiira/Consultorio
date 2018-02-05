<?PHP include('menu.php'); ?>
<?PHP

include('config.php');

$Num_consul = $_POST['Num_consul'];
$Nome_consul = $_POST['Nome_consul'];
$in = mysqli_query($conexao,"insert into tb_consultorio (Num_consul,Nome_consul) values ('$Num_consul','$Nome_consul')") or die("Erro");
?>
<div class="msg1 padding20">Cadastro realizado com sucesso</div>