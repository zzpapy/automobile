
CREATE TABLE MARQUE(
   id_marque INT PRIMARY KEY,
   nom VARCHAR(50) NOT NULL,
   origine VARCHAR(50)
);

CREATE TABLE VEHICULE(
   id_vehicule INT PRIMARY KEY,
   couleurs VARCHAR(255) NOT NULL,
   immat VARCHAR(7) NOT NULL,
   modele VARCHAR(50) NOT NULL,
   nb_portes INT(1),
   motorisation VARCHAR(50),
   id_marque INT REFERENCES MARQUE(id_marque) NOT NULL
);
