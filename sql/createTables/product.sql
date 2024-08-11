CREATE TABLE IF NOT EXISTS product (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name TEXT NOT NULL,
    cost DECIMAL NOT NULL,
    summary TEXT  NOT NULL, 
    description TEXT NOT NULL,
    type TEXT NOT NULL,
    dateReleased DATE NOT NULL,
    featured BOOLEAN NOT NULL,
    quantity INT NOT NULL
);