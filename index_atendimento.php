<?php 
	$atendimento="active";
    $nomeClinica = 'Jonas Gabriela';
	$sobre="";
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
<html lang="en">
    <head>
		<?php
			include 'php/head.php';
			
		?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
		$(document).ready(function(){	
			<!-- Carrega os Medicos -->
			$('#cmbEspecialidade').change(function(e){
				var especialidade = $('#cmbEspecialidade').val();
				$.getJSON('php/medico.php?especialidade='+especialidade, function (dados)
				{ 
				   if (dados.length > 0){	
					  var option = '<option>Selecione o Medico</option>';
					  $.each(dados, function(i, obj){
						  option += '<option value="'+obj.NOME+'">'+obj.NOME+'</option>';
					  })
				   }
				   $('#cmbMedico').html(option).show(); 
				})
				.fail(function(textStatus, errorThrown) {
					alert("error " + textStatus, errorThrown);
				  })
			})
			
			$('#cmbMedico' && '#e_data').change(function(e){
				var data = $('#e_data').val();				
				var objDate = new Date();
				objDate.setDate(data.split("-")[2]);
				objDate.setMonth(data.split("-")[1]  - 1);//- 1 pq em js � de 0 a 11 os meses
				objDate.setYear(data.split("-")[0]);
				if(objDate.getTime() < new Date().getTime()){
					alert("A data de agendamento n�o pode ser menor que a data atual");
				}
				else{
				var medico = $('#cmbMedico').val();	
				var vetor = new Array();
				var cont=0;
				$.getJSON('php/hora.php?medico='+ medico + '&data='+data, function (dados)
				{ 					
				   if (dados.length > 0){	
					  var option = '<option>Selecione o Horário</option>';
					  $.each(dados, function(i, obj){
							  vetor.push(obj.HORA);
							  cont++;
					  })
				   }
				    var i=0;
				    var hora = 800;
				    var hora1;
				    var presente=false;
				    while(hora<1800){
						presente=false;
						for(i=0;i<cont;i++){
							if(hora == vetor[i]){
								presente=true;
							}
						}
						if(!presente){
							hora1=hora/100;
							if(hora1>=10)
								option += '<option value="'+hora+'">'+ hora1 +':00</option>';
							else 
								option += '<option value="'+hora+'">0'+ hora1 +':00</option>';
						}
					hora += 100;
				   }
				   $('#cmbHora').html(option).show();
				})
			}
				
			})
		});
		</script>
    </head>
    <body id="consulta" data-spy="scroll" data-target=".navbar" data-offset="60" style=" background-color: #003366;">
		<?php
			include 'php/navegacao.php';
			include 'php/cabecalho.php';
			if(@$_REQUEST['func'] == '1'){
				alert("Agendamento efetuado com sucesso.");
			}
			if(@$_REQUEST['func'] == '2'){
				alert("O agendamento não foi efetuado.");
			}
		?>
		<form width = "50%" action="php/banco.php?id=5" method="POST">	
			<div class="container-fluid" style="width:70%; background-color: rgb(255,250,250);">
			<fieldset width = "50%">
				<legend>Agendamento De Consultas</legend>
				<center>
					<table>
						<tr>
							<div class="form-group">
								<td>Especialidade:</td>
								<td>
									<select class="form-control" id="cmbEspecialidade" name="cmbEspecialidade" required>
										<option value='' selected>Selecione a Especialidade</option>
										<option value='Acupuntura'>Acupuntura</option>
										<option value='Alergia e Imunologia'>Alergia e Imunologia</option>
										<option value='Anestesiologia'>Anestesiologia</option>
										<option value='Angiologia'>Angiologia</option>
										<option value='Oncologia'>Oncologia</option>
										<option value='Cardiologia'>Cardiologia</option>
										<option value='Cirurgia Cardiovascular'>Cirurgia Cardiovascular</option>
										<option value='Cirurgia da Mao'>Cirurgia da Mão</option>
										<option value='Cirurgia de cabeça e pescoço'>Cirurgia de cabeça e pescoço</option>
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
										<option value='Medicina do Tráfego'>Medicina do Tráfego</option>
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
								<td>Selecione o Médico:</td>
								<td>
									<select id="cmbMedico" name="cmbMedico">
										<option>Selecione o Medico</option>
									</select>
								</td>
							</div>
						</tr>
						<tr>
							<div class="form-group">
								<td>Data:</td>
								<td><input type="date" name="e_data" id="e_data" required></td>
							</div>
						</tr>
						<tr>
							<div class="form-group">
								<td>Hora:</td>
								<td>
									<select name="cmbHora" size="1" id="cmbHora" required>
										<option>Selecione a hora</option>
										<option value="800">08:00</option>
										<option value="900">09:00</option>
										<option value="1000">10:00</option>
										<option value="1100">11:00</option>
										<option value="1200">12:00</option>
										<option value="1300">13:00</option>
										<option value="1400">14:00</option>
										<option value="1500">15:00</option>
										<option value="1600">16:00</option>
										<option value="1700">17:00</option>
									</select>
								</td>
							</div>
						</tr>
						<tr>
							<div class="form-group">
								<td>Nome:</td>
								<td>
									<input class="form-control" type="text" name="nome" id="nome" required>
								</td>
							</div>
						</tr>
						<tr>
							<div class="form-group">
								<td>Telefone:</td>
								<td>
									<input class="form-control" type="text" name="telefone" id="telefone" required>
								</td>
							</div>
						</tr>
					</table>
					<div class="modal-footer">
						<?php
						if(logado())echo '<a href="index_mostra_atendimento.php"><button type="button" value="" id="mostrar" class="btn btn-info btn-lg">Horários Marcados</button></a>'
						?>
						<button type="submit" value="Confirmar" class="btn btn-info btn-lg">Confirmar</button></a>
					</div>
				</center>
			</fieldset>
			</form>
			<div class="text-center">
				<a href="#consulta">
					<span class="glyphicon glyphicon-chevron-up"></span>
				</a>
			</div>
            <?php
				include 'php/rodape.php'
			?>
    </body>
</html>

