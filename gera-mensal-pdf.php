<?php

include("conexao.php");

use Dompdf\Dompdf;

$codigo = 10;
$mesatual = date('m');
echo mesatual;

switch ($mesatual){
    case "01":
        $strmes = "Janeiro";
        break;
    case "02":
        $strmes = "Fevereiro";
        break;
    case "03":
        $strmes = "Marco";
        break;
    case "04":
        $strmes = "Abril";
        break;
    case "05":
        $strmes = "Maio";
        break;
    case "06":
        $strmes = "Junho";
        break;
    case "07":
        $strmes = "Julho";
        break;
    case "08":
        $strmes = "Agosto";
        break;
    case "09":
        $strmes = "Setembro";
        break;
    case "10":
        $strmes = "Outubro";
        break;
    case "11":
        $strmes = "Novembro";
        break;
    case "12":
        $strmes = "Dezembro";
        break;
}


$pdo_verifica = $conexao_pdo->prepare("select codigo, tipo, alimentacao, otico, mecanico, fita, integridade, sinalizacao, conservacao, data from check_list WHERE month(data) = $mesatual order by data ASC ");
                     $pdo_verifica->execute();
            while($fetch = $pdo_verifica->fetch()){
                
                if($fetch['alimentacao'] == "G"){
                    $cor1 = "green";
                    $alimentacao = "GOOD";
                }else{
                    $alimentacao = "NG";
                    $cor1 = "red";
                }
                
                if($fetch['otico'] == "G"){
                    $otico = "GOOD";
                    $cor2 = "green";
                }else{
                    $otico = "NG";
                    $cor2 = "red";
                }
                
                if($fetch['mecanico'] == "G"){
                    $mecanico = "GOOD";
                    $cor3 = "green";
                }else{
                    $mecanico = "NG";
                    $cor3 = "red";
                }
                
                if($fetch['fita'] == "G"){
                    $fita = "GOOD";
                    $cor4 = "green";
                }else{
                    $fita = "NG";
                    $cor4 = "red";
                }
                
                if($fetch['integridade'] == "G"){
                    $integridade = "GOOD";
                    $cor5 = "green";
                }else{
                    $integridade = "NG";
                    $cor5 = "red";
                }
                
                if($fetch['sinalizacao'] == "G"){
                    $sinalizacao = "GOOD";
                    $cor6 = "green";
                }else{
                    $sinalizacao = "NG";
                    $cor6 = "red";
                }
                
                if($fetch['conservacao'] == "G"){
                    $conservacao = "GOOD";
                    $cor7 = "green";
                }else{
                    $conservacao = "NG";
                    $cor7 = "red";
                }
                
                
                $html .= '<tr>';
			
			    $html .= '<td>' . $fetch['codigo'] . '</td>';
                $html .= '<td>' . $fetch['tipo'] . '</td>';
                $html .='<td style="color: '.$cor1.' ">' . $alimentacao . '</td>';
                $html .= '<td style="color: '.$cor2.' ">' . $otico . '</td>';
                $html .= '<td style="color: '.$cor3.' ">' . $mecanico . '</td>';
                $html .= '<td style="color: '.$cor4.' ">' . $fita . '</td>';
                $html .= '<td style="color: '.$cor5.' ">' . $integridade . '</td>';
                $html .= '<td style="color: '.$cor6.' ">' . $sinalizacao . '</td>';
                $html .= '<td style="color: '.$cor7.' ">' . $conservacao . '</td>';
                $html .= '<td>' . date("d/m/Y", strtotime($fetch['data'])) . '</td>';
                
                $html .= '</tr>';
            }

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1> Relatório de AGV Mensal - '.$strmes.'</h1>
            <table border = 1>
                                <thead>
                                    <tr>
                                        <th>Carro</th>
                                        <th>Tipo</th>
                                        <th>Alimentação</th>
                                        <th>Otico</th>
                                        <th>Mecanico</th>
                                        <th>Fita</th>
                                        <th>Integridade</th>
                                        <th>Sinalização</th>
                                        <th>Conservação</th>
                                        <th>Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                '.$html.'
                                
                </tbody>
                  </table>              
                                
                                
		');

	//Renderizar o html
    ob_clean(); 
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio-mensal.pdf", 
		array(
			"Attachment" => true //Para realizar o download somente alterar para true
		)
	);

?>
