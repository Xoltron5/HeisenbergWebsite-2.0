CREATE TABLE user (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(30) ,
    email TEXT , 
    dateOfBirth DATE ,
    password VARCHAR(255) ,
    role TEXT ,
    dateJoined DATETIME ,
    sessionCookie DATETIME 
);

CREATE TABLE product (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name TEXT ,
    cost DECIMAL ,
    summary TEXT  , 
    description TEXT ,
    type TEXT ,
    dateReleased DATE ,
    featured BOOLEAN ,
    quantity INT 
);

CREATE TABLE contact (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    userId BIGINT,
    subject TEXT ,
    message TEXT ,
    FOREIGN KEY (userId) REFERENCES user(id)
);

CREATE TABLE purchase (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    userId BIGINT,
    productId BIGINT,
    quantity INT ,
    orderDate DATETIME DEFAULT CURRENT_TIMESTAMP,
    orderStatus BOOLEAN ,
    FOREIGN KEY (userId) REFERENCES user(id),
    FOREIGN KEY (productId) REFERENCES product(id)
);

CREATE TABLE review (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    userId BIGINT,
    productId BIGINT,
    comment TEXT ,
    datePosted DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (userId) REFERENCES user(id),
    FOREIGN KEY (productId) REFERENCES product(id)
);

