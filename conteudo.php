<?PHP include('menu.php'); 
      include('config.php');
?>

<html>
<head> <meta charset="utf8"></head>
     <body>
    <center>
    <table border="1">
    <tr>
    <th>Nome Paciente</th>
    <th>Especialidade Medica</th>
    <th>Nome do Medico</th>
    <th>CRM do Medico</th>
    <th>Data da consulta</th>
    <th>Hora da Consulta</th>
    <th>Numero do Consultorio</th>
    <th>CPF</th>
    <tr>
</body>
</html>
   

<?PHP
$resultado = "SELECT * FROM tb_consulta";
$resultado_usuarios = mysqli_query($conexao, $resultado);

while ($registro = mysqli_fetch_array ($resultado_usuarios)){


        $Nome_pac = $registro ['Nome_pac'];
        $Espec_med = $registro ['Espec_med'];
        $Nome_med = $registro ['Nome_med'];
        $crm_med = $registro ['crm_med'];
        $data_consul = $registro ['data_consul'];
        $hora_consul = $registro ['hora_consul'];
        $num_consultorio = $registro ['num_consultorio'];
        $cpf = $registro ['cpf'];

   
    echo "<tr>";
    echo "<td>".$Nome_pac."</td>";
    echo "<td>".$Espec_med."</td>";
    echo "<td>".$Nome_med."</td>";
    echo "<td>".$crm_med."</td>";
    echo "<td>".$data_consul."</td>";
    echo "<td>".$hora_consul."</td>";
    echo "<td>".$num_consultorio."</td>";
    echo "<td>".$cpf."</td>";
    echo "</tr>";
    echo "</table>";
    echo "</center>";
}
?>