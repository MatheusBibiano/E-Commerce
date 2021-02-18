CREATE SCHEMA loja;

USE loja;

CREATE TABLE IF NOT EXISTS `cliente` (
`id_cliente` int(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
`nome` varchar(100) NOT NULL,
`email` varchar(100) NOT NULL,
`login` varchar(100) NOT NULL,
`senha` varchar(100) NOT NULL,
`tipo` int(1) NOT NULL
);

INSERT INTO cliente (nome, email, login, senha, tipo)
VALUES ('Admin', 'admin@gmail.com', 'admin', MD5(123), 0);

CREATE TABLE IF NOT EXISTS `produto` (
`id_produto` int(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
`imagem` varchar(100) NOT NULL,
`nome_produto` varchar(100) NOT NULL,
`descricao` varchar(255) NOT NULL,
`preco` float(7, 2) NOT NULL
);
