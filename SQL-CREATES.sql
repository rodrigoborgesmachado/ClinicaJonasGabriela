CREATE TABLE ENDERECO(
	CEP VARCHAR(9),
	LOUGRADOURO VARCHAR(50),
	BAIRRO VARCHAR(50),
	CIDADE VARCHAR(100),
	PRIMARY KEY (CEP)
);

CREATE TABLE ENDERECOFUN(
	IDENDERECO INT AUTO_INCREMENT,
	CEP VARCHAR(8),
	TIPO_DE_LOGRADOURO VARCHAR(50),
	LOGRADOURO VARCHAR(20),
	NUMERO INT,
	COMPLEMENTO VARCHAR(50),
	BAIRRO VARCHAR(50),
	CIDADE VARCHAR(50),
	ESTADO VARCHAR(50),
	PRIMARY KEY(IDENDERECO)
);


CREATE TABLE Funcionario(
	CODFUN INT AUTO_INCREMENT,
	NOME VARCHAR(100),
	DATA_NASCIMENTO DATE,
	SEXO VARCHAR(1),
	ESTADO_CIVIL VARCHAR(20),
	CARGO VARCHAR(50),
	ESPECIALIDADE VARCHAR(50),
	EMAIL VARCHAR(50),
	CPF VARCHAR(11),
	RG VARCHAR(20),
	OUTRO VARCHAR(50),
	IDENDERECO INT NOT NULL,
	PRIMARY KEY(CODFUN),
	FOREIGN KEY(IDENDERECO) REFERENCES ENDERECOFUN(IDENDERECO)
);

CREATE TABLE CONTATO(
	IDCONTATO INT AUTO_INCREMENT,
	NAME VARCHAR(50),
	EMAIL VARCHAR(80),
	COMENTARIO VARCHAR(5000),
	PRIMARY KEY (IDCONTATO)
)

CREATE TABLE PACIENTE(
	CODPACIENTE INT AUTO_INCREMENT,
	NOME VARCHAR(60),
	TELEFONE VARCHAR(12),
	PRIMARY KEY(CODPACIENTE)
);

CREATE TABLE AGENDA(
	CODAGENDAMENTO INT AUTO_INCREMENT,
	DATA DATE,
	HORA INT,
	CODFUNCIONARIO INT,
	CODPACIENTE INT,
	PRIMARY KEY (CODAGENDAMENTO),
	FOREIGN KEY (CODFUNCIONARIO) REFERENCES FUNCIONARIO(CODFUN),
	FOREIGN KEY (CODPACIENTE) REFERENCES PACIENTE(CODPACIENTE)
);
