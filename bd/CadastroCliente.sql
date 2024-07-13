CREATE DATABASE PureTorta;

USE PureTorta;

CREATE TABLE CadastroCliente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Pais VARCHAR(100),
    Nome VARCHAR(100),
    Sobrenome VARCHAR(100),
    Empresa VARCHAR(100),
    Endereco VARCHAR(255),
    Complemento VARCHAR(255),
    Bairro VARCHAR(100),
    Cidade VARCHAR(100),
    Estado VARCHAR(100),
    CEP VARCHAR(20),
    Email VARCHAR(100),
    Telefone VARCHAR(20)
);