<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            include "conecta_banco.inc";
            mysql_close($conexao);
        ?>
        <h2>Login Admistrador de Desejos</h2>
        <form method="POST" action="login.php">              
            <label>Login:</label><input type="text" name="login" id="login"><br>
            <label>Senha:</label><input type="password" name="senha" id="senha"><br>
            <input type="submit" value="Entrar" id="entrar" name="entrar"><br>
        </form>
    </body>
</html>