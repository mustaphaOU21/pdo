DROP DATABASE IF EXISTS winkel;
USE winkle;

CREATE DATABASE winkle;

CREATE TABLE producten (
	product_code int not null primary key,
    product_naam varchar(255),
    prijs_per_product decimal(6.2),
    omschrijving varchar(255)
);