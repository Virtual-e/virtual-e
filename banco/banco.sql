-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE aluno (
id_aluno integer not null auto_increment PRIMARY KEY,
id_endereco integer ,
alu_mae varchar(60),
alu_nome varchar(60),
alu_pai varchar(60),
alu_datanasci date,
alu_datacad date,
alu_cpf varchar(30),
alu_rg varchar(30),
alu_email varchar(255),
alu_telefone varchar(30)
);

CREATE TABLE professor (
id_professor integer not null auto_increment PRIMARY KEY,
id_endereco integer ,
prof_nome varchar(60),
prof_datanasci date,
prof_datacad date,
prof_formacao varchar(60),
prof_cfp varchar(30),
prof_rg varchar(30),
prof_email varchar(60)
);

CREATE TABLE funcionario (
id_funcionario integer not null auto_increment PRIMARY KEY,
id_endereco integer ,
id_perfil integer ,
func_nome varchar(60),
func_datanasc date,
func_datacad date,
func_cpf varchar(30),
func_rg varchar(30),
func_email varchar(255)
);

CREATE TABLE perfil (
id_perfil integer not null auto_increment PRIMARY KEY,
per_nome varchar(60),
per_dercricao varchar(255)
);

CREATE TABLE endereco (
id_endereco integer not null auto_increment PRIMARY KEY,
id_logradouro integer 
);

CREATE TABLE logradouro (
id_logradouro integer not null auto_increment PRIMARY KEY,
id_cidade integer ,
logr_rua varchar(60),
logr_numero varchar(30),
logr_bairro varchar(60)
);

CREATE TABLE cep (
id_cep integer not null auto_increment PRIMARY KEY,
cep_numero varchar(60)
);

CREATE TABLE cidade (
id_cidade integer not null auto_increment PRIMARY KEY,
id_uf integer ,
id_cep integer ,
cid_nome varchar(255),
FOREIGN KEY(id_cep) REFERENCES cep (id_cep)
);

CREATE TABLE uf (
id_uf integer not null auto_increment PRIMARY KEY,
uf_nome varchar(10)
);

CREATE TABLE materias (
id_materia integer not null auto_increment PRIMARY KEY,
id_professor integer ,
mat_nome varchar(60),
mat_descricao varchar(255),
FOREIGN KEY(id_professor) REFERENCES professor (id_professor)
);

CREATE TABLE grade (
id_grade integer not null auto_increment PRIMARY KEY,
id_periodo integer ,
id_curso integer ,
gra_nome varchar(60)
);

CREATE TABLE periodos (
id_periodos integer not null auto_increment PRIMARY KEY,
id_curso integer ,
id_materia integer ,
pe_nome varchar(40),
FOREIGN KEY(id_materia) REFERENCES materias (id_materia)
);

CREATE TABLE matricula (
id_matricula integer not null auto_increment PRIMARY KEY,
id_aluno integer ,
id_curso integer ,
id_periodo integer ,
mat_numero varchar(40),
mat_data date,
FOREIGN KEY(id_aluno) REFERENCES aluno (id_aluno),
FOREIGN KEY(id_periodo) REFERENCES periodos (id_periodos)
);

CREATE TABLE boletim (
id_boletim integer not null auto_increment PRIMARY KEY,
id_matricula integer,
bol_notaprimeiro float,
bol_notasegundo float,
bol_medianota float,
bol_totalfaltas float,
FOREIGN KEY(id_matricula) REFERENCES matricula (id_matricula)
);

CREATE TABLE curso (
id_curso integer not null auto_increment PRIMARY KEY,
id_grade integer ,
cur_nome varchar(255),
cur_data date,
cur_descricao varchar(255),
FOREIGN KEY(id_grade) REFERENCES grade (id_grade)
);

CREATE TABLE frequencia (
id_frequencia integer not null auto_increment PRIMARY KEY,
id_boletim integer ,
fre_data date,
fre_falta integer,
FOREIGN KEY(id_boletim) REFERENCES boletim (id_boletim)
);

ALTER TABLE aluno ADD FOREIGN KEY(id_endereco) REFERENCES endereco (id_endereco);
ALTER TABLE professor ADD FOREIGN KEY(id_endereco) REFERENCES endereco (id_endereco);
ALTER TABLE funcionario ADD FOREIGN KEY(id_endereco) REFERENCES endereco (id_endereco);
ALTER TABLE funcionario ADD FOREIGN KEY(id_perfil) REFERENCES perfil (id_perfil);
ALTER TABLE endereco ADD FOREIGN KEY(id_logradouro) REFERENCES logradouro (id_logradouro);
ALTER TABLE logradouro ADD FOREIGN KEY(id_cidade) REFERENCES cidade (id_cidade);
ALTER TABLE cidade ADD FOREIGN KEY(id_uf) REFERENCES uf (id_uf);
ALTER TABLE grade ADD FOREIGN KEY(id_periodo) REFERENCES periodos (id_periodos);
ALTER TABLE grade ADD FOREIGN KEY(id_curso) REFERENCES curso (id_curso);
ALTER TABLE periodos ADD FOREIGN KEY(id_curso) REFERENCES curso (id_curso);
ALTER TABLE matricula ADD FOREIGN KEY(id_curso) REFERENCES curso (id_curso);
