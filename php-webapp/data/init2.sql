CREATE TABLE advertisements (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    userId INT(11) REFERENCES users(id),
    title VARCHAR(30) NOT NULL
);

INSERT INTO advertisements(userId, title) VALUES
    ((SELECT id FROM users WHERE userName='Name1'), 'Title1'),
    ((SELECT id FROM users WHERE userName='Name2'), 'Title2'),
    ((SELECT id FROM users WHERE userName='Name3'), 'Title3');