<?php 
	$sobre="active";
    $nomeClinica = 'Jonas Gabriela';
	session_start();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
		<?php
			include 'php/head.php'
		?>
    </head>
    <body id="sobre" data-spy="scroll" data-target=".navbar" data-offset="60">
		<?php
			include 'php/navegacao.php';
			include 'php/cabecalho.php';
		?>
        <div id="about" class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Sobre nós</h2><br>
                    <h4>Bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</h4><br>
                    <p>Bla  bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>

                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-signal logo"></span>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-grey">
            <div class="row">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-globe logo slideanim"></span>
                </div>
                <div class="col-sm-8">
                    <h2>Nossos valores</h2><br>
                    <h4><strong>MISSÃO:</strong> Bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</h4><br>
                    <p><strong>VISÃO:</strong> Bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                </div>
            </div>
        </div>

        <div id="services" class="container-fluid text-center">
            <h2>Serviços</h2>
            <h4>Serviços que oferecemos</h4>
            <br>
            <div class="row slideanim">
                <div class="col-sm-4">
                    <i class="fa fa-child logo-small" aria-hidden="true"></i>
                    <h4>PEDIATRIA</h4>
                    <p>Acompanhe a saúde e crescimento de seus filhos</p>
                </div>
                <div class="col-sm-4">
                    <i class="fa fa-female logo-small" aria-hidden="true"></i>
                    <h4>OBSTETRÍCIA</h4>
                    <p>Cuide do bebê antes de ele chegar</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-tint logo-small"></span>
                    <h4>ONCOLOGIA</h4>
                    <p>Tratamento especializado para câncer</p>
                </div>
            </div>
            <br><br>
            <div class="row slideanim">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-apple logo-small"></span>
                    <h4>NUTRICIONISTA</h4>
                    <p>Cuide do bem estar do corpo</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-eye-open logo-small"></span>
                    <h4>OFTALMOLOGIA</h4>
                    <p>Para ver o mundo com bons olhos</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-heart logo-small"></span>
                    <h4>CARDIOLOGIA</h4>
                    <p>Para saúde de seu coração</p>
                </div>
            </div>
        </div>
		<div class="text-center">
            <a href="#sobre">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
        </div>
        <?php
			include 'php/rodape.php'
		?>
    </body>
</html>

