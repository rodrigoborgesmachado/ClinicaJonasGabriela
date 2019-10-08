
<?php 
    setlocale(LC_ALL, NULL);
    setlocale(LC_ALL, 'pt_BR.utf-8');
    $nomeClinica = 'Jonas Gabriela';	
	function logado(){
		if(isset($_SESSION['logado'])){
			if($_SESSION['logado']==1){
				if($_SESSION['cont']==0)alert("Bem Vindo!!");	
				$_SESSION['cont']++;
				return true;
			}
			if($_SESSION['logado']==2)
				alert("Email ou senha incorretos");	
		}
		return false;
	}
	include 'banco.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<style>
			#img1 {
			 float: left;
			 border-radius: 5px;
			 margin-right: 10px;
			}
		</style>
		<script>
			topo();
		</script>
	</head>
    <body>
		
		<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <img id="img1" src="Imagens/principal.png" width="50px" height="50px">
					<a class="navbar-brand" href="#ClinicaJonasGabriela"> <?php echo $nomeClinica; ?> </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
						<?php
							echo '<li class = "'.$sobre.'"><a href="index.php"><span class="glyphicon glyphicon-blackboard"></span>SOBRE</a></li>';
						?>
						<?php
							echo '<li class = "'.$atendimento.'"><a href="index_atendimento.php"><span class="glyphicon glyphicon-wrench"></span>ATENDIMENTO</a></li>';
						?>
						<?php
							echo '<li class = "'.$galeria.'"><a href="index_galeria.php"><span class="glyphicon glyphicon-picture"></span>GALERIA</a></li>';
						?>
						<?php
							echo '<li class = "'.$planos.'"><a href="index_planos.php"><span class="glyphicon glyphicon-check"></span>PLANOS</a></li>';
						?>
						<?php
							echo '<li class = "'.$contatos.'"><a href="index_contatos.php"><span class="glyphicon glyphicon-envelope"></span>CONTATO</a></li>';
						?>
						<?php
							if(logado()){
								echo '<li class = "'.$login.'"><div class="dropdown"><button class="btn btn-lg glyphicon glyphicon-list" style=" background-color: #003366;color: #FFFFFF;font-size: 18px;" type="button" data-toggle="dropdown"></button> <ul class="dropdown-menu" style=" background-color: #003366;color: #FFFFFF;font-size: 18px;"><li id="lista" class = "'.$adiciona_contato.'"><a href="index_adicona_contatos.php"><span class="glyphicon glyphicon-knight"></span>Novo Funcionário</a></li><li id="lista" class = "'.$mostrafuncionarios.'"><a href="index_mostra_funcionarios.php"><span class="glyphicon glyphicon-user"></span>Listar Funcionários</a></li><li id="lista" class = "'.$mostracontatos.'"><a href="index_mostra_contatos.php"><span class="glyphicon glyphicon-list-alt"></span>Listar Contatos</a></li><li id="lista" class = "'.$mostrahorarios.'"><a href="index_mostra_atendimento.php"><span class="glyphicon glyphicon glyphicon-modal-window"></span>Listar Horários</a></li>	<li id="lista"><a href="php/banco.php?id=2"><span class="glyphicon fa fa-power-off"></span>Logout</a></li><ul></div></li></ul>';
							}
							else
								echo '<li><a href = "" data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-log-in"></span>LOGIN</a></li></ul>';
						?>
					</ul>
                </div>
            </div>
        </nav>
		<?php
			include 'php/login.php'
		?>
	</body>
</html>