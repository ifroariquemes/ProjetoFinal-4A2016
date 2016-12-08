<!--<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de categorias</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
        <h2>Cadastrar novo produto</h2> 
        <form method="POST" action="cadastroprod.php">
            <label>Nome:</label><input type="text" name="nome" id="nome" required=""><br>
            <label>Valor:</label><input type="number" step="0.01" name="valor" id="valor" required=""><br>
            <label>Descrição:</label><input type="text" name="descricao" id="descricao" required=""><br>
           require 'ProdutoEscolha/index.php';?><br>
            <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
        </form>
        
    
</html>-->

<html>
	<head>
		<title>Produtos</title>

	</head>
	<body>
            <h2>Cadastrar novo produto</h2> 
            <form method="POST" action="cadastroprod.php">
                <label>Nome:</label><input type="text" name="nome" id="nome" required=""><br>
                <label>Valor:</label><input type="number" step="0.01" name="valor" id="valor" required=""><br>
                <label>Descrição:</label><input type="text" name="descricao" id="descricao" required=""><br>
		<?php
			$con = mysql_connect( 'localhost', 'root', '' ) ;
			mysql_select_db( 'teste', $con );
		?>
		<label for="ID">Categoria:</label>
		<select name="ID" id="ID">
			<option value=""></option>
			<?php
				$sql = "SELECT ID, nome
						FROM categorias
						ORDER BY nome";
				$res = mysql_query( $sql );
				while ( $row = mysql_fetch_assoc( $res ) ) {
					echo '<option value="'.$row['ID'].'">'.$row['nome'].'</option>';
				}
			?>
                </select><br>

		<label for="ID_cat">Subcategorias:</label>
		<select name="ID_cat" id="ID_cat">
			<option value="">-- Escolha uma subcategoria --</option>
                </select><br>

		<script src="http://www.google.com/jsapi"></script>
		<script type="text/javascript">
		  google.load('jquery', '1.3');
		</script>		

		<script type="text/javascript">
		$(function(){
			$('#ID').change(function(){
				if( $(this).val() ) {
					$('#ID_cat').hide();
					$('.carregando').show();
					$.getJSON('ProdutoEscolha/subcategorias.ajax.php?search=',{ID: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value=""></option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].ID_cat + '">' + j[i].nome + '</option>';
						}	
						$('#ID_cat').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#ID_cat').html('<option value="">– Escolha uma subcategoria –</option>');
				}
			});
		});
		</script>
                <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">                
            </form>
            <br>
            <a href="index.php">Menu principal</a>
	</body>
</htm>
