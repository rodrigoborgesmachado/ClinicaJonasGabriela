<?php
global $servidor, $usuario, $senha, $nomeBD;

$servidor = "mysql:dbname=2359910_jonasgabriela;host=fdb16.awardspace.net";
$usuario = "2359910_jonasgabriela";
$senha = "gabrielajonas123";
$nomeBD = "2359910_jonasgabriela";


function Conectar(){
$servidor = "mysql:dbname=2359910_jonasgabriela;host=fdb16.awardspace.net";
$usuario = "2359910_jonasgabriela";
$senha = "gabrielajonas123";
$nomeBD = "2359910_jonasgabriela";

	try{
		$con = new PDO($servidor, $usuario, $senha);
		return $con;
	} catch (Exception $e){
		echo 'Erro: '.$e->getMessage();
		return null;
	}
}

$especialidade = isset($_GET['especialidade']) ? $_GET['especialidade'] : '';

echo getFilterMedico($especialidade);


function getFilterMedico($especialidade){
	$pdo = Conectar();
	if($pdo == null)echo '<br>deu ruim';
	else{
		$sql = 'SELECT NOME FROM FUNCIONARIO WHERE ESPECIALIDADE = ?';
		$stm = $pdo->prepare($sql);
		$stm->bindValue(1, $especialidade);
		$stm->execute();
		//sleep(1);
		echo json_encode($stm->fetchAll(PDO::FETCH_ASSOC));
		$pdo = null;	
	}
}

?>