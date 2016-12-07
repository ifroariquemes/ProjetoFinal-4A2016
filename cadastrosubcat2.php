<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de subcategorias</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h2>Cadastrar nova subcategoria</h2>
        <?php include "conecta_banco.inc"; $query = mysql_query("SELECT id, nome FROM categorias");?> 
        <form name="categoria" method="post" action="cadastrosubcat.php"> 
            <label>Nome:</label><input type="text" name="nome" id="nome" required=""><br>
            <label>Selecione uma categoria:</label>
            <select name="categoria" id="categoria"> <option>Selecione...</option> <?php while($prod = mysql_fetch_array($query)) { ?> <option value="<?php echo $prod['id'] ?>"><?php echo $prod['nome'] ?></option> <?php } ?> 
            </select><br>
            <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">   
        </form>
        <br><br>
        <a href="index.php">Menu principal</a>

    </body>
</html>
