DROP TABLE IF EXISTS designers;
CREATE TABLE designers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100),
  bio TEXT
);

INSERT INTO designers VALUES
(1, 'Sarah Wang', 'Designer new-yorkaise'),
(2, 'Luca Frattini', 'Créateur italien'),
(3, 'Amina Lone', 'Designer franco-marocaine');

DROP TABLE IF EXISTS sacs;
CREATE TABLE sacs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100),
  description TEXT,
  imager VARCHAR(255),
  prix FLOAT,
  id_designer INT
);

INSERT INTO sacs VALUES
(1, 'Rowan Valentine Edition', 'Cuir vegan italien', 'sac1.jpg', 455.9, 2),
(2, 'Teri Denim', 'Design sobre', 'sac2.jpg', 399, 1),
(3, 'Tabby', 'Version moderne d’un modèle Coach de 1970 en cuir galet poli', 'sac3.jpg', 420, 2),
(4, 'Juliet en toile exclusive', 'Toile enduite exclusive et cuir de veau', 'sac4.jpg', 375.5, 3),
(5, 'Sac Brooklyn', 'Parfait pour les cours', 'sac5.jpg', 299.99, 1),
(6, 'Sac épaule Lana', 'Design moderne pour usage quotidien', 'sac6.jpg', 310, 3);
