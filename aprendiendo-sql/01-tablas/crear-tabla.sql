/*
int(n° cifras)                      Entero(max -> 255)
integer(n° cifras)                  Entero(max -> 4294967295)
varchar(n° caracteres)              String / Alfanumerico (max -> 255)
char(n° caracteres)                 String / Alfanumerico (max -> 255)
float(n° cifras, n° decimales)      decimales / coma flotante
date, time, timestamp

//Stings más grandes
TEXT 65535 caracteres
MEDIUMTEXT 16 millones
LONGTEXT 4 billones

//Enteros más grandes
MEDIUMINT
BIGINT

Restricciones
auto_increment ->   autoincrementa automaticamente la clabe primaria.
not null       ->   el campo no puede estar vacio
default ''     ->   proporciona un valor por defecto
PRIMARY_KEY(clave primaria) -> nos indica que campo es la clave primaria
*/


/* CREAR TABLA */

CREATE TABLE usuarios(
    id          int(11) auto_increment not null,
    nombre      varchar(100) not null,
    apellidos   varchar(255) default 'hola que tal',
    email       varchar(100) not null,
    password    varchar(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id) 
);
