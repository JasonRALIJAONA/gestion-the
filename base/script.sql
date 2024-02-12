create database gestion_the;

use gestion_the;

CREATE TABLE utilisateurs (
    idUser SMALLINT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30),
    email VARCHAR(30),
    mdp VARCHAR(60),
    role VARCHAR(20)
) ENGINE=InnoDB;

CREATE TABLE the (
    idThe SMALLINT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30),
    occupation decimal(10,2),
    rendement decimal(10,2)
) ENGINE=InnoDB;

CREATE TABLE parcelle (
    numero SMALLINT PRIMARY KEY,
    surface decimal(10,2),
    idThe SMALLINT
) ENGINE=InnoDB;

alter table parcelle add FOREIGN KEY(idThe) references the(idThe);

CREATE TABLE cueilleur (
    idCueilleur SMALLINT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30),
    genre CHAR(1),
    dateNaissance DATE
) ENGINE=InnoDB;

CREATE TABLE depense (
    idDepense SMALLINT PRIMARY KEY AUTO_INCREMENT,
    description VARCHAR(30)
) ENGINE=InnoDB;

CREATE TABLE salaire (
    idCueilleur SMALLINT,
    montant decimal(10,2)
) ENGINE=InnoDB;
alter table salaire add FOREIGN KEY(idCueilleur) references cueilleur(idCueilleur);

