<?php
include('conexao.php');


$modelo = $_POST['modelo'];
$posto = $_POST['posto'];

$pdo_verifica = $conexao_pdo->prepare("select MAX(idposto) from posto_modelo WHERE modelo = '".$modelo."' ORDER BY id DESC ");
                     $pdo_verifica->execute();
                                $i = 0;
            while($fetch = $pdo_verifica->fetch()){
                $i = $i+1;
                $maior = $fetch['MAX(idposto)'];
                echo  $fetch['MAX(idposto)'];
}
if(isset($posto) and $posto != null){
    
    
                
                
                
                 $stm = $conexao_pdo->prepare("INSERT INTO posto_modelo (modelo, posto, idposto) VALUES (?,?,?)");
            $stm->bindValue(1,$modelo);
            $stm->bindValue(2,$posto);
                $stm->bindValue(3,$maior+1);
            $stm->execute();

                
            }
    
    



    //echo $modelo;


?>


<form method="post" action="deletarposto.php">

                                    <table>
                                        <thead>
                                            <tr>
                                                <td>POSTOS</td>
                                                <td>ACTION</td>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            

                                            <?php 
    
    
    
    $pdo_verifica = $conexao_pdo->prepare("select id, posto, idposto from posto_modelo WHERE modelo = '".$modelo."' ORDER BY idposto DESC ");
                     $pdo_verifica->execute();
                                $i = 0;
            while($fetch = $pdo_verifica->fetch()){
                $i = $i+1;
                echo '<tr><td>' . $fetch['posto'] . ' </td>';
                echo '<td><input type="text" name="id" id="id" value="' . $fetch['id'] . '" hidden ><input style="width: 30px" type="image" src="img/lixeira.png"  id="excluir" name="excluir" > '.$fetch['id'].' </td>';
                
                echo '<input type="text" name="modelo" value="'.$modelo.'" hidden >';
                
                
                

                
            }
    
                                        ?>
                                        </tbody>
                                    </table>
                                    

                            </form>    

<form method="post" action="index.php">

    <button id="btnSend" name="btnSend" type="submit" class="btn uza-btn btn-3 mt-15">Salvar Habilidades </button>

</form>



<?php 



?>

