create table users (
	id INT AUTO_INCREMENT  PRIMARY KEY,
	first_name VARCHAR(50),
	last_name VARCHAR(50),
	email VARCHAR(50),
	gender VARCHAR(50),
	country VARCHAR(50)
);

create table movies (
	id INT AUTO_INCREMENT  PRIMARY KEY,
	title VARCHAR(50),
	gendre VARCHAR(50),
	release_date  DATE
);

CREATE TABLE ratings(
    id INT AUTO_INCREMENT  PRIMARY KEY,
    id_user INT, 
    id_movie INT,
    rating VARCHAR(50),
    CONSTRAINT fk_ratings_id_user FOREIGN KEY (id_user) REFERENCES users (id),
    CONSTRAINT fk_ratings_id_movie FOREIGN KEY (id_movie) REFERENCES movies (id)
);
