<?php 
	$galeria="active";
    $nomeClinica = 'Jonas Gabriela';
	$sobre="";
	$atendimento="";
	$planos="";
	$contatos="";
	$adiciona_contato="";
	$login="";
	$mostracontatos="";
	$adiciona_contato="";
	$mostrafuncionarios="";
	$mostrahorarios="";
	session_start();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
		<?php
			include 'php/head.php'
		?>
    </head>
    <?php
		include 'php/navegacao.php';
		include 'php/cabecalho.php';
	?>
	<style>
	
		img:hover { 
			border-style: solid;
			border-color: red;
			border-width: 2px;
		}
	</style>
	<script>
		$(document).ready(function() {
				
			$(".imgGalery").each(function(i) {
				$(this).delay(200*i).fadeIn();
			});
			
			$(".imgGalery").hover(
			
				function(){
					$(this).animate({
						width: '440px',
						height: '250px',
					});
				},
				
				function(){
					$(this).animate({
						width: '400px',
						height: '200px',
					});
				}			
			);
			
		});
	</script>
	<body  id="galeria" data-spy="scroll" data-target="scroll" data-offset="60" style=" background-color: #003366;">
		<div class="container-fluid text-center bg-grey" style="width:80%; background-color: rgb(255,250,250);">
			<h2>A Clínica</h2><br>
			<h4>Conheça nosso espaço</h4><hr>
			<?php

			try
			{
				$conn = conecta();
				$SQL="";
				$SQL = "SELECT CAMINHO, DESCRICAO
					FROM IMAGENS";
				if (! $result = $conn->query($SQL))
					throw new Exception('Ocorreu uma falha ao buscar o endereco: ' . $conn->error);
					//else alert('Deu certo');
				if ($result->num_rows > 0)
				{
					$i=0;
					while($row =$result->fetch_assoc()){
						if($i == 0)
							echo'<div class="row text-center slideanim">';
						
						$caminho=$row["CAMINHO"];
						$descricao=$row["DESCRICAO"];
						echo '		<div class="col-sm-4">
										<div class="thumbnail">
											<img class = "imgGalery" src='.$caminho.'alt="Paris">
											<p><strong>'.$descricao.'</strong></p>
										</div>
									</div>';
						$i++;
						if($i==3){
							$i=0;
							echo '</div>';
						}
						
					}
					if($i!=0) echo '</div>';
				}  
				
				}
				catch (Exception $e)
				{
					$msgErro = $e->getMessage();
				}

			if ($conn != null)
			  $conn->close();
			echo '<div>
				<iframe width="660" height="415" src="https://www.youtube.com/embed/o0FFhpSb7rE" frameborder="0" ></iframe>
			</div><br><br>
			<div class="text-center">
				<a href="#galeria">
					<span class = "imgGalery" class="glyphicon glyphicon-chevron-up"></span>
				</a>
			</div>'
			?>
		<div>
        <?php
			include 'php/rodape.php';
		?>
		</div>
    </body>
</html>

