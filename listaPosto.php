<?php
include('conexao.php');
include('login/verifica_login.php');
$matricula = $_SESSION['matricula'];
$funcionario = $_SESSION['nome'];
$modelo = $_POST['modelo'];
//$modelo = "SM-A107";
echo $modelo;


global $check;

$check = array();

for($i=0; $i<=35; $i++){
    
    $check[$i]= "";
}

global $leva;
$leva = 0;


$pdo_verifica = $conexao_pdo->prepare("select * from matrix WHERE matricula = ".$matricula." and modelo = '".$modelo."'");
                     $pdo_verifica->execute();

     while($fetch = $pdo_verifica->fetch()){
         $leva = 1;
                        for ($i = 1; $i<=35; $i++){
                            if($fetch['posto'.$i.''] == 1){
                            $check[$i]="checked";
                            }else{
                                $check[$i]="";
                            }
                            
                        }
                        
                        
                        
                        
                        
                    }
    

if ($leva == 0 ){
            $posto = array();
    $i = 0;
    $pdo_verifica = $conexao_pdo->prepare("select posto from posto_modelo WHERE modelo = ".$modelo." ORDER BY id ASC");
                     $pdo_verifica->execute();

     while($fetch = $pdo_verifica->fetch()){
         $posto[]= $fetch["posto"];
         $i = $i++;
     }
    
    $stm = $conexao_pdo->prepare("INSERT INTO `matrix` (`funcionario`, `matricula`, `modelo`)  values (?,?,?)");
            $stm->bindValue(1, $funcionario);
            $stm->bindValue(2, $matricula);
            $stm->bindValue(3, $modelo);
            $stm->execute();
}
                   


?>

<form method="post" action="formCheck.php">





                                    <table>
                                        <thead>
                                            <tr>
                                                <td>POSTOS</td>
                                                <td>CHECK</td>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
    
    
    
    $pdo_verifica = $conexao_pdo->prepare("select posto from posto_modelo WHERE modelo = '".$modelo."' ");
                     $pdo_verifica->execute();
                                $i = 0;
            while($fetch = $pdo_verifica->fetch()){
                $i = $i+1;
                echo '<tr><td>' . $fetch['posto'] . ' </td>';
                echo '<td><input class="checkbox" type="checkbox" id="t[0]['.$i.']" name="t[0]['.$i.']"  '.$check[$i]. ' value="1" >  </td></tr>';
                echo '<input type="text" name="modelo" value="'.$modelo.'" hidden >';
                
                
                

                
            }
    
                                        ?>
                                        </tbody>
                                    </table>
                                    <button id="btnSend" name="btnSend" type="submit" class="btn uza-btn btn-3 mt-15">Salvar Habilidades </button>

                                </form>

