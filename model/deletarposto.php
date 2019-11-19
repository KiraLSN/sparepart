<?php
include("conexao.php");


echo $_POST['id'];
$pdo_verifica = $conexao_pdo->prepare("select modelo, idposto from posto_modelo WHERE id = '".$_POST['id']."'");
                     $pdo_verifica->execute();
                                $i = 0;
            while($fetch = $pdo_verifica->fetch()){
                $i = $i+1;
                $modelo = $fetch['modelo'];
                $idposto = $fetch['idposto'];
                echo "Modelo: ".$modelo;
                echo "<br>";
                echo "idPOsto: ".$idposto;
                echo "<br>";
                echo "Del: ".$_POST['id'];
                echo "<br>";
                
}

$pdo_verifica = $conexao_pdo->prepare("select MAX(idposto) from posto_modelo WHERE modelo = '".$modelo."'");
                     $pdo_verifica->execute();
                                $i = 0;
            while($fetch = $pdo_verifica->fetch()){
                $i = $i+1;
                $maior = $fetch['MAX(idposto)'];
                
}

if ( isset( $_POST['id'] ) ) {
	// Delete de cara (sem confirmação)
                
    
   // echo "Identificador: ".$identidade;
    echo "<br>";
	$pdo_insere = $conexao_pdo->prepare("DELETE FROM posto_modelo WHERE idposto=".$idposto." ");
	$pdo_insere->execute();
    
    
    $cont = $maior - $idposto;
    $j = 0;
    $k = 0;
    echo  "contador: ".$cont;
    echo "<br>";
    echo "maior: ".$maior;
    echo "<br>";
    for($i = $maior; $i>=$cont; $i--){
        $j++;
        echo $j." ". $k;
        echo "<br>";
        $pdo_insere = $conexao_pdo->prepare("UPDATE posto_modelo SET idposto=? WHERE idposto=? and modelo = ? ");
	$pdo_insere->execute( array($maior - $j, $maior - $k, $modelo) );
        $k++;
    }
    
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=incluir-postos.php'>";

	// Redireciona para o index.php
	//header('location: index.php');
}
?>