PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE CIDADES (
    CIDADE_ID INTEGER PRIMARY KEY AUTOINCREMENT,
    CIDADE_NOME TEXT NOT NULL
, POPULACAO INTEGER);
INSERT INTO CIDADES VALUES(1,'CAMPO GRANDE',NULL);
INSERT INTO CIDADES VALUES(2,'BLUMENAU',NULL);
INSERT INTO CIDADES VALUES(3,'FLORIANOPOLIS',NULL);
INSERT INTO CIDADES VALUES(4,'SAO PAULO',NULL);
INSERT INTO CIDADES VALUES(5,'JOINVILLE',NULL);
CREATE TABLE PESSOAS (
    PESSOA_ID INTEGER PRIMARY KEY AUTOINCREMENT,
    PESSOA_NOME TEXT NOT NULL,
    PESSOA_IDADE INTEGER,
    PESSOA_CIDADES_ID INTEGER NOT NULL
);
INSERT INTO PESSOAS VALUES(1,'Débora Brito',19,1);
INSERT INTO PESSOAS VALUES(2,'Alice',4,2);
INSERT INTO PESSOAS VALUES(3,'Ketlyn',29,3);
INSERT INTO PESSOAS VALUES(4,'Cristian',28,4);
INSERT INTO PESSOAS VALUES(5,'Helder',28,5);
INSERT INTO PESSOAS VALUES(6,'Helder',22,5);
INSERT INTO PESSOAS VALUES(7,'TARSIO',51,2);
INSERT INTO PESSOAS VALUES(8,'SAMIR',50,2);
INSERT INTO PESSOAS VALUES(9,'PEDRO',18,3);
INSERT INTO PESSOAS VALUES(10,'Andre',18,3);
INSERT INTO PESSOAS VALUES(11,'Tamires',18,3);
INSERT INTO PESSOAS VALUES(12,'MARIA',22,4);
INSERT INTO PESSOAS VALUES(13,'PATRICIA',14,2);
INSERT INTO PESSOAS VALUES(14,'PATRICIA',18,1);
DELETE FROM sqlite_sequence;
INSERT INTO sqlite_sequence VALUES('CIDADES',5);
INSERT INTO sqlite_sequence VALUES('PESSOAS',14);
COMMIT;
