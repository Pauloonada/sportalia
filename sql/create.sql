create database sportalia;

use sportalia;

-- Tabela de Membros
CREATE TABLE membros (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    idade INT,
    endereco VARCHAR(100),
    telefone VARCHAR(20)
);

-- Tabela de Esportes
CREATE TABLE esportes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL
);

-- Tabela de Equipes
CREATE TABLE equipes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    esporte_id INT,
    FOREIGN KEY (esporte_id) REFERENCES esportes(id)
);

-- Tabela de Eventos
CREATE TABLE eventos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    data DATE,
    local VARCHAR(100)
);

-- Tabela de Inscrições
CREATE TABLE inscricoes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    membro_id INT,
    equipe_id INT,
    evento_id INT,
    data_inscricao date,
    FOREIGN KEY (membro_id) REFERENCES membros(id),
    FOREIGN KEY (equipe_id) REFERENCES equipes(id),
    FOREIGN KEY (evento_id) REFERENCES eventos(id)
);

-- Tabela de Usuários
CREATE TABLE usuarios(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome varchar(70),
    email VARCHAR(140),
    senha varchar(16)
    );