<?php include("cabecalho.php") ?>
<?php include("conecta.php") ?>

</br>
</br>
</br>

<?php
	
	

	$pesquisar = $_POST['pesquisar'];
	$result_clientes = "SELECT * FROM cliente WHERE nome LIKE '%$pesquisar%' LIMIT 5";
	$resultado_clientes = pg_query($conexao, $result_clientes);
	
	
	while($rows_clientes = pg_fetch_array($resultado_clientes)){
		echo "Nome dos clientes: ".$rows_clientes['nome']."<br>";
	}
?>