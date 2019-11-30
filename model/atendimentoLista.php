<?php
include('conexao.php');

?>



<form method="post" class="form-table" name="list_adm">

    <table class="table table-hover">
        <!--<caption>Suas Solicitações</caption> -->
        <thead>
            <tr>

                <th>Funcionario</th>
                <th>Linha</th>
                <th>Material</th>
                <th>Qty</th>
                <th>Motivo</th>
                <th>Status</th>
                <th>In</th>
                <th>Action</th>


            </tr>
        </thead>

        <tbody>
            <?php
           $user= $_SESSION['mysingle1'];
                    
                    //$namae= $_SESSION['nome'];
            
            if (isset($_POST["autenticar"]) && $_POST["autenticar"]!=null){
        
        $mat=$_POST["autenticar"];
                 $pdo_verifica = $conexao_pdo->prepare("select id_solicitacao, retorno, material, qty, line, motivo, status, data_ent, funcionario, matricula, aprovador from solicitacao_materiais WHERE (matricula='$mat' and status = 'Disponivel') or (matricula='$mat' and status = 'Aprovado') or (gen='$mat' and status = 'Disponivel') or (gen='$mat' and status = 'Aprovado') order by status ASC, data_ent DESC");
                     $pdo_verifica->execute();
            while($fetch = $pdo_verifica->fetch()){
                	echo '<tr>';
			
			echo '<td>' . $fetch['funcionario'] . '</td>';
			echo '<td>' . $fetch['line'] . '</td>';
			echo '<td>' . $fetch['material'] . '</td>';
                
			echo '<td>' . $fetch['qty'] . '</td>';
                echo '<td>' . $fetch['motivo'] . '</td>';
                
            
             if ($fetch['status']=="Aprovado"){
                    $cor = "green";
                }else{
                    if ($fetch['status']=="Disponivel"){
                        $cor = "blue";
                    }else{
                        if (($fetch['status']=="Reprovado") or ($fetch['status']=="S/Material")){
                            $cor = "red";
                        }else{
                    $cor = "#FF8C00";
                        }
                    }
                }
            echo '<td><font color='.$cor.'>' . $fetch['status'] . '</font></td>'; 
                $datain = new DateTime($fetch['data_ent']);
                
            echo '<td>' . $datain->format('d/m/Y H:i') . '</td>';
                echo ' <td> <a href="?ap='.$fetch['id_solicitacao'].' & status=Disponivel"><img src="../view/img/bell.png" style="width: 30px"></a><a href="?ap='.$fetch['id_solicitacao'].' & status=S/Material"><img src="../view/img/rejected.png" style="width: 30px"></a></td>';
            echo '</tr>';
            }
        
        echo '<div class= "btnfim" >';
                    
                        
                        
                        echo '<a href="?fim='.$mat.'"><input value="Finalizar Pedido" class="btnfinal btnfim btn uza-btn btn-3 mt-15"></>';
                    
       
        echo '</div>';
                echo '<br>';
                
            }else{
                $stat= "Pendente";
            $pdo_verifica = $conexao_pdo->prepare("select id_solicitacao, tipo_id, retorno, material, qty, line, motivo, status, data_ent, funcionario from solicitacao_materiais WHERE (status = '$stat' or status = 'Disponivel') order by status ASC, data_ent DESC");
                     $pdo_verifica->execute();
            while($fetch = $pdo_verifica->fetch()){
                	echo '<tr>';
			echo '<td>' . $fetch['funcionario'] . '</td>';
			echo '<td>' . $fetch['line'] . '</td>';
			echo '<td>' . $fetch['material'] . '</td>';
                
			echo '<td>' . $fetch['qty'] . '</td>';
                echo '<td>' . $fetch['motivo'] . '</td>';
                
            
             if ($fetch['status']=="Aprovado"){
                    $cor = "green";
                }else{
                    if ($fetch['status']=="Disponivel"){
                        $cor = "blue";
                    }else{
                        if (($fetch['status']=="Reprovado") or ($fetch['status']=="S/Material")){
                            $cor = "red";
                        }else{
                    $cor = "#FF8C00";
                        }
                    }
                }
            echo '<td><font color='.$cor.'>' . $fetch['status'] . '</font></td>'; 
                $datain = new DateTime($fetch['data_ent']);
                
            echo '<td>' . $datain->format('d/m/Y H:i') . '</td>';
                echo ' <td> <a href="?ap='.$fetch['id_solicitacao'].' & status=Disponivel"><img src="../view/img/bell.png" style="width: 30px"></a><a href="?ap='.$fetch['id_solicitacao'].' & status=S/Material"><img src="../view/img/rejected.png" style="width: 30px"></a></td>';
            
			
              
            }
                     
            
                
            }
            
            
            
          
 
                     
                     
             ?>



        </tbody>

    </table>
</form>
