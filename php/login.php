<?php 
    $nomeClinica = 'Jonas Gabriela';
	
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
	<meta charset="UTF-8">
	</head>
	<body>	
		<div class="modal fade" id="myModal" role="dialog">
		<br><br><br>
			<div class="modal-dialog modal-sm">
				<div class="modal-content" size="480px">
					<form action="php/banco.php?id=1" method="POST">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">×</button>
							<img id="img1" src="Imagens/principal.png" width="30px" height="30px">
							<h4 class="modal-title">Bem Vindo!</h4>
						</div>	
						<div class="modal-body  bg-grey">
							
							Login:
							<br>
							<div class="input-group floating-label">
							<input class="form-control valid" data-val="true"  data-val-length-max="50" data-val-required="* Campo obrigatório!!" id="UserLogin" name="UserLogin" placeholder="" type="text" value="" required>
							<span class="validationMessage field-validation-valid" data-valmsg-for="UserLogin" data-valmsg-replace="true"></span>
								<span class="input-group-addon">
								<i class="glyphicon glyphicon-user"></i>
							</span>
						</div>
							Senha:
							<br>
							<div class="input-group floating-label">
							<input class="form-control" data-val="true" data-val-required="* Campo obrigatório!!" id="UserPassword" name="UserPassword" placeholder="" type="password" required>
							<span class="field-validation-valid validationMessage" data-valmsg-for="UserPassword" data-valmsg-replace="true"></span>
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-lock"></i>
							</span>
						</div>
							
						</div>	
						<div class="modal-footer">
							<button type="submit" value="Login" class="btn btn-info btn-lg">Login</button></a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>