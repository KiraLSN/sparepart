<?php
// Inclui o arquivo de configuração
include('conexao.php');
include('login/verifica_login.php');
$useraprov = $_SESSION['aprovador'];

$mysingle=0;
$id=0;
$erro = false;

if(isset($_POST['aprovador'])){
                    $aprovador = 1;
                        
                     }else{
                      $aprovador=0;
                        
                     }

if(isset($_POST['servidor'])){
                    $aprovador = 2;
                        
                     }else{
                      $aprovador=0;
                        
                     }
                     
                     if ( isset( $_POST ) && ! empty( $_POST ) ) {
	// Cria as variáveis
	foreach ( $_POST as $chave => $valor ) {
		$$chave = $valor;
		// Verifica se existe algum campo em branco
		if ( empty ( $valor ) ) {
			// Preenche o erro
			$erro = 'Existem campos em branco. (Campos)';
            
            
           
		}
	}
                     }
    
    // Verifica se as variáveis foram configuradas
	if ( empty( $mysingle ) || empty( $senha )) {
		$erro = 'Existem campos em branco (Variaveis).';
	}
	
	// Verifica se o usuário existe
	$pdo_verifica = $conexao_pdo->prepare('SELECT * FROM usuarios WHERE mysingle = ?');
	$pdo_verifica->execute( array( $mysingle ) );
	
	// Captura os dados da linha
	$id = $pdo_verifica->fetch();
	$id = $id['id'];
    
    
	
	// Verifica se tem algum erro
	if ( ! $erro ) {
		// Se o usuário existir, atualiza
		if ( ! empty( $id ) ) {
			?>
<div class="alert alert-sucess">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Usuário já Existente.</strong>
</div>
<?php
            } else {
			$pdo_insere = $conexao_pdo->prepare('INSERT INTO usuarios (mysingle, senha, matricula, aprovador, nome, cargo, gen) VALUES (?, ?, ?, ?, ?, ?, ?)');
			$pdo_insere->execute( array($mysingle, crypt( "spr", $senha ), $matricula, $aprovador, $nome, $cargo, $gen ) );
            
            header("Location: ../view/good.php");
           
		}
    }
        
        
        
        ?>
