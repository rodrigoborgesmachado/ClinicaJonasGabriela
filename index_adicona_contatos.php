<?php 
	$contatos="";
    $nomeClinica = 'Jonas Gabriela';
	$sobre="";
	$atendimento="";
	$galeria="";
	$planos="";
	$login="";
	$adiciona_contato="active";
	$mostracontatos ="";
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
		<style>
			table {
				font-family: arial, sans-serif;
				border-collapse: collapse;
				width: 80%;
			}

			td, th {
				border: 0px solid #dddddd;
				text-align: left;
				padding: 8px;
			}

			tr:nth-child(even) {
				background-color: #dddddd;
			}
		</style>
		<script>
		function coloca_valor(id, val){
			document.getElementById(id).value = val;
		}
		function buscaEndereco(cep)
		{
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() 
			{
				if (xhttp.readyState == 4 && xhttp.status == 200) 
				{
					if (xhttp.responseText != "")
					{
						s=xhttp.responseText;
						s=s.replace(/\\n/g, "\\n")  
									   .replace(/\\'/g, "\\'")
									   .replace(/\\"/g, '\\"')
									   .replace(/\\&/g, "\\&")
									   .replace(/\\r/g, "\\r")
									   .replace(/\\t/g, "\\t")
									   .replace(/\\b/g, "\\b")
									   .replace(/\\f/g, "\\f");
						// remove non-printable and other non-valid JSON chars
						s = s.replace(/[\u0000-\u0019]+/g,""); 
						s= s.trim();
						var endereco = JSON.parse(s);
						coloca_valor('logradouro', endereco.lougradouro);
						coloca_valor('cidade', endereco.cidade);
						coloca_valor('bairro', endereco.bairro);
					}
				}
			}
			xhttp.open("GET", "php/endereco.php?cep=" + cep, true);
			xhttp.send();  
		  }
		$(document).ready(function(){				
			$('#data').change(function(e){
				var data = $('#data').val();				
				var objDate = new Date();
				objDate.setDate(data.split("-")[2]);
				objDate.setMonth(data.split("-")[1]  - 1);//- 1 pq em js � de 0 a 11 os meses
				objDate.setYear(data.split("-")[0]);
				if(objDate.getTime() > new Date().getTime()){
					alert("A data de n�o pode ser maior que a data atual");
					coloca_valor('data', null);
				}
			})
		});
		</script>
    </head>
    <body id="cadastro" data-spy="scroll" data-target=".navbar" data-offset="60" style=" background-color: #003366;">
        <?php
			include 'php/navegacao.php';
			if(@$_REQUEST['func'] == '1'){
				alert("Funcionário cadastrado com sucesso!");
			}
			if(@$_REQUEST['func'] == '2'){
				alert("Não foi possível cadastrar o usuário!");
			}
			if(!logado()){
				alert("Não está logado, página restrita!");
			}
			else{
		?>
		<br><br><br><br>
		<form width = "50%" action="php/banco.php?id=4" method="POST">	
			<div class="container-fluid" style="width:70%; background-color: rgb(255,250,250);">
				<fieldset width = "50%">
					<legend>Informações Gerais</legend>
					<div class="" style="padding-left: 16cm;">
						<a href="index_mostra_funcionarios.php"><button type="button" value="" class="btn btn-info btn-lg">Funcionários cadastrados</button></a>
					</div>
					<h2>Informações:</h2>
					<center>
						<table>
							<tr>
								<div class="form-group">
									<td>Nome do Funcionário:</td>
									<td>
										<input class="form-control" type="text" name="nome" id="nome" required>
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>Data de Nascimento:</td>
									<td>
										<input class="form-control" type="date" id="data" name="data" required>
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>Sexo:</td>
									<td>
										<input type="radio" name="sexo" value="m">Masculino
										<input type="radio" name="sexo" value="f">Feminino
									</td>
								</div>	
							</tr>
							<tr>
								<div class="form-group">
									<td>Estado Civil:</td>
									<td>
										<select class="form-control" name="estadocivil">
											<option value="solteiro" selected>Solteiro</option>
											<option value="casado">Casado</option>
											<option value="separado">Separado</option>
											<option value="divorciado">Divorciado</option>
											<option value="viuvo">Viúvo</option>
										</select>
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>Cargo:</td>
									<td>
										<select class="form-control" name="cargo">
											<option value="medico">Médico</option>
											<option value="enfermeiro">Enfermeiro</option>
											<option value="secretario">Secretário</option>
											<option value="outro" selected>Outro</option>
										</select>
									</td>
								</div>
							</tr>
							<tr>
								<div class='form-group'>
									<td>Especialidade médica:</td>
									<td>
										<select class='form-control' name='especialidade' id='especialidade'>
											<option value='Outro' selected>Outro</option>
											<option value='Acupuntura'>Acupuntura</option>
											<option value='Alergia e Imunologia'>Alergia e Imunologia</option>
											<option value='Anestesiologia'>Anestesiologia</option>
											<option value='Angiologia'>Angiologia</option>
											<option value='Oncologia'>Oncologia</option>
											<option value='Cardiologia'>Cardiologia</option>
											<option value='Cirurgia Cardiovascular'>Cirurgia Cardiovascular</option>
											<option value='Cirurgia da Mao'>Cirurgia da Mão</option>
											<option value='Cirurgia de cabeca e pescoco'>Cirurgia de cabeça e pescoço</option>
											<option value='Cirurgia do Aparelho Digestivo'>Cirurgia do Aparelho Digestivo</option>
											<option value='Cirurgia Geral'>Cirurgia Geral</option>
											<option value='Cirurgia Pediatrica'>Cirurgia Pediátrica</option>
											<option value='Cirurgia Plastica'>Cirurgia Plástica</option>
											<option value='Cirurgia Toracica'>Cirurgia Torácica</option>
											<option value='Cirurgia Vascular'>Cirurgia Vascular</option>
											<option value='Clinica Medica'>Clínica Médica</option>
											<option value='Coloproctologia'>Coloproctologia</option>
											<option value='Dermatologia'>Dermatologia</option>
											<option value='Endocrinologia e Metabologia'>Endocrinologia e Metabologia</option>
											<option value='Endoscopia'>Endoscopia</option>
											<option value='Gastroenterologia'>Gastroenterologia</option>
											<option value='Genetica medica'>Genética médica</option>
											<option value='Geriatria'>Geriatria</option>
											<option value='Ginecologia e obstetrícia'>Ginecologia e obstetrícia</option>
											<option value='Hematologia e Hemoterapia'>Hematologia e Hemoterapia</option>
											<option value='Homeopatia'>Homeopatia</option>
											<option value='Infectologia'>Infectologia</option>
											<option value='Mastologia'>Mastologia</option>
											<option value='Medicina de Familia e Comunidade'>Medicina de Família e Comunidade</option>
											<option value='Medicina do Trabalho'>Medicina do Trabalho</option>
											<option value='Medicina do Trafego'>Medicina do Tráfego</option>
											<option value='Medicina Esportiva'>Medicina Esportiva</option>
											<option value='Medicina Fisica e Reabilitacao'>Medicina Física e Reabilitação</option>
											<option value='Medicina Intensiva'>Medicina Intensiva</option>
											<option value='Medicina Legal e Perícia Medica'>Medicina Legal e Perícia Médica</option>
											<option value='Medicina Nuclear'>Medicina Nuclear</option>
											<option value='Medicina Preventiva e Social'>Medicina Preventiva e Social</option>
											<option value='Nefrologia'>Nefrologia</option>
											<option value='Neurocirurgia'>Neurocirurgia</option>
											<option value='Neurologia'>Neurologia</option>
											<option value='Nutrologia'>Nutrologia</option>
											<option value='Obstetricia'>Obstetrícia</option>
											<option value='Oftalmologia'>Oftalmologia</option>
											<option value='Ortopedia e Traumatologia'>Ortopedia e Traumatologia</option>
											<option value='Otorrinolaringologia'>Otorrinolaringologia</option>
											<option value='Patologia'>Patologia</option>
											<option value='Pediatria'>Pediatria</option>
											<option value='Pneumologia'>Pneumologia</option>
											<option value='Psiquiatria'>Psiquiatria</option>
											<option value='Radiologia'>Radiologia</option>
											<option value='Radioterapia'>Radioterapia</option>
											<option value='Reumatologia'>Reumatologia</option>
											<option value='Urologia'>Urologia</option>
										</select>
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>Email:</td>
									<td>
										<input class="form-control" type="email" name="email" id="email" required>
									</td>
								</div>
							</tr>
						</table>
					</center>
				</fieldset>
			</div>
			<div class="container-fluid bg-grey" style="width:70%">
				<fieldset width = "50%">
					<legend>Informações Específicas</legend>
					<h2>Documentos:</h2>
					<center>
						<table>
							<tr>
								<div class="form-group">
									<td>CPF:</td>
									<td><input class="form-control" type="text" class="cpf" name="cpf" id="cpf" required></td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>RG:</td>
									<td><input class="form-control" type="text" class="rg" name="rg" id="rg" required></td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>Outro:</td>
									<td><input class="form-control" type="text" name="outro" id="outro" required></td>
								</div>
							</tr>
						</table>
					</center>
				</fieldset>			
			</div>
			<div class="container-fluid" style="width:70%; background-color: rgb(255,250,250);">
				<fieldset width = "50%">
					<legend>Moradia</legend>
					<h2>Endereço</h2>
					<center>
						<table>
							<tr>
								<div class="form-group">
									<td>Cep:</td>
									<td>
										<input class="form-control" type="text" class="cep" name="cep" id="cep" onkeyup="buscaEndereco(this.value)" >
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>Tipo de logradouro:</td>
									<td>
										<select class="form-control" name="tipodelogradouro">
											<option value="rua" selected>Rua</option>
											<option value="avenida">Avenida</option>
											<option value="praca">Praça</option>
										</select>
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>Logradouro:</td>
									<td>
										<input class="form-control" type="text" name="logradouro" id="logradouro" required>
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>Número:</td>
									<td>
										<input class="form-control" type="number" name="numero" id="numero" required>
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>Complemento:</td>
									<td>
										<input class="form-control" type="text" name="complemento" id="complemento" required>
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>Bairro:</td>
									<td>
										<input class="form-control" type="text" name="bairro" id="bairro" required>
									</td>
								</div>
							</tr>
							<tr>	
								<div class="form-group">
									<td>Cidade:</td>
									<td>
										<input class="form-control" type="text" name="cidade" id="cidade" required>
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>Estado:</td>
									<td>
										<select class="form-control" name="estado">
											<option value="Acre" selected>Acre (AC)</option>
											<option value="Alagoas" selected>Alagoas (AL)</option>
											<option value="Amapa" selected>Amapá (AP)</option>
											<option value="Amazonas" selected>Amazonas (AM)</option>
											<option value="Bahia" selected>Bahia (BA)</option>
											<option value="Ceará" selected>Ceará (CE)</option>
											<option value="DF" selected>Distrito Federal (DF)</option>
											<option value="ES" selected>Espírito Santo (ES)</option>
											<option value="Goias" selected>Goiás (GO)</option>
											<option value="Maranhao" selected>Maranhão (MA)</option>
											<option value="MT" selected>Mato Grosso (MT)</option>
											<option value="MS" selected>Mato Grosso do Sul (MS)</option>
											<option value="MG" selected>Minas Gerais (MG)</option>
											<option value="Para" selected>Pará (PA) </option>
											<option value="Paraiba" selected>Paraíba (PB)</option>
											<option value="Parana" selected>Paraná (PR)</option>
											<option value="Pernambuco" selected>Pernambuco (PE)</option>
											<option value="Piaui" selected>Piauí (PI)</option>
											<option value="RJ" selected>Rio de Janeiro (RJ)</option>
											<option value="RN" selected>Rio Grande do Norte (RN)</option>
											<option value="RS" selected>Rio Grande do Sul (RS)</option>
											<option value="Rondonia" selected>Rondônia (RO)</option>
											<option value="Roraima" selected>Roraima (RR)</option>
											<option value="SC" selected>Santa Catarina (SC)</option>
											<option value="SP" selected>São Paulo (SP)</option>
											<option value="Sergipe" selected>Sergipe (SE)</option>
											<option value="tocantins" selected>Tocantins (TO)</option>
										</select>
									</td>
								</div>
							</tr>
						</table>
						<div class="modal-footer">
							<a href="index_mostra_funcionarios.php"><button type="button" value="" class="btn btn-info btn-lg">Funcionários cadastrados</button></a>
							<button type="submit" value="Confirmar" class="btn btn-info btn-lg">Confirmar</button>
						</div>
					</center>
				</fieldset>
			</div>
		</form>			
		<div class="text-center">
			<a href="#cadastro">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a>
		</div>
        <?php
			}
			include 'php/rodape.php'
		?>
    </body>
</html>