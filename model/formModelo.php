<?php 
    include('conexao.php');




$modelo = $_POST['modelo'];









/*
for($i = 1; $i<60; $i++){
    echo $_POST['t'.$i];
    //$t[$i] = $_POST['t'.$i];
    
}
*/



    try{
$stm = $conexao_pdo->prepare("INSERT INTO `modelos` (`nome`)  values (?)");
            $stm->bindValue(1, $modelo);
            $stm->execute();

//$tipo = $_POST['tipo'];

        
        
       
?>

<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Informações Salvas Com Sucesso.</strong>
</div>
<?php 
            
       header('Location: good.php');     
            
            } catch(PDOException $e) {
            ?>
<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Atenção</strong> Ocorreu um erro ao acessar o banco de dados. Tente novamente em alguns instantes. Se o erro persistir, entre em contato com o suporte e informe a seguinte mensagem de erro: <strong><?=$e->getMessage();?></strong>
</div>
<?php
        }



    

?>
