# CREATE DATABASE grouper;

CREATE TABLE person
(
    personid SERIAL NOT NULL PRIMARY KEY,
    lastname VARCHAR(20) NOT NULL,
    firstname VARCHAR(20) NOT NULL,
    email VARCHAR(40) NOT NULL,
    usrname VARCHAR(30) NOT NULL UNIQUE,
    is_male BOOLEAN NOT NULL,
    personAddress VARCHAR(100),
    personCity VARCHAR(40) NOT NULL,
    PersonState VARCHAR(20) NOT NULL,
    Personzip VARCHAR(15) NOT NULL,
    
);

CREATE TABLE currentActivity
(
    cActivityId SERIAL NOT NULL PRIMARY KEY,
    cActivityName VARCHAR(50) NOT NULL,
    cActivityType VARCHAR(50) NOT NULL,
    cActivityTime DATETIME NOT NULL,
    cActivityCity VARCHAR(50) NOT NULL,
    cActivityState VARCHAR(20) NOT NULL,
    cActivityZip VARCHAR(15) NOT NULL,
    cActivityAddress VARCHAR(100)
);