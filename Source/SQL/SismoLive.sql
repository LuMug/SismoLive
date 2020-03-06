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

insert into Utente(nome_utente,psw,email,telefono,tipo) values ("Georgiy",md5("PasswordDiGeorgiy"),"georgiy.farina@samtrevano.ch",41790123456,"A");
insert into Utente(nome_utente,psw,email,telefono,tipo) values ("Marco",md5("PasswordDiMarco"),"marco.lorusso@samtrevano.ch",41791234567,"A");
insert into Utente(nome_utente,psw,email,telefono,tipo) values ("Matthias",md5("PasswordDiMatthias"),"matthias.iannarella@samtrevano.ch", 41792345678,"A");
insert into Utente(nome_utente,psw,email,telefono,tipo) values ("Daniel",md5("PasswordDiDaniel"),"daniel.matt@samtrevano.ch",41793456789,"A");

select * from utente;

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
