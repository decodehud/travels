create database travels;
use travels;

CREATE TABLE contacto (
  idContacto int(11) primary key auto_increment,
  idUsuario int(11) DEFAULT NULL,
  nombre varchar(25) NOT NULL,
  apellido varchar(25) NOT NULL,
  asunto varchar(100) NOT NULL,
  telefono varchar(14) NOT NULL,
  correo varchar(50) NOT NULL,
  mensaje varchar(255) NOT NULL,
  pais varchar(15)
);


CREATE TABLE encuesta (
  idEncuesta int(11) primary key auto_increment,
  idUsuario int(11) DEFAULT NULL,
  nombre varchar(25) NOT NULL,
  edad int(11) NOT NULL,
  atencionViaje varchar(100) not null,
  genero varchar(12) NOT NULL,
  ultimoViaje VARCHAR(100) NOT NULL,
  lugarViaje varchar(50) NOT NULL,
  musicaViaje varchar(4) NOT NULL,
  motivoViaje varchar(50) NOT NULL,
  lugarAloja varchar(50) NOT NULL,
  tipoViaje varchar(20) NOT NULL,
  tiempoViaje varchar(20) NOT NULL,
  opinion varchar(100) NOT NULL,
  medioContacto varchar(20) NOT NULL,
  mejoraServicio varchar(100) NOT NULL
);



CREATE TABLE productos (
  idProductos int(11) primary key auto_increment,
  idUsuario int(11) DEFAULT NULL,
  nombre varchar(50) NOT NULL,
  precio double NOT NULL,
  pais varchar(20) NOT NULL,
  alojamiento varchar(50) NOT NULL,
  fechaViaje varchar(20) NOT NULL,
  descripcion varchar(255) NOT NULL
);


CREATE TABLE usuario (
  idUsuario int(11) primary key auto_increment,
  idEncuesta int(11) DEFAULT NULL,
  idContacto int(11) DEFAULT NULL,
  idProductos int(11) DEFAULT NULL,
  nombre varchar(25) NOT NULL,
  apellido varchar(25) NOT NULL,
  correo varchar(50) NOT NULL,
  fecha varchar(20) NOT NULL,
  telefono varchar(14) NOT NULL,
  usuario varchar(20) NOT NULL,
  contrasena varchar(20) NOT NULL,
  tipocliente varchar(15) NOT NULL DEFAULT 'cliente',
  estado varchar(2) NOT NULL DEFAULT 'A',
  pais varchar(20) NOT NULL
);

alter table usuario;
ALTER TABLE usuario ADD CONSTRAINT fkusurio_encuesta FOREIGN KEY(idEncuesta) REFERENCES encuesta(idEncuesta);
ALTER TABLE usuario ADD CONSTRAINT fkusurio_productos FOREIGN KEY(idProductos) REFERENCES productos(idProductos);
ALTER TABLE usuario ADD CONSTRAINT fkusurio_contacto FOREIGN KEY(idContacto) REFERENCES contacto(idContacto);