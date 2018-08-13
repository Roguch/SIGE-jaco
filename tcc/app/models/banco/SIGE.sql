CREATE TABLE calendario (
idcalendario int AUTO_INCREMENT PRIMARY KEY,
horario varchar(18),
data date,
idnum int
);

CREATE TABLE infracao (
idinfracao int AUTO_INCREMENT PRIMARY KEY,
qtd_pen varchar(16),
razao varchar(30),
idnum int
);

CREATE TABLE pedido (
idpedido int AUTO_INCREMENT PRIMARY KEY,
horario varchar(18),
num_pedido varchar(24),
cpf bigint
);

CREATE TABLE emprestimo (
idnum int AUTO_INCREMENT PRIMARY KEY,
nome varchar(40),
descricao varchar(36),
especificacao varchar(32),
historico varchar(32),

qtd varchar(16),
idpedido int
);

CREATE TABLE penalidade (
idpenalidade int AUTO_INCREMENT PRIMARY KEY,
desc_pen varchar(36),
idinfracao int
);

CREATE TABLE user (
cpf bigint PRIMARY KEY,
nome varchar(40),
data_nasc date,
ocupacao varchar(36),
sexo varchar(16),
usuario varchar(24),
senha varchar(12),
tipo_id int
);

CREATE TABLE tipoUser (
id int PRIMARY KEY,
descricao varchar(45)
);

ALTER TABLE user ADD FOREIGN KEY (tipo_id) REFERENCES tipoUser(id);
ALTER TABLE calendario ADD FOREIGN KEY(idnum) REFERENCES emprestimo (idnum);
ALTER TABLE pedido ADD FOREIGN KEY(cpf) REFERENCES user (cpf);
ALTER TABLE emprestimo ADD FOREIGN KEY(idpedido) REFERENCES pedido (idpedido);
ALTER TABLE penalidade ADD FOREIGN KEY(idinfracao) REFERENCES infracao (idinfracao);

INSERT INTO tipouser(id,descricao) VALUES(0,'admin');
INSERT INTO tipouser(id,descricao) VALUES(1,'usuario');