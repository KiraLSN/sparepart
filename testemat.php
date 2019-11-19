<?php 
include('conexao.php');

$matricula = $_SESSION['matricula'];
$funcionario = $_SESSION['nome'];

global $check;

$check = array();

for($i=0; $i<60; $i++){
    
    $check[$i]= "";
}

global $leva;

$pdo_verifica = $conexao_pdo->prepare("select * from matriz WHERE matricula = ".$matricula." ");
                     $pdo_verifica->execute();
echo $matricula;
                    while($fetch = $pdo_verifica->fetch()){
                        if($fetch['callTest'] = 1){
                            $check[7].="checked";
                        }
                        echo $check[7];
                        
                    }


?>
