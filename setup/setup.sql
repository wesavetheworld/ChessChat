DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
	userId INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	userName VARCHAR(255) NOT NULL DEFAULT '',
	email VARCHAR(255) NOT NULL DEFAULT '',
	password VARCHAR(100) NOT NULL DEFAULT '',
	cookieHash VARCHAR(100) NOT NULL DEFAULT '',
	language VARCHAR(2) NOT NULL DEFAULT ''
);

DROP TABLE IF EXISTS `chatMessage`;
CREATE TABLE `chatMessage` (
	messageId INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	gameId INT(10) NOT NULL,
	authorId INT(10) NOT NULL,
	authorName VARCHAR(255) NOT NULL,
	messageText TEXT(255) NOT NULL,
	time INT(10) NOT NULL DEFAULT '0',
	isBotMsg BIT(1) NOT NULL DEFAULT b'0'
);
