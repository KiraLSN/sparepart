<?php
//echo dirname( $_SERVER['PHP_SELF']);
  
if ( $_SESSION['logado'] != true ) {
	header('location: ' . dirname( $_SERVER['PHP_SELF'] ) . '/view/login.php');
}

?>
