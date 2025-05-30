DROP TABLE IF EXISTS PATIENT ;
DROP TABLE IF EXISTS MEDECIN ;
DROP TABLE IF EXISTS CONSULTATION ;
DROP TABLE IF EXISTS MEDICAMENT ;
DROP TABLE IF EXISTS PRESCRIPTION ;


CREATE TABLE PATIENT (NUMERO_SS INTEGER   ,
NOM_PATIENT VARCHAR(50),
PRIMARY KEY (NUMERO_SS) ) ;

CREATE TABLE MEDECIN (MATRICULE VARCHAR(5)PRIMARY KEY,
NOM_MEDECIN VARCHAR(50));


CREATE TABLE CONSULTATION (NUMERO VARCHAR(4) PRIMARY KEY   ,
DATE_CONSULT VARCHAR(50));

CREATE TABLE MEDICAMENT (CODE VARCHAR(4)   ,
LIBELLE VARCHAR(50),
PRIMARY KEY (CODE) ) ;

CREATE TABLE PRESCRIPTION (NB_PRISE INTEGER PRIMARY KEY);


INSERT INTO `PATIENT`(`NUMERO_SS`, `NOM_PATIENT`) VALUES (11032007,'KELSY');
INSERT INTO `MEDICAMENT`(`CODE`, `LIBELLE`) VALUES (100,'DOLIPHRANE');
INSERT INTO `MEDECIN`(`MATRICULE`, `NOM_MEDECIN`) VALUES (19,'TAIRY');
INSERT INTO `PRESCRIPTION`(`NB_PRISE`) VALUES (2);
INSERT INTO `CONSULTATION`(`NUMERO`, `DATE_CONSULT`) VALUES (06,09042025);