CREATE DATABASE IF NOT EXISTS trudatabase;
USE trudatabase;
CREATE TABLE users (
    id int NOT NULL PRIMARY KEY, nama varchar (255) NOT NULL, kantor varchar(255) NOT NULL
);

INSERT INTO users( id, nama, kantor ) 
VALUES
(01, 'xiao', 'cabang anemo'),
(02, 'tartaglia', 'cabang hydro'),
(03, 'albedo', 'cabang geo'),
(04, 'mona', 'pusat'),
(05, 'qiqi', 'pusat');
