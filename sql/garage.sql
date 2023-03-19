drop database if exists garage2;
create database garage2;
use garage2;

create table technicien(
    technicien_id int(3) not null auto_increment,
    nom varchar (50),
    prenom varchar (50),
    mail varchar (50),
    tel varchar (50),
    qualification varchar (50),
    primary key (technicien_id)
);
create table client (
    client_id int(3) not null auto_increment,
    nom varchar (50),
    prenom varchar (50),
    mail varchar (50),
    tel varchar (50),
    primary key (client_id)
);
create table vehicule (
    vehicule_id int(3) not null auto_increment,
    marquere varchar(50),
    immatricule varchar(50),
    etat varchar(50),
    client_id int(3) not null,
  technicien_id int(3) not null,
    primary key (vehicule_id),
    foreign key (client_id) references client (client_id),
    foreign key (technicien_id) references technicien (technicien_id)
);
create table intervention(
    intervention_id int(3) not null auto_increment,
    intitule varchar (50),
    statut varchar (50),
    prix float,
    dateinter date,
    technicien_id int(3) not null,
    client_id int(3) not null,
    primary key (intervention_id),
    foreign key (technicien_id ) references technicien (technicien_id),
    foreign key (client_id) references client (client_id)
);
insert into technicien values
(null, "Mark", "Lopez",  "mark@mail.com", "0650669645","Reparateur partiel"),
(null, "Dubo", "John", "0785946630", "ajusteur","dubo@mail.com"),
(null, "Cael", "Marie", "cael@mail.com", "0653497852", "superviseur");
insert into client values
(null, "Hola", "ferme", "hola@mail.com", "0647951235"),
(null, "FORNA", "FORNA", "YO@mail.com", "0785944690"),
(null, "Jelle", "Jelle", "jelle@mail.com", "0306487566");
insert into vehicule values
(null, "PEUJO", "FZ-256", "Terminer", 1, 2),
(null, "TESLA", "TR-894", "En attente", 2, 1),
(null, "TOYATA", "PR-854", "En attente",3, 3);
insert into intervention values
(null, "Reparation de freins", "Terminer", 12000, '2022.10.05', 1, 2 ),
            (null, "Vitrage", "En cours", 13000, '2022.11.08', 2, 2 ),
(null, "Reparation de pneu", "Terminer", 11000, '2022.10.05', 3, 3 );

create table user (
user_id int(3) not null auto_increment,
nom varchar(50),
prenom varchar(255),
email varchar(255),
mdp varchar(255),
role enum ("admin", "user"),
primary key (user_id)
);
insert into user values
 (null, "kidd", "Miguel", "admin@gmail.com", "123", "admin"),
 (null, "John", "Mark", "user@gmail.com", "321", "user");