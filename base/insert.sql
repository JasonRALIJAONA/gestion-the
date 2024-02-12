INSERT INTO utilisateurs (nom, email, mdp, role)
VALUES 
('admin', 'admin@gmail.com', sha1('admin01'), 'admin');

INSERT INTO utilisateurs (nom, email, mdp, role)
VALUES 
('Bob', 'Bob@gmail.com', SHA1('bob01'), 'utilisateur'),
('Jean', 'Jean@gmail.com', SHA1('jean01'), 'utilisateur');

INSERT INTO the (nom, occupation, rendement) VALUES 
('Thé vert', 50.25, 15.75),
('Thé noir', 40.75, 18.50),
('Thé oolong', 35.00, 20.25),
('Thé blanc', 45.50, 12.00);

INSERT INTO parcelle (numero, surface, idThe) VALUES 
(1, 100.00, 1),
(2, 75.50, 2),
(3, 120.75, 3),
(4, 90.25, 1);

INSERT INTO cueilleur (nom, genre, dateNaissance) VALUES 
('Jean Dupont', 'M', '1990-05-15'),
('Marie Tremblay', 'F', '1985-12-10'),
('Pierre Lefebvre', 'M', '1992-07-25'),
('Sophie Martin', 'F', '1988-09-20');

INSERT INTO depense (description) VALUES 
('Engrais'),
('Carburant'),
('Logistique'),
('Entretien'),
('Salaires'),
('Matériel'),
('Équipement'),
('Assurance'),
('Fournitures'),
('Publicité');

INSERT INTO salaire (idCueilleur, montant) VALUES 
(1, 10.00),  -- Salaire de 10€ pour le cueilleur avec l'idCueilleur 1
(2, 10.00),  -- Salaire de 10€ pour le cueilleur avec l'idCueilleur 2
(3, 10.00),  -- Salaire de 10€ pour le cueilleur avec l'idCueilleur 3
(4, 10.00);  -- Salaire de 10€ pour le cueilleur avec l'idCueilleur 4
