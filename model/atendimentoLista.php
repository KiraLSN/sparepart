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
                     
            
          
 
                     
                     
             ?>



        </tbody>

    </table>
</form>
