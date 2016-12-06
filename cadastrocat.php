<?php
include "conecta_banco.inc";

$nome = $_POST["nome"];

$sql = "INSERT INTO categorias (nome) VALUES";
$sql .= "('$nome')";
$resultado = mysql_query($sql);


mysql_close($conexao);

?>
<script language="JavaScript">
    alert('Categoria incluída com sucesso!');
    location.href='cadastrocat.html';
</script>

