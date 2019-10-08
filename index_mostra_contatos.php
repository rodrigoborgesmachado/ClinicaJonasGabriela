<?php 
	$sobre="";
    $nomeClinica = 'Jonas Gabriela';
	$atendimento="";
	$galeria="";
	$planos="";
	$contatos="";
	$adiciona_contato="";
	$login="";
	$mostracontatos="active";
	$adiciona_contato="";
	$mostrafuncionarios="";
	$mostrahorarios="";
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include 'php/head.php';
		?>
<?php

function ImprimeDados($conn)
{
	$SQL = "SELECT * FROM CONTATO;";
	$result = $conn->query($SQL);
	if (!$result)
    alert('Ocorreu uma falha ao gerar o relatorio de testes: ' . $conn->error);
    if ($result->num_rows > 0)
	{
		while ($row = $result->fetch_assoc())
		{
			$nome=$row["Name"];
			$email=$row["Email"];
			$comentario=$row["Comentario"];
			echo"
				<tr>
					<td>$nome</td>
					<td>$email</td>
					<td>$comentario</td>
				</tr>";	
		}
    }
    else alert("N„o h· coment·rios!");
}
?>

    </head>
	<body id="mostra" data-spy="scroll" data-target=".navbar" data-offset="60" style=" background-color: #003366;">
		<?php
			include 'php/navegacao.php';
			include 'php/cabecalho.php';
		?>
		<div class="container-fluid" style="width:70%; background-color: rgb(255,250,250);">
			<div class="slideanim">
				<h3 class="text-primary">Coment√°rios</h3>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Nome</th>
								<th>E-mail</th>
								<th>Coment√°rio</th>
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