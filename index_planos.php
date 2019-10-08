<?php 
	$planos="active";
    $nomeClinica = 'Jonas Gabriela';
	$sobre="";
	$atendimento="";
	$galeria="";
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
			include 'php/head.php';
		?>
    </head>
    <body id="planos" data-spy="scroll" data-target=".navbar" data-offset="60" style=" background-color: #003366;">
        <?php
			include 'php/navegacao.php';
			include 'php/cabecalho.php';
		?>
		<center>
			<div style="width:80%; background-color: rgb(255,250,250);">
				<div class="container-fluid bg-grey">
					<p><h4>Conheça nossos Planos</h4></p><hr>
				</div>
				<div class="container-fluid bg-grey">
					<div class="row text-center slideanim">
						<div class="col-sm-3">
							<div class="thumbnail">
								<img src="Imagens/allianz.jpg" alt="Paris" width="400" height="300">
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumbnail">
								<img src="Imagens/amagis.jpg" alt="New York" width="400" height="300">
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumbnail">
								<img src="Imagens/amil.jpg" alt="San Francisco" width="400" height="300">
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumbnail">
								<img src="Imagens/ammp.jpg" alt="San Francisco" width="400" height="300">
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid bg-grey">
					<div class="row text-center slideanim">
						<div class="col-sm-3">
							<div class="thumbnail">
								<img src="Imagens/assefaz.jpg" alt="Paris" width="400" height="300">
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumbnail">
								<img src="Imagens/caixa.jpg" alt="New York" width="400" height="300">
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumbnail">
								<img src="Imagens/cassi.jpg" alt="San Francisco" width="400" height="300">
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumbnail">
								<img src="Imagens/cemig.jpg" alt="San Francisco" width="400" height="300">
							</div>
						</div>
					</div><br>
				</div>
			</div>
		</center>
        <div class="text-center">
            <a href="#planos">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
        </div>
        <?php
			include 'php/rodape.php'
		?>
    </body>
</html>

