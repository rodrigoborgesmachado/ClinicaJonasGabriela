<?php

global $servidor, $usuario, $senha, $senha, $nomeBD;



function Conectar(){
$servidor = "mysql:dbname=2359910_jonasgabriela;host=fdb16.awardspace.net";
$usuario = "2359910_jonasgabriela";
$senha = "gabrielajonas123";
$nomeBD = "2359910_jonasgabriela";
	try{
		$opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
		$con = new PDO($servidor, $usuario, $senha);
		return $con;
	} catch (Exception $e){
		echo 'Erro: '.$e->getMessage();
		return null;
	}
}

$medico = isset($_GET['medico']) ? $_GET['medico'] : '';
$data = isset($_GET['data']) ? $_GET['data'] : '';

echo getFilterHora($medico, $data);


function getFilterHora($medico, $data){
	$pdo = Conectar();
	$sql = 'SELECT HORA FROM AGENDA WHERE CODFUNCIONARIO = (SELECT CODFUN FROM FUNCIONARIO WHERE NOME = ?) AND DATA = ?';
	if($pdo != null){
		$stm = $pdo->prepare($sql);
		$stm->bindValue(1, $medico);
		$stm->bindValue(2, $data);
		$stm->execute();
		sleep(1);
		echo json_encode($stm->fetchAll(PDO::FETCH_ASSOC));
		$pdo = null;		
	}
}

?>