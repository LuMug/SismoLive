drop database if exists SismoLive;
create database SismoLive;
use SismoLive;
/*
# CREAZIONE TABELLE ----------------------------------------------------------------------------------
drop table if exists Utente;
create table Utente(
	nome_utente varchar(20) primary key not null,
	psw varchar(20) not null,
	email varchar(50) not null,
	telefono int not null,
	tipo varchar(20) not null
);

drop table if exists Configurazione;
create table Configurazione(
	id_configurazione int not null,
	parametro varchar(50) not null,
	valore int not null,
    primary key (id_configurazione, parametro)
);

drop table if exists ValoreGPS;
create table ValoreGPS(
	id int primary key auto_increment,
	longitudine double not null,
	latitudine double not null
);

drop table if exists Terremoto;
create table Terremoto(
	id_registrazione int not null,
	id_terremoto int not null,
	momento_registrazione TIMESTAMP(3)  not null,
    id_gps int not null,
    primary key (id_registrazione, id_terremoto),
    foreign key Terremoto(id_gps) references ValoreGPS(id)
);

# CREAZIONE AMMINISTRATORI DI BASE -----------------------------------------------------------------------------------------------

insert into Utente(nome_utente,psw,mail,telefono,tipo) values ("Georgiy","");*/
set @prova = aes_encrypt("psw","chiave");

set @psw_nuova = aes_encrypt("pw","chiave");
select @prova = @psw_nuova;

