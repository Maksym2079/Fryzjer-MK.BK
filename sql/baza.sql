CREATE DATABASE IF NOT EXISTS fryzjer;
USE fryzjer;

CREATE TABLE uzytkownicy (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(50),
    nazwisko VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    haslo VARCHAR(255),
    rola ENUM('klient', 'admin') DEFAULT 'klient'
);

CREATE TABLE uslugi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nazwa VARCHAR(100),
    cena DECIMAL(6,2),
    czas_minut INT
);

CREATE TABLE wizyty (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_uzytkownika INT,
    id_uslugi INT,
    data DATE,
    godzina TIME,
    FOREIGN KEY (id_uzytkownika) REFERENCES uzytkownicy(id),
    FOREIGN KEY (id_uslugi) REFERENCES uslugi(id)
);
