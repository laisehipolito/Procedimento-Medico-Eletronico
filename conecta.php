<?php 
			
	//Conexão Postgres
	$conexao = pg_connect("host=localhost port=5433 dbname=projeto user=postgres password=root ") or die ("Não foi possível conectar ao servidor PostGreSQL");
	echo "Conexão efetuada com sucesso!!";
	
	
?>