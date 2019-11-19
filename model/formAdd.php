<?php 
    include('conexao.php');

$posto = $_POST['posto'];
$modelo = $_POST['model'];
echo $posto;
echo "<br>";
echo $modelo;
echo "<br>";

    
    $stm = $conexao_pdo->prepare("INSERT INTO posto_modelo (modelo, posto) VALUES (?,?)");
            $stm->bindValue(1,$modelo);
            $stm->bindValue(2,$posto);
            $stm->execute();




/*
for($i = 1; $i<60; $i++){
    echo $_POST['t'.$i];
    //$t[$i] = $_POST['t'.$i];
    
}
*/



    try{


//$tipo = $_POST['tipo'];

        
        
       
?>

<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Informações Salvas Com Sucesso.</strong>
</div>
<?php 
            
       header('Location: incluir-postos.php');     
            
            } catch(PDOException $e) {
            ?>
<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Atenção</strong> Ocorreu um erro ao acessar o banco de dados. Tente novamente em alguns instantes. Se o erro persistir, entre em contato com o suporte e informe a seguinte mensagem de erro: <strong><?=$e->getMessage();?></strong>
</div>
<?php
        }



    

?>
