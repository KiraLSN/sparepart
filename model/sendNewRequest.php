<?php
    include("conexao.php"); 
include("login/verifica_login.php");


$useraprov = $_SESSION['aprovador'];
$mys = $_SESSION['mysingle1'];
$gen = $_SESSION['gen'];

if (isset($_POST['btnCadastrar'])) {
        // Se existir, o form já foi enviado
    
    if(isset($_POST['check'])){
                    $retorno = 1;
                        
                     }else{
                      $retorno=0;
                        
                     }
        try {
            if ($useraprov == 1){
                $status='Aprovado';
            $stm = $conexao_pdo->prepare("insert into solicitacao_materiais (matricula, tipo_sol, tipo_id, retorno, material, qty, line, motivo, aprovador, status, funcionario, gen) values (?,?,?,?,?,?,?,?,?,?,?,?)");
            $stm->bindValue(1, $_SESSION['matricula']);
            $stm->bindValue(2,$_POST['tiposol']);
            $stm->bindValue(3,$_POST['list2']);
            $stm->bindValue(4,$retorno);
            $stm->bindValue(5,$_POST['material']);
            $stm->bindValue(6,$_POST['qty']);
            $stm->bindValue(7,$_POST['linha']);
            $stm->bindValue(8,$_POST['motivo']);
            $stm->bindValue(9,$_POST['aprovador']);
            $stm->bindValue(10,$status);
            $stm->bindValue(11,$_SESSION['nome']);
                $stm->bindValue(12,$_SESSION['gen']);
            $stm->execute();
            }else{
                $status='Pendente';
            $stm = $conexao_pdo->prepare("insert into solicitacao_materiais (matricula, tipo_sol, tipo_id, retorno, material, qty, line, motivo, aprovador, status, funcionario, gen) values (?,?,?,?,?,?,?,?,?,?,?,?)");
            $stm->bindValue(1, $_SESSION['matricula']);
            $stm->bindValue(2,$_POST['tiposol']);
            $stm->bindValue(3,$_POST['list2']);
            $stm->bindValue(4,$retorno);
            $stm->bindValue(5,$_POST['material']);
            $stm->bindValue(6,$_POST['qty']);
            $stm->bindValue(7,$_POST['linha']);
            $stm->bindValue(8,$_POST['motivo']);
            $stm->bindValue(9,$_POST['aprovador']);
            $stm->bindValue(10,$status);
            $stm->bindValue(11,$_SESSION['nome']);
                $stm->bindValue(12,$_SESSION['gen']);
            $stm->execute();
            }
            header("Location: ../view/good.php");
           
?>
<!--
<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Cadastrado com sucesso.</strong>
</div>
-->
<?php 
            
            
            
            } catch(PDOException $e) {
            ?>
<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Atenção</strong> Ocorreu um erro ao acessar o banco de dados. Tente novamente em alguns instantes. Se o erro persistir, entre em contato com o suporte e informe a seguinte mensagem de erro: <strong><?=$e->getMessage();?></strong>
</div>
<?php
        }
    }

            
            ?>
