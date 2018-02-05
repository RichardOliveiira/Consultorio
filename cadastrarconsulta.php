<?PHP include('menu.php'); ?>
<?PHP
include('config.php');

$Nome_pac = $_POST['Nome_pac'];
$Espec_med = $_POST['Espec_med'];
$Nome_med = $_POST['Nome_med'];
$crm_med = $_POST['crm_med'];
$data_consul = $_POST['data_consul'];
$hora_consul = $_POST['hora_consul'];
$num_consultorio = $_POST['num_consultorio'];
$cpf = $_POST['cpf'];

$in = mysqli_query($conexao,"insert into tb_consulta (Nome_pac,Espec_med,Nome_med,crm_med,data_consul,hora_consul,num_consultorio,cpf) values ('$Nome_pac','$Espec_med','$Nome_med','$crm_med','$data_consul','&hora_consul','&num_consultorio','&cpf')") or die("Erro");
?>
<div class="msg1 padding20">Cadastro realizado com sucesso</div>