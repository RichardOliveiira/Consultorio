<?PHP include('menu.php'); ?>
<?PHP

session_destroy(); 
?>
<div class="msg1 padding20">Logout efetuado com sucesso!<br><br>Redirecionando para a página inicial...</div>
<script type="text/javascript">
setTimeout("window.location='index.php';",4000);
</script>