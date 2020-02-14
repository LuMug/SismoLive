drop database if exists SismoLive;
create database SismoLive;
use SismoLive;

drop table if exists Utente;
create table Utente(
	nome varchar(20) primary key not null,
	psw varchar(20) not null,
	email varchar(50) not null,
	telefono int not null,
	tipo varchar(20) not null
);

drop table if exists Configurazione;
create table Configurazione(
	id_configurazione int not null,
	parametro varchar(50) not null,
	valore int not null
);

