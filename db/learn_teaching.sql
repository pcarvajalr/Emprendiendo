
CREATE database learn_teaching;

use learn_teaching;

CREATE TABLE registerUser (
  email varchar(30) NOT NULL PRIMARY KEY,
  password varchar(20) NOT NULL,
  name varchar(20) NOT NULL,
  last_name varchar(20) NOT NULL,
  country varchar(20) NOT NULL,
  state varchar(20) DEFAULT NULL,
  lang varchar(20) NOT NULL
);

CREATE TABLE dataCountry(

);

CREATE TABLE profileUser (
  picture varchar(20) DEFAULT NULL,
  birthdate date NOT NULL,
  pleasures varchar(20),
  description varchar(200),
  email varchar(30) NOT NULL,
  foreing key(email) REFERENCE registerUser(email)
);

CREATE TABLE history (
  foreing key(email) REFERENCE registerUser(email),
  count int(3),
  date_sesion varchar(20),
  users varchar(20),
  time_start varchar(10),
  time_end varchar(10)
);

CREATE TABLE admin (
  email varchar(30) NOT NULL PRIMARY KEY,
  user varchar(20) NOT NULL,
  pass password(20) NOT NULL
);

