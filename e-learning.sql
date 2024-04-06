-- Création de la base de données e-learning
CREATE DATABASE e_learning;

-- Utilisation de la base de données e-learning
USE e_learning;

-- Création de la table utilisateurs
CREATE TABLE utilisateurs (
  id INT PRIMARY KEY,
  nom VARCHAR(255),
  telephone VARCHAR(20),
  email VARCHAR(255),
  sexe VARCHAR(10),
  login VARCHAR(255),
  password VARCHAR(255),
  photo VARCHAR(255),
  role VARCHAR(50)
);

-- Création de la table cours
CREATE TABLE cours (
  id INT PRIMARY KEY,
  intitule VARCHAR(255),
  date DATE,
  contenus VARCHAR(255)
);

-- Création de la table formations
CREATE TABLE formations (
  id INT PRIMARY KEY,
  intitule VARCHAR(255),
  description VARCHAR(255),
  contenus VARCHAR(255),
  id_cours INT,
  FOREIGN KEY (id_cours) REFERENCES cours(id)
);

-- Création de la table questions
CREATE TABLE questions (
  id INT PRIMARY KEY,
  intitule VARCHAR(255),
  contenu VARCHAR(255),
  reponses VARCHAR(255)
);