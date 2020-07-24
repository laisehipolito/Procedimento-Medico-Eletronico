<?php

/* Insira aqui a pasta que deseja salvar o arquivo*/
$uploaddir = '/teste';

$uploadfile = $uploaddir . $_FILES['arquivo']['name'];

if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)){
echo "Arquivo Enviado";}
else {echo "Arquivo não enviado";}

?>