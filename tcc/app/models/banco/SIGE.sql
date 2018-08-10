CREATE TABLE calendario (
idcalendario int PRIMARY KEY,
horario varchar(18),
data date,
idnum int
);

CREATE TABLE infracao (
idinfracao int PRIMARY KEY,
qtd_pen varchar(16),
razao varchar(30),
idnum int
);

CREATE TABLE pedido (
idpedido int PRIMARY KEY,
horario varchar(18),
num_pedido varchar(24),
cpf int
);

CREATE TABLE emprestimo (
idnum int AUTO_INCREMENT PRIMARY KEY,
nome varchar(40),
descricao varchar(36),
especificacao varchar(32),
historico varchar(32),
tipo_emp varchar(18),
qtd varchar(16),
idpedido int
);

CREATE TABLE penalidade (
idpenalidade int AUTO_INCREMENT PRIMARY KEY,
desc_pen varchar(36),
idinfracao int
);

CREATE TABLE user (
cpf int PRIMARY KEY,
nome varchar(40),
data_nasc date,
ocupacao varchar(36),
sexo varchar(16),
usuario varchar(24),
senha varchar(12)
);

ALTER TABLE calendario ADD FOREIGN KEY(idnum) REFERENCES emprestimo (idnum);
ALTER TABLE pedido ADD FOREIGN KEY(cpf) REFERENCES user (cpf);
ALTER TABLE emprestimo ADD FOREIGN KEY(idpedido) REFERENCES pedido (idpedido);
ALTER TABLE penalidade ADD FOREIGN KEY(idinfracao) REFERENCES infracao (idinfracao);
