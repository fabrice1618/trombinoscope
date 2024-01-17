CREATE TABLE personnages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    annee_naissance DECIMAL(4,0) NOT NULL,
    image VARCHAR(20)
)