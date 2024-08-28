CREATE TABLE livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL
);

INSERT INTO livros (titulo, autor) VALUES
('1984', 'George Orwell'),
('Dom Quixote', 'Miguel de Cervantes'),
('O Senhor dos Anéis', 'J.R.R. Tolkien');
