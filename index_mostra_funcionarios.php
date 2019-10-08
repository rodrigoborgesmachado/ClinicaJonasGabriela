<?php 
	$sobre="";
    $nomeClinica = 'Jonas Gabriela';
	$atendimento="";
	$galeria="";
	$planos="";
	$contatos="";
	$adiciona_contato="";
	$login="";
	$mostracontatos="";
	$adiciona_contato="";
	$mostrafuncionarios="active";
	$mostrahorarios="";
	session_start();
?>

<?php
function getEndereco_cidade($idendereco){
	$conn=conecta();
	$cidade= "";
	$SQLENDERECO = " SELECT CIDADE FROM ENDERECOFUN WHERE IDENDERECO= ".$idendereco.";";  
	$result = $conn->query($SQLENDERECO);
	if (!$result)
    alert('Ocorreu uma falha ao gerar o relatorio de testes: ' . $conn->error);
	if ($result->num_rows > 0){
		$row = $result->fetch_assoc();
		$cidade= $row["CIDADE"];
	}
	return $cidade;
}

function getEndereco_logradouro($idendereco){
	$conn=conecta();
	$logradouro= "";
	$SQLENDERECO = " SELECT LOGRADOURO FROM ENDERECOFUN WHERE IDENDERECO= ".$idendereco.";";  
	$result = $conn->query($SQLENDERECO);
	if (!$result)
    alert('Ocorreu uma falha ao gerar o relatorio de testes: ' . $conn->error);
	if ($result->num_rows > 0){
		$row = $result->fetch_assoc();
		$logradouro= $row["LOGRADOURO"];
	}
	return $logradouro;
}

function ImprimeDados($conn)
{
	$SQLFUNCIONARIO=$result=$arrayFuncionario = "";
	$SQLFUNCIONARIO = "SELECT * FROM FUNCIONARIO;";
	$result = $conn->query($SQLFUNCIONARIO);
	if (!$result)
    alert('Ocorreu uma falha ao gerar o relatorio de testes: ' . $conn->error);
    if ($result->num_rows > 0)
	{
		while ($row = $result->fetch_assoc())
		{
			$logradouro=getEndereco_logradouro($row["IDENDERECO"]);
			$cidade=getEndereco_cidade($row["IDENDERECO"]);
			$nome=$row["NOME"];
			$sexo=$row["SEXO"];
			$cargo=$row["CARGO"];
			$rg=$row["RG"];
			echo"
				<tr>
					<td>$nome</td>
					<td>$sexo</td>
					<td>$cargo</td>
					<td>$rg</td>
					<td>$logradouro</td>
					<td>$cidade</td>
				</tr>";	
		}
    }
  
  return $arrayFuncionario;
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include 'php/head.php';
		?>
    </head>
	<body id="mostra" data-spy="scroll" data-target=".navbar" data-offset="60" style=" background-color: #003366;">
		<?php
			include 'php/navegacao.php';
			include 'php/cabecalho.php';
		?>
		<div class="container-fluid" style="width:70%; background-color: rgb(255,250,250);">	
			<div class="slideanim">
				<h3 class="text-primary">Funcionários Cadastrados</h3>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Nome</th>
								<th>Sexo</th>
								<th>Cargo</th>
								<th>RG</th>
								<th>Logradouro</th>
								<th>Cidade</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$conn = conecta();
							ImprimeDados($conn);  
							?>    
						</tbody>
					</table>
				</h3>	
			</div>
		</div>
		<div class="text-center">
			<a href="#mostra">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a>
		</div>
        <?php
			
			include 'php/rodape.php'
		?>
	</body>
</html>