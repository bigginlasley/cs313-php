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

CREATE TABLE Activity
(
    activityId SERIAL NOT NULL PRIMARY KEY,
    activityName VARCHAR(50) NOT NULL,
    activityType VARCHAR(50) NOT NULL,
    activityTime DATETIME NOT NULL,
    activityCity VARCHAR(50) NOT NULL,
    activityState VARCHAR(20) NOT NULL,
    activityZip VARCHAR(15) NOT NULL,
    activityAddress VARCHAR(100),
    activityCapacity INT NOT NULL,
    activityCount INT NOT NULL
);

CREATE TABLE creator
(
    id SERIAL NOT NULL PRIMARY KEY,
    user_id INT NOT NULL REFERENCES person(personid),
    activity_id INT NOT NULL REFERENCES Activity(activityId),
    createTime DATETIME NOT NULL
);