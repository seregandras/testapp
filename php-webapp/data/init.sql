CREATE DATABASE  php_db;

use php_db;

CREATE TABLE users (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	userName VARCHAR(30) NOT NULL
);

INSERT INTO users(userName) VALUES 
    ('Name1'),
    ('Name2'),
    ('Name3');

CREATE TABLE advertisements (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    userId INT(11) FOREIGN KEY REFERENCES users(id),
    title VARCHAR(30) NOT NULL
);

INSERT INTO advertisements(userId, title) VALUES
    ((SELECT id FROM users WHERE userName='Name1'), 'Title1'),
    ((SELECT id FROM users WHERE userName='Name2'), 'Title2'),
    ((SELECT id FROM users WHERE userName='Name3'), 'Title3');
