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


CREATE TABLE cueillette (
    idCueillette SMALLINT PRIMARY KEY AUTO_INCREMENT,
    dateCueillette DATE,
    idCueilleur SMALLINT,
    numeroParcelle SMALLINT,
    poids decimal(10,2)
) ENGINE=InnoDB;
alter table cueillette add FOREIGN KEY(idCueilleur) references cueilleur(idCueilleur);
alter table cueillette add FOREIGN KEY(numeroParcelle) references parcelle(numero);

CREATE TABLE listeDepense (
    id SMALLINT PRIMARY KEY AUTO_INCREMENT,
    date DATE,
    idDepense SMALLINT,
    montant decimal(10,2)
) ENGINE=InnoDB;
alter table listeDepense add FOREIGN KEY(idDepense) references depense(idDepense);

CREATE TABLE saison (
    idMois SMALLINT
)ENGINE=InnoDB;

create table config(
    minimum decimal(10,2),
    bonus decimal(10,2),
    mallus decimal(10,2)
)ENGINE=InnoDB;