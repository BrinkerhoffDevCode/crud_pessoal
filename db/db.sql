CREATE DATABASE IF NOT EXISTS biblioteca_db;
USE biblioteca_db;


CREATE TABLE IF NOT EXISTS autores (
    id_autor INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL UNIQUE,
    nacionalidade VARCHAR(255) NOT NULL,
    ano_nascimento YEAR NOT NULL
);


CREATE TABLE IF NOT EXISTS livros (
    id_livro INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    genero VARCHAR(2) NOT NULL,
    ano_publicacao YEAR NOT NULL,
    id_autor INT NOT NULL,
    FOREIGN KEY (id_autor) REFERENCES autores(id_autor)
);

CREATE TABLE IF NOT EXISTS leitores (
    id_leitor INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL,
    telefone VARCHAR(10) NOT NULL
);

CREATE TABLE IF NOT EXISTS emprestimos (
    id_emprestimo INT AUTO_INCREMENT PRIMARY KEY,
    id_livro INT NOT NULL,
    id_leitor INT NOT NULL,
    data_emprestimo DATE NOT NULL,
    data_devolucao DATE NOT NULL,
    FOREIGN KEY (id_livro) REFERENCES livros(id_livro),
    FOREIGN KEY (id_leitor) REFERENCES leitores(id_leitor)
);