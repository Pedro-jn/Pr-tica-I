CREATE DATABASE SistemaChamadosPedro;
USE SistemaChamadosPedro;

CREATE TABLE Clientes (
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nome_cliente VARCHAR(50) NOT NULL,
    email_cliente VARCHAR(50) NOT NULL UNIQUE,
    telefone_cliente VARCHAR(15)
  
);


CREATE TABLE Colaboradores (
    id_colaborador INT PRIMARY KEY AUTO_INCREMENT,
    nome_colaborador VARCHAR(100) NOT NULL,
    email_colaborador VARCHAR(100) NOT NULL UNIQUE,
    funcao_colaborador VARCHAR(50)
);


CREATE TABLE Chamados (
    id_chamada INT PRIMARY KEY AUTO_INCREMENT,
    descricao TEXT NOT NULL,
    criticidade VARCHAR(10), 
    status VARCHAR(20), 
    data_chamada TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    data_ultima_atualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
    

);
    
