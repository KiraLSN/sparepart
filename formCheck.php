<?php 
    include('conexao.php');

include('login/verifica_login.php');

$matricula = $_SESSION['matricula'];
$tecnico = $_SESSION['nome'];
$rfid = $_SESSION['rfid'];
$modelo = $_POST['modelo'];
global $t;
global $result;
global $pos;
$t = $_POST['t'][0];

echo "Matricula: ".$matricula;
echo "<br>";
echo "Modelo: ".$modelo;
echo "<br>";

foreach ($t as $values =>$id){
    
    
    switch ($values) {
         
        case 1:
            $posto = "posto1";
            break;
            case 2:
            $posto = "posto2";
            break;
            case 3:
            $posto = "posto3";
            break;
            case 4:
            $posto = "posto4";
            break;
            case 5:
            $posto = "posto5";
            break;
            case 6:
            $posto = "posto6";
            break;
            case 7:
            $posto = "posto7";
            break;
            case 8:
            $posto = "posto8";
            break;
            case 9:
            $posto = "posto9";
            break;
            case 10:
            $posto = "posto10";
            break;
            case 11:
            $posto = "posto11";
            break;
            case 12:
            $posto = "posto12";
            break;
            case 13:
            $posto = "posto13";
            break;
            case 14:
            $posto = "posto14";
            break;
            case 15:
            $posto = "posto15";
            break;
            case 16:
            $posto = "posto16";
            break;
            case 17:
            $posto = "posto17";
            break;
            case 18:
            $posto = "posto18";
            break;
            case 19:
            $posto = "posto19";
            break;
            case 20:
            $posto = "posto20";
            break;
            case 21:
            $posto = "posto21";
            break;
            case 22:
            $posto = "posto22";
            break;
            case 23:
            $posto = "posto23";
            break;
            case 24:
            $posto = "posto24";
            break;
            case 25:
            $posto = "posto25";
            break;
            case 26:
            $posto = "posto26";
            break;
            case 27:
            $posto = "posto27";
            break;
            case 28:
            $posto = "posto28";
            break;
            case 29:
            $posto = "posto29";
            break;
            case 30:
            $posto = "posto30";
            break;
            case 31:
            $posto = "posto31";
            break;
            case 32:
            $posto = "posto32";
            break;
            case 33:
            $posto = "posto33";
            break;
            case 34:
            $posto = "posto34";
            break;
            case 35:
            $posto = "posto35";
            break;
            
            
    }
    
    echo $posto .": ". $values;
    echo "<br>";
    
    $pdo_insere = $conexao_pdo->prepare('UPDATE matrix SET  '.$posto.'=? WHERE matricula=? and modelo=?');
			$pdo_insere->execute( array( 1, $matricula, $modelo  ) );
}




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
