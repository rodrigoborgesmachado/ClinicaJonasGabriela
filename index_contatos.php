<?php 
	$contatos="active";
    $nomeClinica = 'Jonas Gabriela';
	$sobre="";
	$atendimento="";
	$galeria="";
	$planos="";
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
    <body id="contatos" data-spy="scroll" data-target=".navbar" data-offset="60">
        <?php

			include 'php/navegacao.php';
			include 'php/cabecalho.php';
			if(@$_REQUEST['func'] == '1'){
				alert("Mensagem enviada com sucesso.");
			}
			if(@$_REQUEST['func'] == '2'){
				alert("Mensagem não enviada.");
			}
		?>
		<div id="contact" class="container-fluid bg-grey">
                <div class="col-sm-6">

                    <h2 class="text-center">CONTATO</h2>
                    <div class="row">
						<form action="php/banco.php?id=3" method="POST">
							<div class="col-sm-5">
								<p>Mande-nos um email que respondemos em até 1 dia útil</p>
								<p><span class="glyphicon glyphicon-map-marker"></span> Uberlândia, MG</p>
								<p><span class="glyphicon glyphicon-phone"></span> +55 34 1234-4321</p>
								<p><span class="glyphicon glyphicon-envelope"></span> atendimento@jonasgabriela.com</p>
							</div>
							<div class="col-sm-7 slideanim">
								<div class="row">
									<div class="col-sm-6 form-group">
										<input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
									</div>
									<div class="col-sm-6 form-group">
										<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
									</div>
								</div>
									<textarea class="form-control" name="comments" placeholder="Comment" rows="10" cols="30" required></textarea><br><br>
									<div class="row">
										<div class="col-sm-12 form-group">
											<?php
											if(logado())echo '<a href="index_mostra_contatos.php"><button type="button" value="" id="mostrar" class="btn btn-default pull-right">Comentários feitos</button></a>'
											?>
											<button class="btn btn-default pull-right" type="submit">Enviar</button>
										</div>
									</div>
							</div>
						</form>
                    </div>

                </div>
            </div>
			<div class="text-center">
				<a href="#contatos">
					<span class="glyphicon glyphicon-chevron-up"></span>
				</a>
			</div>
            <?php
				include 'php/rodape.php'
			?>
    </body>
</html>

