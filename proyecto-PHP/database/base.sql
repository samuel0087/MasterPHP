CREATE DATABASE tienda_camisetas;

USE tienda_camisetas;

CREATE TABLE usuarios(
    id          int(255) auto_increment not null,
    nombre      varchar(200) not null,
    apellidos   varchar(200) not null,
    email       varchar(200) not null,
    password    varchar(200) not null,
    rol         varchar(20) null,
    image       varchar(200),
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

INSERT INTO usuarios VALUES(NULL, 'admin', 'admin', 'admin@admin.com', 'contraseña', 'admin', null);

CREATE TABLE categorias(
    id      int(255) auto_increment not null,
    nombre  varchar(255) not null,
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO categorias VALUES(NULL, "Camiseta");
INSERT INTO categorias VALUES(NULL, "Manga corta");
INSERT INTO categorias VALUES(NULL, "Manga larga");
INSERT INTO categorias VALUES(NULL, "Musculosa");

CREATE TABLE productos(
    id              int(255) auto_increment not null,
    categoria_id    int(255) not null,
    nombre          varchar(255) not null,
    descripcion     text not null,
    precio          float(100,2) not null,
    stock           int(255) not null,
    oferta          varchar(2),
    fecha           date not null,
    imagen          varchar(255) not null,
    CONSTRAINT pk_productos PRIMARY KEY(id),
    CONSTRAINT fk_productos_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;

CREATE TABLE pedidos(
    id          int(255) auto_increment not null,
    usuario_id  int(255) not null,
    provincia   varchar(255) not null,
    localidad   varchar(255) not null,
    direccion   varchar(255) not null,
    costo       float(100,2) not null, 
    estado      varchar(20) not null,
    fecha       date not null,
    hora        time not null,
    CONSTRAINT pk_pedidos PRIMARY KEY(id),
    CONSTRAINT fk_pedidos_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;

CREATE TABLE lineas_pedido(
    id              int(255) auto_increment not null,
    pedido_id       int(255) not null,
    producto_id     int(255) not null,
    unidades        int(255) not null,
    CONSTRAINT pk_lineas_pedidos PRIMARY KEY(id),
    CONSTRAINT fk_lineas_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(id),
    CONSTRAINT fk_lineas_producto FOREIGN KEY(producto_id) REFERENCES productos(id)
)ENGINE=InnoDb;