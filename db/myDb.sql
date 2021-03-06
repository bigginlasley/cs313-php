CREATE TABLE person
(
    person_id SERIAL NOT NULL PRIMARY KEY,
    last_name VARCHAR(20) NOT NULL,
    first_name VARCHAR(20) NOT NULL,
    email VARCHAR(40) NOT NULL,
    usrname VARCHAR(30) NOT NULL UNIQUE,
    person_address VARCHAR(100) NOT NULL,
    person_city VARCHAR(40) NOT NULL,
    person_state VARCHAR(20) NOT NULL,
    person_zip VARCHAR(15) NOT NULL 
    , password VARCHAR(100)
);

CREATE TABLE activity
(
    activity_id SERIAL NOT NULL PRIMARY KEY
    , activity_name VARCHAR(50) NOT NULL
    , activity_type int
    , FOREIGN KEY (activity_type) REFERENCES type_activity(type_of_activity_id)
    , activity_city VARCHAR(50) NOT NULL
    , activity_state VARCHAR(20) NOT NULL
    , activity_zip VARCHAR(15) NOT NULL
    , activity_address VARCHAR(100)
    , activity_capacity INT NOT NULL
    , activity_count INT NOT NULL
    , time VARCHAR(50)
);

CREATE TABLE type_activity
(
  type_of_activity_id SERIAL NOT NULL PRIMARY KEY
  , type_name VARCHAR(50) NOT NULL
);

CREATE TABLE person_activity
(
  id SERIAL NOT NULL PRIMARY KEY
  , p_id int
  , FOREIGN KEY (p_id) REFERENCES person(person_id)
  , a_id int
  , FOREIGN KEY (a_id) REFERENCES activity(activity_id)
);


INSERT INTO type_activity(type_name)
VALUES('Lifting');

INSERT INTO type_activity(type_name)
VALUES('Basketball');

INSERT INTO type_activity(type_name)
VALUES('Bridge Jumping');

INSERT INTO type_activity(type_name)
VALUES('Snowmobiling');

-- user_id INT NOT NULL REFERENCES person(personid);

INSERT INTO person (last_name, first_name, email, usrname, person_address, person_city, person_state, person_zip)
VALUES('Driscoll', 'Logan', 'logandriscoll@gmail.com', 'sledhead', '123 sage st.', 'American Falls','Idaho', '83211');

INSERT INTO person (last_name, first_name, email, usrname,  person_address, person_city, person_state, person_zip)
VALUES('Lasley', 'Ryland', 'Rlasley@gmail.com', 'Titans1827', '3032 Juniper Dr.', 'American Falls','Idaho', '83211');

INSERT INTO person (last_name, first_name, email, usrname, person_address, person_city, person_state, person_zip)
VALUES('Brambila', 'Missael', 'missaelbramb@gmail.com', 'MissaTheGreat', '429 Jefferson st.', 'American Falls','Idaho', '83211');

INSERT INTO person (last_name, first_name, email, usrname, person_address, person_city, person_state, person_zip)
VALUES('Carpio', 'Joey', 'TheGibby@gmail.com', 'TheGibby', '123 Pocatello ave.', 'American Falls','Idaho', '83211');

INSERT INTO person (last_name, first_name, email, usrname, person_address, person_city, person_state, person_zip)
VALUES('Lasley', 'Anthony', 'Biggs@gmail.com', 'Biggin', '123 7th St.', 'Rexburg','Idaho', '83440');

INSERT INTO activity (activity_name, activity_type, activity_time, activity_city, activity_state, activity_zip, activity_address, activity_capacity, activity_count)
VALUES('4v4', 2, '2019-10-02 11:30:00', 'American Falls', 'idaho', '83211', '2966 S Frontage Rd', 8, 4);

INSERT INTO activity (activity_name, activity_type, activity_time, activity_city, activity_state, activity_zip, activity_address, activity_capacity, activity_count)
VALUES('Gym partner needed', 1, '2019-12-02 07:30:00', 'American Falls', 'idaho', '83211', '2966 S Frontage Rd', 8, 4);


