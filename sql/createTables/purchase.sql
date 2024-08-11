CREATE TABLE IF NOT EXISTS purchase (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    userId BIGINT,
    productId BIGINT,
    quantity INT NOT NULL,
    orderDate DATETIME DEFAULT CURRENT_TIMESTAMP,
    orderStatus BOOLEAN NOT NULL,
    FOREIGN KEY (userId) REFERENCES user(id),
    FOREIGN KEY (productId) REFERENCES product(id)
);
