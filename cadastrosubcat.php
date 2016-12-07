<?php
include "conecta_banco.inc";

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];

$sql = "INSERT INTO subcategorias (nome,ID) VALUES";
$sql .= "('$nome', '$categoria')";
$resultado = mysql_query($sql);

mysql_close($conexao);

?>
<script language="JavaScript">alert('Subcategoria incluída com sucesso!');
location.href='cadastrosubcat2.php';</script>

