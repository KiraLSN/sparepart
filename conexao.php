<?php
/**
 * Este arquivo contém as configurações necessárias para
 * o sistema de login funcionar corretamente.
 */


// Variável que verifica se o usuário está logado

// Erro do login

/**
 * PDO - Conexão com a base de dados - Aula 28
 * http://www.tutsup.com/2014/07/23/pdo-em-php/
 */
 
// Variáveis da conexão
session_cache_expire(60);
session_start();

if ( ! isset( $_SESSION['logado'] ) ) {
    $_SESSION['logado'] = false;
    
}

$_SESSION['login_erro'] = false;

$base_dados  = 'skill_db';
$usuario_bd  = 'root';
$senha_bd    = '';
$host_db     = 'localhost';
$charset_db  = 'UTF8';
$conexao_pdo = null; 
$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

// Concatenação das variáveis para detalhes da classe PDO
$detalhes_pdo  = 'mysql:host=' . $host_db . ';';
$detalhes_pdo .= 'dbname='. $base_dados . ';';
$detalhes_pdo .= 'charset=' . $charset_db . ';';

// Tenta conectar
try {
    // Cria a conexão PDO com a base de dados
    $conexao_pdo = new PDO($detalhes_pdo, $usuario_bd, $senha_bd);
} catch (PDOException $e) {
    // Se der algo errado, mostra o erro PDO
    print "Erro: " . $e->getMessage() . "<br/>";
   
    // Mata o script
    die();
}
?>
