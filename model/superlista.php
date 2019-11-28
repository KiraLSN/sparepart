<?php
include('conexao.php');
include('login/verifica_login.php');
?>


<form method="post" class="form-table" name="list_adm">

    <table class="table table-hover">
        <!--<caption>Suas Solicitações</caption> -->
        <thead>
            <tr>

                <th>Funcionario</th>

                <th>Material</th>
                <th>Qty</th>
                <th>Localização</th>
                <th>Status</th>
                <th>Decisao</th>


            </tr>
        </thead>

        <tbody>
            <?php
           $user= $_SESSION['mysingle1'];
                    
                    //$namae= $_SESSION['nome'];
            $namae = $_SESSION['nome'];
            
            $stat= "Pendente";
            $pdo_verifica = $conexao_pdo->prepare("select id_solicitacao, tipo_id, retorno, material, qty, line, status, data_ent, funcionario from solicitacao_materiais WHERE (aprovador = '$user' and status = '$stat') or (funcionario = '$namae' and status = 'Aprovado') or (funcionario = '$namae' and status = 'Disponivel') order by data_ent DESC");
                     $pdo_verifica->execute();
            while($fetch = $pdo_verifica->fetch()){
                	echo '<tr>';
			echo '<td>' . $fetch['funcionario'] . '</td>';
			
			echo '<td>' . $fetch['material'] . '</td>';
			echo '<td>' . $fetch['qty'] . '</td>';
            echo '<td>' . $fetch['line'] . '</td>';
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
                if ($fetch['funcionario'] == $namae){
                  echo '<td> <a href="?rp='.$fetch['id_solicitacao'].'"><img src="img/lixeira.png" style="width: 30px"></a>';
                    
                }else{
                    echo ' <td><a href="?ap='.$fetch['id_solicitacao'].' & status=Aprovado"><img src="img/acept.png" style="width: 30px"></a><a href="?ap='.$fetch['id_solicitacao'].' & status=Reprovado"><img src="img/rejected.png" style="width: 30px"></a></td>';
                }
                echo '</tr>';
            
            
			
              
            }
                     
            
        if ( isset( $_GET['ap'] ) ) {
	// Delete de cara (sem confirmação)
                   
	$pdo_insere = $conexao_pdo->prepare("UPDATE solicitacao_materiais SET status=? WHERE id_solicitacao=? ");
	$pdo_insere->execute( array($_GET['status'], (int)$_GET['ap'] ));
    
    
	//echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=indices_adm.php'>";

	// Redireciona para o index.php
	//header('location: index.php');
}
                     
        if ( isset( $_GET['rp'] ) ) {
	// Delete de cara (sem confirmação)
                   
	$pdo_insere = $conexao_pdo->prepare("DELETE FROM solicitacao_materiais WHERE id_solicitacao=? ");
	$pdo_insere->execute( array( (int)$_GET['rp'] ));
    
    //echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=indices_adm.php'>";
	
	// Redireciona para o index.php
	//header('location: index.php');
}
                     
                     
             ?>



        </tbody>

    </table>
</form>
