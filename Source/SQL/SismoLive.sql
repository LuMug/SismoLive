drop database if exists SismoLive;
create database SismoLive;
use SismoLive;

# CREAZIONE TABELLE ----------------------------------------------------------------------------------
drop table if exists Utente;
create table Utente(
	nome_utente varchar(20) primary key not null,
	psw varchar(100) not null,
	email varchar(50) not null,
	telefono long not null,
	tipo varchar(20) not null
);

drop table if exists Configurazione;
create table Configurazione(
	id_configurazione int not null,
	parametro varchar(50) not null,
	valore int not null,
    primary key (id_configurazione, parametro)
);
/*
drop table if exists Luogo;
create table Luogo(
	id int primary key auto_increment not null,
    Nazione varchar(45),
    Citta varchar(45)
);*/

drop table if exists Terremoto;
create table Terremoto(
	id_registrazione int not null,
	id_terremoto int not null,
    magnitudo double not null,
	data_registrazione DATE not null,
    orario_registrazione TIME not null,
    primary key (id_registrazione, id_terremoto)
);

# CREAZIONE AMMINISTRATORI DI BASE -----------------------------------------------------------------------------------------------

insert into Utente(nome_utente,psw,email,telefono,tipo) values ("Georgiy",md5("PasswordDiGeorgiy"),"georgiy.farina@samtrevano.ch",41790123456,"A");
insert into Utente(nome_utente,psw,email,telefono,tipo) values ("Marco",md5("PasswordDiMarco"),"marco.lorusso@samtrevano.ch",41791234567,"A");
insert into Utente(nome_utente,psw,email,telefono,tipo) values ("Matthias",md5("PasswordDiMatthias"),"matthias.iannarella@samtrevano.ch", 41792345678,"A");
insert into Utente(nome_utente,psw,email,telefono,tipo) values ("Daniel",md5("PasswordDiDaniel"),"daniel.matt@samtrevano.ch",41793456789,"A");

# INSERIMENTO DI DATI FITTIZI -----------------------------------------------------------------------------------------------------------------------------------------------------

insert into Terremoto(id_registrazione,id_terremoto,magnitudo,data_registrazione,orario_registrazione) values(1,1,5.2,current_date(),curtime());
insert into Terremoto(id_registrazione,id_terremoto,magnitudo,data_registrazione,orario_registrazione) values(2,1,4.8,curdate(),curtime());
insert into Terremoto(id_registrazione,id_terremoto,magnitudo,data_registrazione,orario_registrazione) values(3,2,3.5,curdate(),curtime());
insert into Terremoto(id_registrazione,id_terremoto,magnitudo,data_registrazione,orario_registrazione) values(4,2,2.5,curdate(),curtime());
insert into Terremoto(id_registrazione,id_terremoto,magnitudo,data_registrazione,orario_registrazione) values(5,3,9,curdate(),curtime());
insert into Terremoto(id_registrazione,id_terremoto,magnitudo,data_registrazione,orario_registrazione) values(6,3,3,curdate(),curtime());
insert into Terremoto(id_registrazione,id_terremoto,magnitudo,data_registrazione,orario_registrazione) values(7,3,5,curdate(),curtime());
insert into Terremoto(id_registrazione,id_terremoto,magnitudo,data_registrazione,orario_registrazione) values(8,3,2,curdate(),curtime());
insert into Terremoto(id_registrazione,id_terremoto,magnitudo,data_registrazione,orario_registrazione) values(9,3,4,curdate(),curtime());
insert into Terremoto(id_registrazione,id_terremoto,magnitudo,data_registrazione,orario_registrazione) values(10,4,7,curdate(),curtime());
insert into Terremoto(id_registrazione,id_terremoto,magnitudo,data_registrazione,orario_registrazione) values(11,5,8,curdate(),curtime());
#-----------------------------------------------------------------------------------------------------------------------------------------------------
DELIMITER //
CREATE FUNCTION getStartId()
returns int deterministic
BEGIN 
	declare startId int;
	set startId = (select max(id_registrazione) -5 from Terremoto);
    return startId;
END
//
DELIMITER ;

DELIMITER //
CREATE FUNCTION getFinishId()
returns int deterministic
BEGIN 
	declare finishId int;
	set finishId = (select max(id_registrazione) from Terremoto);
    return finishId;
END
//
DELIMITER ;
#-----------------------------------------------------------------------------------------------------------------------------------------------------
drop view if exists tabella;
create view tabella as select t.data_registrazione, t.orario_registrazione, t.magnitudo, t.id_terremoto from Terremoto t where t.id_registrazione > getStartId();
select * from tabella;
