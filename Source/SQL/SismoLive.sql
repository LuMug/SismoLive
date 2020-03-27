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
	data_registrazione DATE not null,
    orario_registrazione TIME not null,
    id_gps int not null,
    primary key (id_registrazione, id_terremoto),
    foreign key Terremoto(id_gps) references ValoreGPS(id)
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


insert into ValoreGPS (id, latitudine, longitudine) values (1, -12.67442, -75.325157);
insert into ValoreGPS (id, latitudine, longitudine) values (2, 42.7590695, 46.8392256);
insert into ValoreGPS (id, latitudine, longitudine) values (3, 7.1801552, 79.8842521);
insert into ValoreGPS (id, latitudine, longitudine) values (4, 54.2569032, 26.0150745);
insert into ValoreGPS (id, latitudine, longitudine) values (5, 28.805453, 104.802326);
insert into ValoreGPS (id, latitudine, longitudine) values (6, 31.8840886, -102.4953899);
insert into ValoreGPS (id, latitudine, longitudine) values (7, -8.605402, 115.106609);
insert into ValoreGPS (id, latitudine, longitudine) values (8, 41.7820601, 20.0881443);
insert into ValoreGPS (id, latitudine, longitudine) values (9, 22.3908295, 113.9725126);
insert into ValoreGPS (id, latitudine, longitudine) values (10, 50.6429329, 13.9944445);
insert into ValoreGPS (id, latitudine, longitudine) values (11, 31.3115396, 120.6947551);
insert into ValoreGPS (id, latitudine, longitudine) values (12, -4.5329418, 105.2077798);
insert into ValoreGPS (id, latitudine, longitudine) values (13, -26.4417804, 31.9416226);
insert into ValoreGPS (id, latitudine, longitudine) values (14, 38.6627574, -9.0573022);
insert into ValoreGPS (id, latitudine, longitudine) values (15, 23.241655, 111.539333);
insert into ValoreGPS (id, latitudine, longitudine) values (16, '-8.2794', '113.4073');
insert into ValoreGPS (id, latitudine, longitudine) values (17, -7.6418714, 112.9110933);
insert into ValoreGPS (id, latitudine, longitudine) values (18, 34.4345947, 35.8361633);
insert into ValoreGPS (id, latitudine, longitudine) values (19, 28.041005, 110.814125);
insert into ValoreGPS (id, latitudine, longitudine) values (20, -8.2922696, 120.4415242);
insert into ValoreGPS (id, latitudine, longitudine) values (21, 49.9899828, 18.6926323);
insert into ValoreGPS (id, latitudine, longitudine) values (22, 49.4643925, 36.8584805);
insert into ValoreGPS (id, latitudine, longitudine) values (23, 51.3842543, 58.9999439);
insert into ValoreGPS (id, latitudine, longitudine) values (24, 10.122667, 123.540401);
insert into ValoreGPS (id, latitudine, longitudine) values (25, 55.8240814, 65.5756726);
insert into ValoreGPS (id, latitudine, longitudine) values (26, 45.0052663, 41.1199008);
insert into ValoreGPS (id, latitudine, longitudine) values (27, 50.3257904, 19.0018119);
insert into ValoreGPS (id, latitudine, longitudine) values (28, 10.391584, -84.138109);
insert into ValoreGPS (id, latitudine, longitudine) values (29, 56.6495031, 12.7902265);
insert into ValoreGPS (id, latitudine, longitudine) values (30, 27.756339, 112.555087);
insert into ValoreGPS (id, latitudine, longitudine) values (31, 47.372696, 132.145184);
insert into ValoreGPS (id, latitudine, longitudine) values (32, 40.4579077, -7.845845);
insert into ValoreGPS (id, latitudine, longitudine) values (33, -29.0303854, -51.2003761);
insert into ValoreGPS (id, latitudine, longitudine) values (34, 50.8839386, 18.6840269);
insert into ValoreGPS (id, latitudine, longitudine) values (35, 23.736457, 107.998149);
insert into ValoreGPS (id, latitudine, longitudine) values (36, 40.2023282, 116.2398367);
insert into ValoreGPS (id, latitudine, longitudine) values (37, -28.7415512, 30.461686);
insert into ValoreGPS (id, latitudine, longitudine) values (38, 15.5251409, -89.3343599);
insert into ValoreGPS (id, latitudine, longitudine) values (39, 41.6698545, -8.4450745);
insert into ValoreGPS (id, latitudine, longitudine) values (40, 4.9946855, 19.982437);
insert into ValoreGPS (id, latitudine, longitudine) values (41, 10.1709167, -66.8915809);
insert into ValoreGPS (id, latitudine, longitudine) values (42, 62.0772471, 49.5698112);
insert into ValoreGPS (id, latitudine, longitudine) values (43, -22.4205202, -42.9755528);
insert into ValoreGPS (id, latitudine, longitudine) values (44, 52.9718428, 63.1128326);
insert into ValoreGPS (id, latitudine, longitudine) values (45, 48.804517, -0.7467014);
insert into ValoreGPS (id, latitudine, longitudine) values (46, 28.423436, 109.006211);
insert into ValoreGPS (id, latitudine, longitudine) values (47, 31.688228, 105.570955);
insert into ValoreGPS (id, latitudine, longitudine) values (48, 28.79188, 98.397783);
insert into ValoreGPS (id, latitudine, longitudine) values (49, 31.1713871, 31.6967438);
insert into ValoreGPS (id, latitudine, longitudine) values (50, -6.076643, 106.4288088);
insert into ValoreGPS (id, latitudine, longitudine) values (51, -32.8976518, -68.7990117);
insert into ValoreGPS (id, latitudine, longitudine) values (52, -20.3170872, 57.5265289);
insert into ValoreGPS (id, latitudine, longitudine) values (53, 16.004175, 120.7806412);
insert into ValoreGPS (id, latitudine, longitudine) values (54, 27.352673, 109.174932);
insert into ValoreGPS (id, latitudine, longitudine) values (55, 13.9300945, 120.9522977);
insert into ValoreGPS (id, latitudine, longitudine) values (56, 23.124093, 113.8589235);
insert into ValoreGPS (id, latitudine, longitudine) values (57, 45.4331407, -76.3609305);
insert into ValoreGPS (id, latitudine, longitudine) values (58, 43.8986, 39.3467);
insert into ValoreGPS (id, latitudine, longitudine) values (59, 22.928305, 113.207187);
insert into ValoreGPS (id, latitudine, longitudine) values (60, 45.4131077, 79.917079);
insert into ValoreGPS (id, latitudine, longitudine) values (61, 13.490046, 120.960159);
insert into ValoreGPS (id, latitudine, longitudine) values (62, -12.868355, -72.6919814);
insert into ValoreGPS (id, latitudine, longitudine) values (63, 46.6522568, 33.3646929);
insert into ValoreGPS (id, latitudine, longitudine) values (64, 47.0166139, -68.1430098);
insert into ValoreGPS (id, latitudine, longitudine) values (65, 10.656869, 38.1662152);
insert into ValoreGPS (id, latitudine, longitudine) values (66, -42.7608818, -65.0587962);
insert into ValoreGPS (id, latitudine, longitudine) values (67, 41.40517, -8.7463716);
insert into ValoreGPS (id, latitudine, longitudine) values (68, 22.493937, 99.679493);
insert into ValoreGPS (id, latitudine, longitudine) values (69, 61.7983586, 34.3753781);
insert into ValoreGPS (id, latitudine, longitudine) values (70, 34.29922, 108.490475);
insert into ValoreGPS (id, latitudine, longitudine) values (71, -14.2234, -72.194618);
insert into ValoreGPS (id, latitudine, longitudine) values (72, -20.2877726, -45.5396954);
insert into ValoreGPS (id, latitudine, longitudine) values (73, 42.35, -71.06);
insert into ValoreGPS (id, latitudine, longitudine) values (74, 11.3799005, 5.6457951);
insert into ValoreGPS (id, latitudine, longitudine) values (75, 25.386379, 114.922922);
insert into ValoreGPS (id, latitudine, longitudine) values (76, 31.135176, 121.439288);
insert into ValoreGPS (id, latitudine, longitudine) values (77, 45.3639886, 5.5949365);
insert into ValoreGPS (id, latitudine, longitudine) values (78, 14.8454589, 121.0912149);
insert into ValoreGPS (id, latitudine, longitudine) values (79, 42.901533, 125.136451);
insert into ValoreGPS (id, latitudine, longitudine) values (80, 20.2639567, 105.9753452);
insert into ValoreGPS (id, latitudine, longitudine) values (81, 26.085391, 119.583599);
insert into ValoreGPS (id, latitudine, longitudine) values (82, 6.9280156, 79.8908308);
insert into ValoreGPS (id, latitudine, longitudine) values (83, '-8.0412', '111.6694');
insert into ValoreGPS (id, latitudine, longitudine) values (84, 3.1155165, 35.6040785);
insert into ValoreGPS (id, latitudine, longitudine) values (85, 5.6810774, 95.1171505);
insert into ValoreGPS (id, latitudine, longitudine) values (86, 31.5545599, 120.1398158);
insert into ValoreGPS (id, latitudine, longitudine) values (87, -16.2162656, 39.914466);
insert into ValoreGPS (id, latitudine, longitudine) values (88, 42.3223434, 22.7092535);
insert into ValoreGPS (id, latitudine, longitudine) values (89, 43.3688739, 46.5485537);
insert into ValoreGPS (id, latitudine, longitudine) values (90, 43.9307146, 4.8743415);
insert into ValoreGPS (id, latitudine, longitudine) values (91, 37.499972, 105.196902);
insert into ValoreGPS (id, latitudine, longitudine) values (92, 61.9581691, 14.8300464);
insert into ValoreGPS (id, latitudine, longitudine) values (93, 22.672099, 113.250897);
insert into ValoreGPS (id, latitudine, longitudine) values (94, 54.1407588, 43.1704696);
insert into ValoreGPS (id, latitudine, longitudine) values (95, 35.4208388, 136.6048742);
insert into ValoreGPS (id, latitudine, longitudine) values (96, 50.0259849, 22.1693843);
insert into ValoreGPS (id, latitudine, longitudine) values (97, 54.0521127, -1.9847194);
insert into ValoreGPS (id, latitudine, longitudine) values (98, 60.6717958, 17.1711587);
insert into ValoreGPS (id, latitudine, longitudine) values (99, 38.6002724, -9.0119332);
insert into ValoreGPS (id, latitudine, longitudine) values (100, -8.2576917, 112.0565795);


insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (1, 1, '8:48:56', '2019-11-30', 1);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (2, 2, '7:43:08', '2019-05-04', 2);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (3, 3, '4:19:19', '2019-09-03', 3);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (4, 4, '2:42:09', '2019-06-19', 4);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (5, 5, '4:52:58', '2019-12-16', 5);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (6, 6, '14:28:32', '2019-08-02', 6);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (7, 7, '21:53:20', '2019-08-13', 7);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (8, 8, '4:12:13', '2019-08-05', 8);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (9, 9, '3:09:51', '2019-05-18', 9);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (10, 10, '17:15:01', '2019-12-15', 10);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (11, 11, '16:02:31', '2019-12-29', 11);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (12, 12, '1:14:53', '2020-02-28', 12);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (13, 13, '14:44:41', '2019-04-18', 13);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (14, 14, '16:57:55', '2019-07-01', 14);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (15, 15, '2:46:08', '2019-10-16', 15);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (16, 16, '4:09:55', '2019-08-24', 16);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (17, 17, '6:02:03', '2020-02-13', 17);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (18, 18, '10:25:20', '2019-08-26', 18);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (19, 19, '9:34:43', '2019-09-15', 19);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (20, 20, '10:19:44', '2019-04-18', 20);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (21, 21, '23:08:39', '2020-02-14', 21);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (22, 22, '13:14:19', '2019-06-22', 22);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (23, 23, '12:45:40', '2019-12-20', 23);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (24, 24, '19:06:30', '2020-03-17', 24);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (25, 25, '2:25:48', '2019-10-24', 25);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (26, 26, '13:16:01', '2019-06-29', 26);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (27, 27, '18:34:53', '2019-08-05', 27);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (28, 28, '17:50:46', '2019-10-05', 28);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (29, 29, '17:25:06', '2020-02-29', 29);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (30, 30, '17:47:29', '2020-02-20', 30);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (31, 31, '17:18:25', '2019-05-27', 31);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (32, 32, '19:25:11', '2019-09-25', 32);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (33, 33, '4:32:59', '2019-12-21', 33);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (34, 34, '21:44:31', '2019-11-08', 34);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (35, 35, '21:15:13', '2019-12-26', 35);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (36, 36, '1:50:09', '2020-01-05', 36);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (37, 37, '12:55:05', '2020-01-22', 37);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (38, 38, '14:55:34', '2019-05-21', 38);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (39, 39, '22:05:08', '2019-06-06', 39);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (40, 40, '6:30:48', '2020-01-11', 40);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (41, 41, '10:13:51', '2020-03-14', 41);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (42, 42, '20:03:50', '2019-10-30', 42);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (43, 43, '19:03:28', '2019-07-13', 43);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (44, 44, '9:58:43', '2019-08-30', 44);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (45, 45, '1:13:26', '2019-07-12', 45);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (46, 46, '18:25:41', '2019-08-24', 46);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (47, 47, '23:38:31', '2020-01-25', 47);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (48, 48, '6:00:59', '2020-02-15', 48);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (49, 49, '2:23:03', '2019-04-26', 49);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (50, 50, '8:43:47', '2020-02-28', 50);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (51, 51, '6:00:32', '2019-06-24', 51);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (52, 52, '4:45:57', '2020-01-29', 52);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (53, 53, '7:21:31', '2019-07-26', 53);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (54, 54, '23:44:11', '2019-11-28', 54);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (55, 55, '8:05:30', '2019-09-28', 55);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (56, 56, '6:30:51', '2019-04-25', 56);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (57, 57, '10:45:59', '2019-11-18', 57);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (58, 58, '20:41:56', '2019-06-30', 58);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (59, 59, '6:38:40', '2019-05-14', 59);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (60, 60, '0:52:03', '2020-03-24', 60);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (61, 61, '3:49:24', '2020-02-11', 61);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (62, 62, '8:04:03', '2020-01-15', 62);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (63, 63, '20:15:09', '2019-07-14', 63);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (64, 64, '12:24:34', '2019-07-19', 64);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (65, 65, '19:18:52', '2019-06-11', 65);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (66, 66, '6:15:21', '2019-12-13', 66);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (67, 67, '23:45:20', '2019-09-20', 67);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (68, 68, '6:18:37', '2020-01-10', 68);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (69, 69, '0:31:29', '2019-12-27', 69);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (70, 70, '6:47:53', '2019-08-21', 70);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (71, 71, '10:31:47', '2020-02-05', 71);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (72, 72, '21:28:20', '2019-08-02', 72);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (73, 73, '6:06:32', '2019-12-31', 73);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (74, 74, '3:57:18', '2019-11-29', 74);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (75, 75, '9:33:55', '2019-11-02', 75);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (76, 76, '8:20:38', '2019-06-05', 76);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (77, 77, '20:10:20', '2020-03-14', 77);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (78, 78, '7:26:03', '2019-10-22', 78);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (79, 79, '19:43:39', '2020-01-07', 79);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (80, 80, '5:53:20', '2019-05-07', 80);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (81, 81, '0:35:08', '2019-11-16', 81);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (82, 82, '4:31:25', '2019-12-18', 82);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (83, 83, '5:02:44', '2019-04-02', 83);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (84, 84, '15:25:07', '2019-03-27', 84);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (85, 85, '8:24:24', '2020-03-22', 85);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (86, 86, '12:16:44', '2020-02-08', 86);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (87, 87, '20:57:37', '2019-09-29', 87);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (88, 88, '20:28:03', '2019-07-30', 88);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (89, 89, '14:10:46', '2020-01-06', 89);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (90, 90, '23:58:45', '2019-10-25', 90);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (91, 91, '1:04:03', '2020-03-06', 91);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (92, 92, '18:26:22', '2019-09-18', 92);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (93, 93, '20:07:08', '2019-08-20', 93);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (94, 94, '13:56:10', '2019-12-21', 94);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (95, 95, '14:39:19', '2019-08-31', 95);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (96, 96, '10:50:52', '2019-03-29', 96);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (97, 97, '19:37:25', '2020-03-19', 97);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (98, 98, '23:45:44', '2019-05-13', 98);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (99, 99, '4:16:31', '2019-10-19', 99);
insert into Terremoto (id_registrazione, id_terremoto, orario_registrazione, data_registrazione, id_gps) values (100, 100, '8:45:52', '2019-07-05', 100);

drop view if exists tabella;
create view tabella as select t.data_registrazione, t.orario_registrazione, t.id_terremoto, v.latitudine, v.longitudine from Terremoto t, ValoreGPS v  where t.id_terremoto < 5;