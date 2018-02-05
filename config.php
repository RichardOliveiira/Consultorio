<?PHP

$conexao = mysqli_connect('localhost','root','') or die("Erro de conexão");
$banco = mysqli_select_db($conexao,'consultorio') or die("Erro ao selecionar o banco de dados");
?>