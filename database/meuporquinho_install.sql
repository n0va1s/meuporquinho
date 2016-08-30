CREATE DATABASE porquinho;

CREATE USER 'usrporquinho'@'localhost' IDENTIFIED BY 'porquinhousr';
GRANT ALL PRIVILEGES ON porquinho. * TO 'usrporquinho'@'localhost';
FLUSH PRIVILEGES;

USE porquinho;