<?php 
//criar variaveis de conexão
$servidor = "localhost";
$usuario = "Rondinei";
$senha = "123456";
$bd = "bdcurso"; 

//criar a conexao
//mysql_connect(servidor,usuario,senha,bd);
//o mysqli_connect retorna TRUE ou FALSE

$con = mysqli_connect($sevidor,$usuario,$senha,$bd);

//var_dump($con);
if ($con) {
    echo "conectou ao bd";
  }  else {
        echo "falha de conexao com o bd";
    }

