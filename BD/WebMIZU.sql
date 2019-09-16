create database WebSite;

use WebSite;

create table usuario(
	idUsuario int auto_increment primary key not null,
	nomeUsuario	varchar(100),
    nivel int,
    statusUsuario char(1), 
	sexo char(1),
    email varchar(100),
    senha char(40),
    foto varchar(37)
);

create table post(
	idPost int auto_increment primary key not null,
	tituloPost VARCHAR(200),
	dataPost VARCHAR(16),
    idUsuario int,
	foreign key (idUsuario) references usuario(idUsuario),
    conteudoNoticia text
);

create table comentario (
	idComentario int primary key not null auto_increment,
	comentario varchar (255),
    dataComentario VARCHAR(16),
    idNoticia int,
    foreign key (idNoticia) references noticias(idNoticia),
	idUsuario int,
	foreign key (idUsuario) references usuario(idUsuario),
    foto varchar(37),
    status_comentario int 
);