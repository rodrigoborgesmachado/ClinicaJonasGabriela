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
	$mostrafuncionarios="";
	$mostrahorarios="active";
	session_start();
?>

<?php

function ImprimeDados($conn)
{
	$SQL = "SELECT MEDI.NOME AS medico, MEDI.ESPECIALIDADE AS especialidade, CONSUL.DATA AS data, CONSUL.HORA AS hora, PACI.NOME AS paciente, PACI.TELEFONE AS telefone
			FROM FUNCIONARIO MEDI 
			INNER JOIN AGENDA CONSUL 
				ON CONSUL.CODFUNCIONARIO = MEDI.CODFUN 
			INNER JOIN PACIENTE PACI 
				ON PACI.CODPACIENTE = CONSUL.CODPACIENTE";
	$result = $conn->query($SQL);
	if (!$result)
    alert('Ocorreu uma falha ao gerar o relatorio de testes: ' . $conn->error);
    if ($result->num_rows > 0)
	{
		while ($row = $result->fetch_assoc())
		{
			$medico=$row["medico"];
			$especialidade=$row["especialidade"];
			$data=$row["data"];
			$hora=$row["hora"];
			$hora/=100	;
			$paciente=$row["paciente"];
			$telefone=$row["telefone"];
			echo"
				<tr>
					<td>$medico</td>
					<td>$especialidade</td>
					<td>$data - $hora</td>
					<td>$paciente</td>
					<td>$telefone</td>
				</tr>";	
		}
    }
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
				<h3 class="text-primary">Horários Agendados</h3>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Doutor</th>
								<th>Especialidade</th>
								<th>Data - Hora</th>
								<th>Paciente</th>
								<th>Número</th>
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