CREATE TABLE usuarios(
id          int(255) auto_increment not null,
nombre      varchar(100) not null,
apellidos   varchar(100) not null,
email       varchar(255) not null,
password    varchar(255) not null,
fecha       date not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id)
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE categorias(
id      auto_increment not null,
nombre  varchar(255) not null,
CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE entradas(
id              int(255) auto_increment not null,
usu_id          int(255) not null,
cat_id          int(255) not null,
titulo          varchar(255) not null,
descripcion     MEDIUMTEXT,
fecha           date not null,
CONSTRAINT pk_entradas PRIMARY KEY(id),
CONSTRAINT fk_entradas_usuario FOREIGN KEY(usu_id) REFERENCES ususarios(id),
CONSTRAINT fk_entradas_categoria FOREIGN KEY(cat_id) REFERENCES categorias(id) 
)ENGINE=InnoDb;
