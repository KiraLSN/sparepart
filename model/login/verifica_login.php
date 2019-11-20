<?php
// Verifica se estamos conectados ao BD
if ( ! isset( $conexao_pdo ) || ! is_object( $conexao_pdo ) ) {
	exit('Erro na conexão com o banco de dados.');
}

// Une $_SESSION e $POST para verificação
if ( isset( $_POST ) && ! empty( $_POST ) ) {
	$dados_usuario = $_POST;
} else {
	$dados_usuario = $_SESSION;
}

// Verifica se os campos de usuário e senha existem
// E se não estão em branco
if ( 
	isset ( $dados_usuario['mysingle1'] ) && 
	isset ( $dados_usuario['senha'] )   &&
  ! empty ( $dados_usuario['mysingle1'] ) &&
  ! empty ( $dados_usuario['senha'] ) 
) {
	// Faz a consulta do nome de usuário na base de dados
	$pdo_checa_user = $conexao_pdo->prepare('SELECT * FROM usuarios WHERE mysingle = ? LIMIT 1');
	$verifica_pdo = $pdo_checa_user->execute( array( $dados_usuario['mysingle1'] ) );
	
	// Verifica se a consulta foi realizada com sucesso
	if ( ! $verifica_pdo ) {
		$erro = $pdo_checa_user->errorInfo();
		exit( $erro[2] );
	}
	
	// Busca os dados da linha encontrada
	$fetch_usuario = $pdo_checa_user->fetch();
	
	// Verifica se a senha do usuário está correta
	if ( crypt( $dados_usuario['senha'], $fetch_usuario['senha'] ) === $fetch_usuario['senha'] ) {
		// O usuário está logado
		$_SESSION['logado']       = true;
		$_SESSION['nome'] = $fetch_usuario['nome'];
		$_SESSION['mysingle1']      = $fetch_usuario['mysingle'];
        $_SESSION['matricula']      = $fetch_usuario['matricula'];
        $_SESSION['cargo']      = $fetch_usuario['cargo'];
        $_SESSION['aprovador']      = $fetch_usuario['aprovador'];
        $_SESSION['gen']      = $fetch_usuario['gen'];
		//$_SESSION['user_id']      = $fetch_usuario['user_id'];
	} else {
		// Continua deslogado
		$_SESSION['logado']     = false;
		
		// Preenche o erro para o usuário
		$_SESSION['login_erro'] = 'Usuário ou senha inválidos';
	}
}
?>
