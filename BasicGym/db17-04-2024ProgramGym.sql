CREATE DATABASE IF NOT EXISTS ProgramGym;
USE ProgramGym;

CREATE TABLE programmePoidDeCorp
(
    programmePoidDeCorpId INT PRIMARY KEY auto_increment NOT NULL,
    corpPompe VARCHAR(255),
    corpTraction  VARCHAR(255),
    corpSquat  VARCHAR(255),
    corpAbdos  varchar(255), 
    nbReps INT,
    nbSeries INT
);
CREATE TABLE programmeMusculation
(
    programmeMusculationId INT PRIMARY KEY auto_increment NOT NULL,
    muscuBras VARCHAR(255),
    muscuJambes  VARCHAR(255),
    muscuMollets  VARCHAR(255),
    muscuDos  varchar(255),
    muscuPecs  varchar(255),
    muscuAbdos  varchar(255),
    muscuFessiers  varchar(255),
    nbReps INT,
    nbSeries INT

);
CREATE TABLE programmeCardio
(
    programmeCardioId INT PRIMARY KEY auto_increment NOT NULL,
    cardioEndurence VARCHAR(255),
    cardioSprint  VARCHAR(255),
    cardioMarche  VARCHAR(255),
    cardioPente  varchar(255),
    distance INT,
    temps TIME

);
CREATE TABLE programmeSportif
(
    programmeSportifId INT auto_increment NOT NULL,
    programmeSportifNom VARCHAR(255),
    programmePoidDeCorpId int,
    programmeMusculationId int,
    programmeCardioId int,
    PRIMARY KEY (programmeSportifId),
    FOREIGN KEY (programmePoidDeCorpId) REFERENCES programmepoiddecorp(programmePoidDeCorpId),
    FOREIGN KEY (programmeMusculationId) REFERENCES programmemusculation(programmeMusculationId),
    FOREIGN KEY (programmeCardioId) REFERENCES programmecardio(programmeCardioId)
);
CREATE TABLE critereUtilisateur
(
    critereUtilisateurId INT PRIMARY KEY auto_increment NOT NULL,
    critereUtilisateurPoid int,
    critereUtilisateurTaille int,
    critereUtilisateurAge int,
    critereUtilisateurNutrition bool,
    critereUtilisateurSexe bool
);
CREATE TABLE Utilisateur
(
    utilisateurId INT auto_increment NOT NULL,
    utilisateurPoid int,
	utilisateurNom varchar(255),
    utilisateurPrenom varchar(255),
    utilisateurEmail varchar(255),
    utilisateurMotDePasse varchar(255),
    critereUtilisateurId int,
	PRIMARY KEY (utilisateurId),
    FOREIGN KEY (critereUtilisateurId) REFERENCES critereutilisateur(critereUtilisateurId)
);
CREATE TABLE ProgrammeSportif_utilisateur
(
    programmeSportif_utilisateurId INT auto_increment NOT NULL,
    utilisateurId int,
    programmeSportifId int,
	PRIMARY KEY (programmeSportif_utilisateurId),
    FOREIGN KEY (utilisateurId) REFERENCES utilisateur(utilisateurId),
    FOREIGN KEY (programmeSportifId) REFERENCES programmesportif(programmeSportifId)
)

DELIMITER $$
CREATE PROCEDURE InsertData()
BEGIN
  DECLARE i INT DEFAULT 1;
  WHILE i <= 1000 DO
    INSERT INTO programmePoidDeCorp (corpPompe, corpTraction, corpSquat, corpAbdos, nbReps, nbSeries)
    VALUES (CONCAT('Pompes classiques ', i), CONCAT('Tractions supination ', i), CONCAT('Squats classiques ', i), CONCAT('Crunchs ', i), i, i);

    INSERT INTO programmeMusculation (muscuBras, muscuJambes, muscuMollets, muscuDos, muscuPecs, muscuAbdos, muscuFessiers, nbReps, nbSeries)
    VALUES (CONCAT('Curl haltères ', i), CONCAT('Presse à cuisses ', i), CONCAT('Mollets debout à la machine ', i), CONCAT('Tirage poitrine ', i), CONCAT('Développé couché ', i), CONCAT('Crunchs ', i), CONCAT('Hip thrust ', i), i, i);

    INSERT INTO programmeCardio (cardioEndurence, cardioSprint, cardioMarche, cardioPente, distance, temps)
    VALUES (CONCAT('Course longue distance ', i), CONCAT('Sprints 100m ', i), CONCAT('Marche rapide ', i), CONCAT('Montée de côtes ', i), i, SEC_TO_TIME(i * 60));

    INSERT INTO programmeSportif (programmeSportifNom, programmePoidDeCorpId, programmeMusculationId, programmeCardioId)
    VALUES (CONCAT('Programme débutant ', i), i, i, i);

    INSERT INTO critereUtilisateur (critereUtilisateurPoid, critereUtilisateurTaille, critereUtilisateurAge, critereUtilisateurNutrition, critereUtilisateurSexe)
    VALUES (50 + FLOOR(RAND() * 50), 150 + FLOOR(RAND() * 50), 18 + FLOOR(RAND() * 50), ROUND(RAND()), ROUND(RAND()));

    INSERT INTO Utilisateur (utilisateurPoid, utilisateurNom, utilisateurPrenom, utilisateurEmail, utilisateurMotDePasse, critereUtilisateurId)
    VALUES (50 + FLOOR(RAND() * 50), CONCAT('Dupont', i), CONCAT('Jean', i), CONCAT('jean.dupont', i, '@example.com'), 'motdepasse', i);

    INSERT INTO ProgrammeSportif_utilisateur (utilisateurId, programmeSportifId)
    VALUES (i, i);

    SET i = i + 1;
  END WHILE;
END$$
DELIMITER ;

CALL InsertData();
