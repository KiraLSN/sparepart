<?php
// Inclui o arquivo de configuração

include('conexao.php');
//include('login/verifica_login.php');
//$useraprov = $_SESSION['aprovador'];
$mat =  $_SESSION['matricula'];

$mysingle = $_POST['mysingle'];
$senha = $_POST['senha'];
$matricula = $_POST['matricula'];

$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$gen = $_POST['gen'];

echo $mysingle;
echo '<br>';
echo $senha;
echo '<br>';
echo $matricula;
echo '<br>';

echo $nome;
echo '<br>';
echo $cargo;
echo '<br>';
echo $gen;
echo '<br>';


try{
    $pdo_insere = $conexao_pdo->prepare('UPDATE usuarios SET mysingle=?, senha=?, matricula=?, nome=?, cargo=?, gen=? WHERE matricula='.$mat.'');
			$pdo_insere->execute( array($mysingle, crypt( $senha, "spr" ), $matricula, $nome, $cargo, $gen ) );
}catch(Exception $e){
    echo 'Exceção capturada: ', $e->getMessage(), "\n";
}
			
            
            header("Location: ../view/goodedit.php");
           
	
        
        
        
        ?>
