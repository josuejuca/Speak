create database chat;

use chat;

create table perfil
(
  idPerfil int(10) not null auto_increment,
  descricao varchar(50) not null,
  primary key (idPerfil)
)
engine = innodb
auto_increment = 1
default character set = utf8;

use chat;

create table usuario
(
 idUsuario int(10) not null auto_increment,
 nome varchar(300) not null,
 email varchar(100) not null,
 login varchar(20) not null,
 senha varchar(32) not null,
 idPerfil int(10) not null,
 Primary key (idUsuario),

 constraint fk_Usuario_perfil foreign key (idPerfil)
 references Perfil(idPerfil)
)
engine = innodb
auto_increment = 1
character set = utf8;


create table participante
(
 idParticipante int(10) not null auto_increment,
 nome varchar(300) not null,
 pai varchar(300),
 mae varchar(300),
 dt_nasc date,
 naturalidade varchar(150),
 nacionalidade varchar (150),
 telefone varchar(100) not null,
 endereco varchar(500) ,
 sexo varchar(10) ,
 Primary key (idParticipante)
)                        
engine = innodb
auto_increment = 1
character set = utf8;

create table chat
(
 idChat int(10) not null auto_increment,
 data date not null,
 hora time not null,
 Primary key (idChat)
)                        
engine = innodb
auto_increment = 1
character set = utf8;


create table conversa
(
 idConversa int(10) not null auto_increment,
 Data date not null,
 hora time not null,
 visualizacao boolean not null default false,
 conteudo varchar(500) not null,
 idParticipante int(10) not null,
 idChat int(10) not null,
 Primary key (idConversa),

constraint fk_Conversa_Participante foreign key (idParticipante)
 references Participante(idParticipante),

constraint fk_Conversa_Chat foreign key (idChat)
 references Chat(idChat)
)                        
engine = innodb
auto_increment = 1
character set = utf8;


------------------------------------------------------------------------------
--- Colocando informação na tabela

use chat;

insert into perfil (descricao) values ('Administrador');

insert into perfil (descricao) values ('Moderador');

insert into perfil (descricao) values ('Participante');

------------------------------------------------------------------------------
---- Colocando informação na tabela
use chat;
insert into usuario (idPerfil, nome, email, login, senha) values ('1', 'Josué Juca', 'adm@juca.tk', 'juca','123456');