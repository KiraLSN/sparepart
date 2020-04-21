<?php
include('conexao.php');

?>








<script>
    var btnPermission = document.getElementById("btn_permissao");
    if (Notification.permission !== "default") {
        btnPermission.style.display = "none";
    } else {
        btnPermission.style.display = "inline-block";
    }
    btnPermission.onclick = evt => {
        Notification.requestPermission();
        Notification.silent();

    }



    function spawnNotification(opcoes) {


        var n = new Notification(opcoes.title, opcoes.opt);
        n.onclick = function() {
            window.open("http://localhost/sparepart");
            notification.close();
        }

        var audio = new Audio('../view/audio/midna.mp3');
        audio.addEventListener('canplaythrough', function() {
            audio.play();
        });

    }

</script>
<!--
<button type="button" id="btn_push">Push Notification</button>
-->
<button id="btn_permissao">PERMITIR NOTIFICACAO</button>
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
                $notifica = 0;
            while($fetch = $pdo_verifica->fetch()){
                
                 if($notifica < $fetch['id_solicitacao']){
                    $notifica = $fetch['id_solicitacao'];
                }
                	echo '<tr>';
			
			echo '<td>' . $fetch['funcionario'] . ' <p style="font-size: 8px">'.$fetch['matricula'].'</p></td>';
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
            $pdo_verifica = $conexao_pdo->prepare("select id_solicitacao, tipo_id, retorno, material, qty, line, motivo, status, data_ent, funcionario, matricula from solicitacao_materiais WHERE (status = '$stat' or status = 'Disponivel' or STATUS = 'Aprovado') order by status ASC, data_ent DESC");
                     $pdo_verifica->execute();
                $notifica = 0;
            while($fetch = $pdo_verifica->fetch()){
                
                
                
                if($notifica < $fetch['id_solicitacao']){
                    $notifica = $fetch['id_solicitacao'];
                }
                
                
                	echo '<tr>';
			echo '<td>' . $fetch['funcionario'] . '<p style="font-size: 8px">'.$fetch['matricula'].'</p></td>';
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
            
            $contnotify = 0;
            $pdo_verifica = $conexao_pdo->prepare("select notifica from notifica WHERE (notifica >= '$notifica') ");
                     $pdo_verifica->execute();
            while($fetch = $pdo_verifica->fetch()){
                $contnotify = $contnotify + 1;
                //echo $notifica;
                
            }
            
            if($contnotify > 0){
                //echo "Tudo Certo";
            }else{
                try{
    $pdo_insere = $conexao_pdo->prepare('UPDATE notifica SET notifica='.$notifica.' WHERE id="notifica"');
			$pdo_insere->execute();
}catch(Exception $e){
    echo 'Exceção capturada: ', $e->getMessage(), "\n";
}
                
                ?>
            <script>
                spawnNotification({
                    opt: {

                        icon: "../view/img/submarine.gif",
                        vibrate: [200, 100, 200],
                        data: 'Dados'

                    },
                    title: "Você tem nova Solicitação",
                    body: "Solicitação Simples",
                    link: "http://105.112.244.57/spareproject/index.php",

                })

            </script>



            <?php
                
                
                
                
                
            }
          
 
                     
                     
             ?>



        </tbody>

    </table>


</form>
