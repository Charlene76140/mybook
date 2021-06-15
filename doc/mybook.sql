DROP DATABASE IF EXISTS mybook;
CREATE DATABASE mybook CHARACTER SET 'utf8';
USE mybook;

CREATE TABLE customer (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    lastname VARCHAR(100) NOT NULL,
    firstname VARCHAR(100) NOT NULL,
    street_number VARCHAR(10) NOT NULL,
    street_address VARCHAR(255) NOT NULL,
    area_code VARCHAR (50) NOT NULL,
    city VARCHAR (100) NOT NULL,
    personnal_code INT NOT NULL,
    PRIMARY KEY (id)
)
ENGINE=InnoDB;

CREATE TABLE book (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    author VARCHAR(100) NOT NULL,
    release_date DATE NOT NULL,
    category VARCHAR (100) NOT NULL,
    status VARCHAR (100) NOT NULL,
    summary TEXT NOT NULL,
    customer_id INT UNSIGNED,
    PRIMARY KEY (id),
    FOREIGN KEY (customer_id) REFERENCES customer(id)
)
ENGINE=InnoDB;

INSERT INTO customer (lastname, firstname, street_number,street_address, area_code, city, personnal_code)
 VALUES
('Corint','Charly', '25 bis','rue des accacias','76100','Rouen', 123456789),
('Dupont','Martine', '475','avenue Victor Hugo, apt 5','76230','Bois-Guillaume', 234567891),
('Parmentier', 'Jean', '2', 'rue de la liberation', '76000', 'Rouen', 345678912)
;
 

INSERT INTO book (title, author, release_date, category, status , summary, customer_id)
VALUES
('La Conjuration des imbéciles', 'John Kennedy Toole', '2002-04-05', 'Roman', 'disponible','Années 1960 à la Nouvelle Orléans : bla bla bla bla', NULL),
('Tout ce que j’aimais', 'Siri Hustvedt', '2013-07-10' , 'Roman', 'indisponible', 'Deux couples d’artistes s’installent, chaque couple a un enfant. Mais des drames vont frapper leur vie, bla bla bal', 2),
('Le Horla', 'Guy de Maupassant', '1994-08-18', 'Récit Fantastique', 'indisponible', 'Le narrateur est-il fou ? Le Horla est-il une créature fantomatique ou une créature supérieure d’origine inconnue ?', 3)
;
