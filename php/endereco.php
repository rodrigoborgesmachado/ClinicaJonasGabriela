<?php

class Endereco 
{
  public $lougradouro;
  public $cidade;
  public $bairro;
}

function conecta(){
	$servidor = "fdb16.awardspace.net";
	$usuario = "2359910_jonasgabriela";
	$senha = "gabrielajonas123";
	$nomeBD = "2359910_jonasgabriela";
	$conn = new mysqli($servidor, $usuario, $senha, $nomeBD);

	if ($conn->connect_error)
	 return false;
	return $conn;

 }


try
{
  $conn = conecta();
  $cep = "";
  if (isset($_GET["cep"]))
    $cep = $_GET["cep"];
  $SQL="";
  $SQL = "SELECT LOUGRADOURO, BAIRRO, CIDADE
    FROM ENDERECO
    WHERE CEP = '$cep';";
  if (! $result = $conn->query($SQL)){
    throw new Exception('Ocorreu uma falha ao buscar o endereco: ' . $conn->error);
}
  if ($result->num_rows > 0)
  {
    $row = $result->fetch_assoc();
    $endereco = new Endereco();
    $endereco->lougradouro = $row["LOUGRADOURO"];
    $endereco->bairro = $row["BAIRRO"];
    $endereco->cidade = $row["CIDADE"];
    $jsonStr = json_encode($endereco);
    echo $jsonStr;
	//alert($endereco->cidade);
  }  
}
catch (Exception $e)
{
  $msgErro = $e->getMessage();
}

if ($conn != null)
  $conn->close();

?>