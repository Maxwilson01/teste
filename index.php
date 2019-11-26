<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Relatorio</h2>
  <p>Resultado de linha validas e invalidas:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Linhas Validas</th>
        <th>Linha do arquivo</th>
		<th>Total Valida</th>
		<th>Total Invalida</th>
      </tr>
    </thead>
    <tbody>
	
<?php
$soma = 0;
$totalLinha = 0;

$nomeArquivo = 'bot';

$arquivo = file($nomeArquivo.".txt");

if($arquivo == false) die('O arquivo não existe.');
$quantidadeTotalLinhas = count($arquivo);

$conta = 0;
$totalLinha = $quantidadeTotalLinhas;

echo "<strong>Empresa: </strong>".pathinfo($nomeArquivo.'.csv', PATHINFO_FILENAME);
echo "<br><strong>Total de Registro: </strong>".($quantidadeTotalLinhas);
$cont = 1;
$player = array();
$playerName = '';
$rg = 0;
$dado = array();
for ($for1 = 0; $for1 < $quantidadeTotalLinhas; $for1++) {
	echo "<tr>";
	
	
	
	
	#exit;
	$passaporte = trim(substr($arquivo[$for1],0,11));
	
	if($passaporte == "PASSAPORTE:")
	{
		
		$passaporte = trim(substr($arquivo[$for1],11,18));
		#echo "<br/>".$playerName.' - '.$passaporte;
		
		if(!isset($player['passaporte'][$passaporte]))
		{
			$player['passaporte'][$passaporte] = 0;
			$dado['passaporte'][$passaporte] = 0;
		}
		
		if($passaporte == $passaporte )
		{
			$dado['passaporte'][$passaporte]++;
			$player['passaporte'][$passaporte];
			$passaporte2 = $passaporte;
		}
		
	}
	$nome = trim(substr($arquivo[$for1],0,8));
	if($nome == 'RETIROU:')
	{
		$bandagem = trim(substr($arquivo[$for1],8,4));
		
		$bandagem = str_replace('x', '', $bandagem);
		
		#if(!isset($player['passaporte'][$passaporte2]['bandagem']))
		#{
		#	$player['passaporte'][$passaporte2]['bandagem'] = 0;
		#}
		
		if((int)$passaporte2 === (int)$passaporte2)
		{
			#echo "<br/>";
			
			$player['passaporte'][$passaporte2] += $bandagem ;
			$player['bandagem'] += $bandagem;
			#continue;
		}
		
		#for($for2 = 0; $for2 < $quantidadeTotalLinhas; $for2++)
		#{
		#	if((int)$passaporte2 === 1707)
		#	{
		#		echo "<br/>";
		#		echo $for2;
		#		$player['passaporte'][$passaporte2] += $bandagem ;
		#		continue;
		#	}
			
		#}
		
		#echo "<br/>";
		#echo $bandagem;
		#$playerName = $nome;
		
		#echo "<br/>".$playerName.' - '.$passaporte2;
	}
	
		
	
	$cont = 1;
	
	#if(strlen(substr(trim($arquivo[$for1]),0,20)) > 8 and strlen(substr(trim($arquivo[$for1]),0,20)) < 12) 
	#{
	#	echo "<td>".substr($arquivo[$for1],0,20)."</td>";
	#	$conta++;
	#}else{
	#	echo  "<td>N/A</td>";
	#}
	
	#echo "<td>".substr($arquivo[$for1],0,20)."</td>";
	#echo  "<td>N/A</td>";
	#echo  "<td>N/A</td>";
}

#$soma = (int)$totalLinha-(int)$conta;

#echo "<td><strong><br>Linha Valida: </strong>".$conta."</td>";
#echo "<td><strong><br>Linha Invalidade: </strong>".$soma."</td>";
echo "</tr>";
echo "<br/>";
echo "<pre>";
print_r($player);
?>
    </tbody>
  </table>
</div>
</body>
</html>