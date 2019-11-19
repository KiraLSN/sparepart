<?php
$search = '11167546';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://105.103.22.151/main/modules/hhp_ws/control/crt_send_info.php?search=$search");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$output = array();
$output = curl_exec($ch);
curl_close($ch);

$decodeJson = json_decode($output);
$dados=$decodeJson->dados;
$nome = $dados[0]->nome;
$matricula = $dados[0]->matricula;
$rfid = $dados[0]->rfid;
$departamento = $dados[0]->departamento;



//echo "<pre>";
echo print_r($output);

//echo "</pre>";
//echo "<br>";
//echo $rfid;
?>