CREATE DATABASE IF NOT EXISTS excersizedb;

use excersizedb;

CREATE TABLE IF NOT EXISTS users (
	user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	user_name VARCHAR(30) NOT NULL,
	user_pass VARCHAR(255) NOT NULL,
	user_email VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS excersize (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	user_id INT(11) NOT NULL,
	excersize_type VARCHAR(50) NOT NULL,
	excersize_reps VARCHAR(30) NOT NULL,
	excersize_weight VARCHAR(30) NOT NULL,
	excersize_date DATE
);