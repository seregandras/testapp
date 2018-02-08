INSERT INTO users (name) VALUES 
	('Name1'),
	('Name2'),
	('Name3');
	
INSERT INTO advertisements(user_id, title) VALUES
    ((SELECT id FROM users WHERE name='Name1'), 'Title1'),
    ((SELECT id FROM users WHERE name='Name2'), 'Title2'),
    ((SELECT id FROM users WHERE name='Name3'), 'Title3');