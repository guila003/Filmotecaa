-- Création de la table 'movies'
CREATE TABLE movies (
    id INT AUTO_INCREMENT PRIMARY KEY,      
    title VARCHAR(255) NOT NULL,             
    year YEAR NOT NULL,                      
    genre VARCHAR(100) NOT NULL,             
    synopsis TEXT,                           
    director VARCHAR(255),                   
    deleted_at TIMESTAMP NULL DEFAULT NULL,  
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
) ENGINE=InnoDB;
