<?php


            


if ( $_SESSION['logado'] != true ) {
    
    $search = $dados_usuario['login'];
        
        
		$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://105.103.22.151/main/modules/hhp_ws/control/crt_send_info.php?search=$search");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$output = array();
$output = curl_exec($ch);
curl_close($ch);

$decodeJson = json_decode($output);
$dados=$decodeJson->dados;
$nome = $dados[0]->nome;
$matricula = $dados[0]->matricula;
$rfid = $dados[0]->rfid;
$departamento = $dados[0]->departamento;
    
    
    if($matricula != null){
            $stm = $conexao_pdo->prepare("INSERT INTO `funcionarios` (`nome`, `matricula`, `rfid`, `setor`)  values (?,?,?,?)");
            $stm->bindValue(1, $nome);
            $stm->bindValue(2, $matricula);
            $stm->bindValue(3, $rfid);
            $stm->bindValue(4, $departamento);
            $stm->execute();
        
        header('location: ' . dirname( $_SERVER['PHP_SELF'] ) . '/good.php');
        
    }else{
        
        
       echo "<script>location.href='nogood.php'; </script>";
    }
        
        
        

    
    
	
}
