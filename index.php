<?php 
	$sobre="active";
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
	$mostrahorarios="";
	session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<?php
			include 'php/head.php'
		?>
    </head>
    <body id="about" data-spy="scroll" data-target=".navbar" data-offset="60">
		<?php
			include 'php/navegacao.php';
			include 'php/cabecalho.php';
		?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Sobre nós</h2><hr>
                    <h4>Empresa fundada em 01/03/1996 pelo Doutor Jonas Gabriela Junior Nascimento do Carvalo, com o objetivo de levar até o paciente os melhores médicos do mercado, cubrindo todas as áreas da saúde e tendo como o paciente nosso principal foco de satisfação.</h4><br>
                    
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon fa fa-ambulance logo slideanim"></span>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-grey">
            <div class="row">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-globe logo slideanim"></span>
                </div>
                <div class="col-sm-8">
                    <h2>Nossos valores</h2><hr>
                    <h4><strong>Valores:</strong> Humanização: Respeitar a diversidade no processo de promoção da saúde, proporcionando relacionamentos diferenciados, solidários e responsáveis.</h4><br>
                </div>
            </div>
        </div>
		<div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Nossa Visão</h2><hr>
					<h4><strong>VISÃO:</strong> Ser um centro de excelência em assistência hospitalar, reconhecido em alta complexidade, sustentável, tendo em mente que  cuidado pleno à saúde acontece na harmonia entre o conhecimento e o acolhimento.</h4>
					
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon fa fa-heartbeat logo slideanim"></span>
                </div>
            </div>
        </div>
		<div class="container-fluid bg-grey">
            <div class="row">
                <div class="col-sm-4">
                    <span class="glyphicon fa fa-hospital-o logo slideanim"></span>
                </div>
                <div class="col-sm-8">
					<h2>Nossa Missão</h2><hr>
                    <h4><strong>MISSÃO:</strong> Proporcionar a todos, igualitariamente, tratamento qualificado e humanizado de excelência em saúde, promovendo a satisfação, respeitando a respectiva dignidade, encorajando as boas práticas e favorecendo a melhoria contínua da qualidade.</h4><br>
                </div>
            </div>
        </div>
		<div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Nossa Ética</h2><hr>
					<h4><strong>Ética:</strong> Ser e agir de forma íntegra e responsável, atendendo aos preceitos de igualdade e transparência.</h4>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-ok-sign logo slideanim"></span>
                </div>
            </div>
        </div>
		<div class="container-fluid bg-grey">
            <div class="row">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-plane logo slideanim"></span>
                </div>
                <div class="col-sm-8">
					<h2>Objetivo de Excelência</h2><hr>
                    <h4><strong>Excelência:</strong> Atuar na satisfação das necessidades dos usuários e na melhoria contínua dos processos e dos resultados.</h4><br>
                </div>
            </div>
        </div>
		<div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Ideologia de Sustentabilidade</h2><hr>
					<h4><strong>Sustentabilidade:</strong> Gerir recursos de forma social, econômica e ambientalmente responsável, com vistas à sustentabilidade institucional.</h4>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-apple logo slideanim"></span>
                </div>
            </div>
        </div>
		<div class="container-fluid bg-grey">
            <div class="row">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-eye-open logo slideanim"></span>
                </div>
                <div class="col-sm-8">
					<h2>Atendimento Pessoal</h2><hr>
                    <h4><strong>Desenvolvimento Humano:</strong> Promover a valorização pessoal e profissional, por meio do desenvolvimento contínuo das potencialidades humanas</h4><br>
                </div>
            </div>
        </div>
		<div class="text-center">
            <a href="#about">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
        </div>
		<?php
			include 'php/rodape.php'
		?>
    </body>
</html>

