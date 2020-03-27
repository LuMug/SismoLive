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

drop table if exists Luogo;
create table Luogo(
	id int primary key auto_increment not null,
    Nazione varchar(45),
    Citta varchar(45)
);

drop table if exists Terremoto;
create table Terremoto(
	id_registrazione int not null,
	id_terremoto int not null,
    misurazione double,
	momento_registrazione TIMESTAMP(3)  not null,
    id_luogo int not null,
    primary key (id_registrazione, id_terremoto),
    foreign key Terremoto(id_luogo) references Luogo(id)
);

# CREAZIONE AMMINISTRATORI DI BASE -----------------------------------------------------------------------------------------------

insert into Utente(nome_utente,psw,email,telefono,tipo) values ("Georgiy",md5("PasswordDiGeorgiy"),"georgiy.farina@samtrevano.ch",41790123456,"A");
insert into Utente(nome_utente,psw,email,telefono,tipo) values ("Marco",md5("PasswordDiMarco"),"marco.lorusso@samtrevano.ch",41791234567,"A");
insert into Utente(nome_utente,psw,email,telefono,tipo) values ("Matthias",md5("PasswordDiMatthias"),"matthias.iannarella@samtrevano.ch", 41792345678,"A");
insert into Utente(nome_utente,psw,email,telefono,tipo) values ("Daniel",md5("PasswordDiDaniel"),"daniel.matt@samtrevano.ch",41793456789,"A");

select * from utente;

insert into Luogo (Nazione, citta) values ('Ireland', 'Carrigtwohill');
insert into Luogo (Nazione, citta) values ('Czech Republic', 'Roudnice nad Labem');
insert into Luogo (Nazione, citta) values ('Canada', 'Bay Roberts');
insert into Luogo (Nazione, citta) values ('China', 'Langchi');
insert into Luogo (Nazione, citta) values ('Uganda', 'Kalangala');
insert into Luogo (Nazione, citta) values ('China', 'Mishan');
insert into Luogo (Nazione, citta) values ('South Africa', 'Ndwedwe');
insert into Luogo (Nazione, citta) values ('Ireland', 'Malahide');
insert into Luogo (Nazione, citta) values ('South Africa', 'Caledon');
insert into Luogo (Nazione, citta) values ('Svizzera', 'Lugano');


insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (1, 1, '6/13/2019', 1);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (2, 2, '8/23/2019', 2);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (3, 3, '7/21/2019', 3);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (4, 4, '11/25/2019', 4);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (5, 5, '8/22/2019', 5);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (6, 6, '11/25/2019', 6);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (7, 7, '9/16/2019', 7);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (8, 8, '6/12/2019', 8);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (9, 9, '4/23/2019', 9);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (10, 10, '9/30/2019', 10);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (11, 11, '1/24/2020', 11);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (12, 12, '3/9/2019', 12);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (13, 13, '5/12/2019', 13);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (14, 14, '8/31/2019', 14);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (15, 15, '3/5/2020', 15);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (16, 16, '1/1/2020', 16);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (17, 17, '4/10/2019', 17);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (18, 18, '1/27/2020', 18);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (19, 19, '3/23/2019', 19);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (20, 20, '2/23/2020', 20);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (21, 21, '7/18/2019', 21);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (22, 22, '7/22/2019', 22);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (23, 23, '12/7/2019', 23);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (24, 24, '4/2/2019', 24);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (25, 25, '2/5/2020', 25);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (26, 26, '2/22/2020', 26);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (27, 27, '12/7/2019', 27);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (28, 28, '1/3/2020', 28);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (29, 29, '5/14/2019', 29);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (30, 30, '10/12/2019', 30);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (31, 31, '10/13/2019', 31);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (32, 32, '10/25/2019', 32);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (33, 33, '5/11/2019', 33);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (34, 34, '6/25/2019', 34);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (35, 35, '6/5/2019', 35);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (36, 36, '3/1/2020', 36);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (37, 37, '8/18/2019', 37);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (38, 38, '5/12/2019', 38);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (39, 39, '5/4/2019', 39);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (40, 40, '4/9/2019', 40);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (41, 41, '6/26/2019', 41);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (42, 42, '11/5/2019', 42);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (43, 43, '4/16/2019', 43);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (44, 44, '4/25/2019', 44);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (45, 45, '11/12/2019', 45);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (46, 46, '5/22/2019', 46);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (47, 47, '2/11/2020', 47);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (48, 48, '9/17/2019', 48);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (49, 49, '7/20/2019', 49);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (50, 50, '9/21/2019', 50);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (51, 51, '2/9/2020', 51);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (52, 52, '10/3/2019', 52);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (53, 53, '9/4/2019', 53);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (54, 54, '10/21/2019', 54);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (55, 55, '2/9/2020', 55);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (56, 56, '10/16/2019', 56);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (57, 57, '2/5/2020', 57);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (58, 58, '3/23/2019', 58);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (59, 59, '9/30/2019', 59);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (60, 60, '8/2/2019', 60);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (61, 61, '5/21/2019', 61);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (62, 62, '11/25/2019', 62);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (63, 63, '4/12/2019', 63);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (64, 64, '4/6/2019', 64);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (65, 65, '3/5/2020', 65);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (66, 66, '10/4/2019', 66);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (67, 67, '10/12/2019', 67);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (68, 68, '12/20/2019', 68);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (69, 69, '6/10/2019', 69);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (70, 70, '7/6/2019', 70);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (71, 71, '7/25/2019', 71);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (72, 72, '5/20/2019', 72);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (73, 73, '2/14/2020', 73);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (74, 74, '10/14/2019', 74);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (75, 75, '2/7/2020', 75);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (76, 76, '9/4/2019', 76);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (77, 77, '9/9/2019', 77);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (78, 78, '12/15/2019', 78);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (79, 79, '6/27/2019', 79);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (80, 80, '1/27/2020', 80);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (81, 81, '11/4/2019', 81);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (82, 82, '5/20/2019', 82);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (83, 83, '10/1/2019', 83);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (84, 84, '4/3/2019', 84);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (85, 85, '6/22/2019', 85);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (86, 86, '7/14/2019', 86);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (87, 87, '8/30/2019', 87);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (88, 88, '1/17/2020', 88);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (89, 89, '12/23/2019', 89);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (90, 90, '10/14/2019', 90);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (91, 91, '4/6/2019', 91);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (92, 92, '9/12/2019', 92);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (93, 93, '3/28/2019', 93);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (94, 94, '4/11/2019', 94);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (95, 95, '12/29/2019', 95);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (96, 96, '12/30/2019', 96);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (97, 97, '12/24/2019', 97);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (98, 98, '7/14/2019', 98);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (99, 99, '10/4/2019', 99);
insert into Terremoto (id_registrazione, id_terremoto, momento_registrazione, id_gps) values (100, 100, '4/15/2019', 100);