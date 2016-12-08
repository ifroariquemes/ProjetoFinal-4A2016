<?php
include "conecta_banco.inc";

$nome = $_POST["nome"];
$valor = $_POST["valor"];
$descricao = $_POST["descricao"];
$categoria = $_POST["ID"];
$subcategorias = $_POST["ID_cat"];

$sql = "INSERT INTO produtos (nome,valor, descricao,ID,ID_cat) VALUES";
$sql .= "('$nome', '$valor','$descricao','$categoria','$subcategorias')";
$resultado = mysql_query($sql);

mysql_close($conexao);

?>
<script language="JavaScript">alert('Produto incluído com sucesso!');
location.href='cadastroprod2.php';</script>

