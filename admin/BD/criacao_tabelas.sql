create table noticia (
id_noticia int auto_increment not null primary key,
titulo_noticia varchar(255),
texto_noticia longtext ,
video varchar(255),
data_noticia timestamp 

);

INSERT INTO noticia(titulo_noticia,texto_noticia,video,data_noticia) VALUES ("Teste","Teste","Teste",NOW());
create table administrador (
id_administrador int auto_increment not null primary key,
nome_administrador varchar(55),
cpf_administrador varchar(15),
senha_administrador varchar(255)

);

insert into administrador (nome_administrador,cpf_administrador,senha_administrador) values("Luis Felipe","02342288140","12345"),("Bruno Olinto","04816974113","12345");

create table imagem_noticia(
id_img_noticia int auto_increment not null primary key,
imagem varchar(255),
id_noticia int,
foreign key(id_noticia) references noticia (id_noticia) ON update cascade on delete cascade
);


CREATE TABLE comentario_noticia( 
	id_comentario_noticia int auto_increment not null primary key, 
	nome varchar(255), 
	email varchar(255), 
	comentario varchar(255), 
	id_noticia int, 
	data_comentario timestamp, 
	foreign key(id_noticia) references noticia (id_noticia) ON update cascade on delete cascade 
	)
