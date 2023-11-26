CREATE DATABASE presentDB;

USE presentDB;

CREATE TABLE presents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    image VARCHAR(255),
    price DECIMAL(10, 2),
    gender ENUM('male', 'female')
);
CREATE USER 'present'@'localhost' IDENTIFIED BY 'root';
GRANT ALL PRIVILEGES ON presentDB.* TO 'present'@'localhost';
FLUSH PRIVILEGES;



INSERT INTO presents (title, description, image, price, gender)
VALUES ('Klocka', 'Stilren klocka för män', 'path/to/image1.jpg', 999.99, 'male'),
       ('Parfym', 'Frisch doft för kvinnor', 'path/to/image2.jpg', 499.99, 'female'),
        ('Romantisk middag', 'En kväll med romantisk middag för två', 'path/to/image3.png', 1200.00, 'unisex'),
    ('Verktygssats', 'Praktisk verktygssats för hemmaprojekt', 'path/to/image4.jpg', 750.00, 'male'),
    ('Spa-dag', 'Avkopplande spa-dag för total avslappning', 'path/to/image5.jpg', 650.00, 'female'),
    ('Sportklocka', 'Håll koll på din träning med denna avancerade sportklocka', 'path/to/image6.jpg', 1300.00, 'male'),
    ('Smyckesset', 'Elegant smyckesset för en speciell tillfälle', 'path/to/image7.jpg', 1800.00, 'female');
    
    ALTER TABLE presents MODIFY gender ENUM('male', 'female', 'unisex');

       
