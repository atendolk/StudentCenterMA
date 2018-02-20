DROP DATABASE IF EXISTS students_classesdb;
CREATE DATABASE students_classesdb;

USE students_classesdb;

CREATE TABLE studentstoclasses(
  id INTEGER(11) AUTO_INCREMENT NOT NULL,
  firstName VARCHAR(100),
  lastName VARCHAR(100),
  class VARCHAR(100),
  phoneNumber VARCHAR(15),
  PRIMARY KEY (id)
);

INSERT INTO studentstoclasses (firstName, lastName, class, phoneNumber) values ('Namita', 'Tendolkar', 'Calculus','5128254068');

SELECT * FROM studentstoclasses