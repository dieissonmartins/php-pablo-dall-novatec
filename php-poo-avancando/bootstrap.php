<?php
require __DIR__.'/autoload.php';


//comentario 1
//echo '</br>'.$pessoa->setNome('Dieisson Martins');
//echo '</br>'.$pessoa->setIdade(21);
//echo '</br>'.$pessoa->setAltura(1.76);
//echo '</br>';
//
//var_dump($pessoa);

//comentario 2
//var_dump( (new DieissonMartins\DB\Db)->conexao() );
//var_dump( (new DieissonMartins\DB\MySql)->conexao() );
//var_dump( (new DieissonMartins\DB\Postgres)->conexao() );

//comentario 3
//try {
//	(new DieissonMartins\DB\ORM)->select(false);
//}catch (DieissonMartins\MyException $error ){
//	echo $error->getMessage();
//}

$pessoa = new  DieissonMartins\Pessoa\Pessoa;
$pessoa->nome = 'Dieisson';
$pessoa->idade = 21;
$pessoa->altura = 1.70;

echo $pessoa;

$garota = new DieissonMartins\Pessoa\Pessoa;
$garota->nome = 'Launa'; 
$garota->idade = 18; 
$garota->altura = 1.67;

echo $garota; 

//var_dump( (new DieissonMartins\DB\ORM)->select(false) );

?>