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

drop table if exists ValoreGPS;
create table ValoreGPS(
	id int primary key auto_increment not null,
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

insert into Utente(nome_utente,psw,email,telefono,tipo) values ("Georgiy",aes_encrypt("PasswordDiGeorgiy1","&F)H@McQfTjWnZr4"),"georgiy.farina@samtrevano.ch",41790123456,"A");
insert into Utente(nome_utente,psw,email,telefono,tipo) values ("Marco",aes_encrypt("PasswordDiMarco","&F)H@McQfTjWnZr4"),"marco.lorusso@samtrevano.ch",41791234567,"A");
insert into Utente(nome_utente,psw,email,telefono,tipo) values ("Matthias",aes_encrypt("PasswordDiMatthias","&F)H@McQfTjWnZr4"),"matthias.iannarella@samtrevano.ch", 41792345678,"A");
insert into Utente(nome_utente,psw,email,telefono,tipo) values ("Daniel",aes_encrypt("PasswordDiDaniel","&F)H@McQfTjWnZr4"),"daniel.matt@samtrevano.ch",41793456789,"A");

# TRIGGER PER L'ALLARME TERREMOTO---------------------------------------------------------------------------------------------------------------------------------
drop trigger if exists after_terremoto_insert;
/*
delimiter //
create DEFINER = CURRENT_USER trigger after_terremoto_insert
after insert on Terremoto
for each row
BEGIN        
SET NOCOUNT ON;

DECLARE @NombreDocumento VARCHAR(MAX) = (SELECT INSERTED.NombreDocumento 
                                         FROM INSERTED 
                                         WHERE INSERTED.IdCircuito = 53 
                                         AND INSERTED.IdTipoDoc = 45 
                                         AND INSERTED.Gestor = 'Gest1')

IF @NombreDocumento IS NOT NULL
BEGIN

    EXEC msdb.dbo.sp_send_dbmail
      @recipients = 'rsg@gmail.com', 
      @subject = 'New requeriment', 
      @body = 'It''s a new requeriment: ' + @NombreDocumento;
END
END
GO
//
delimiter ;*/
select * from Utente;



