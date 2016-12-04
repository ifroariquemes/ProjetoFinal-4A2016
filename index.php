<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrador</title>
    </head>
    <body>
        <h2>Admistrador de desejos</h2>
        <?php
            $login_cookie = $_COOKIE['login'];
            if(isset($login_cookie)){
                echo"Bem vindo, <font color='green'>$login_cookie </font><br>"; 
                echo "<a href='logout.php'>Sair</a><br><br>";
                echo '<a href="cadastrocat.html">Cadastrar nova categoria</a><br>';
                echo '<a href="cadastrosubcat2.php">Cadastrar nova subcategoria</a><br>';
                echo '<a href="cadastroprod2.php">Cadastrar novo produto</a>';
            }
        ?>
    </body>
</html>
