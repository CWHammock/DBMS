drop table if exists movies;
drop table if exists directors;
drop table if exists companies;
drop table if exists actors;
drop table if exists direct;
drop table if exists act;
drop table if exists movie_genres;
drop table if exists quotes;


CREATE TABLE Companies (
	company_name VARCHAR(50) NOT NULL, 
	address VARCHAR(50), 
	PRIMARY KEY(company_name));




CREATE TABLE Actors (
	actor_name VARCHAR(50) NOT NULL, 
	actor_date_of_birth DATE NOT NULL, 
	PRIMARY KEY(actor_name, actor_date_of_birth));
 


CREATE TABLE Directors (
	director_name VARCHAR(50) NOT NULL, 
	director_date_of_birth DATE NOT NULL, 
	PRIMARY KEY(director_name, director_date_of_birth));
 


CREATE TABLE Movies (
	movie_year_of_release DATE NOT NULL, 
	movie_title VARCHAR(50) NOT NULL, 
	length_in_minutes TIME, 
	plot_outline VARCHAR(140), 
	company_name VARCHAR(50) NOT NULL, 
	PRIMARY KEY(movie_year_of_release, movie_title),
	FOREIGN KEY (company_name) 	REFERENCES companies(company_name));

CREATE TABLE Direct (
	director_name VARCHAR(50), 
	director_date_of_birth DATE, 
    movie_year_of_release DATE, 
	movie_title VARCHAR(50), 
	PRIMARY KEY(director_name, director_date_of_birth, movie_title, movie_year_of_release),
    FOREIGN KEY (director_name, director_date_of_birth) REFERENCES Directors(director_name, director_date_of_birth),
    FOREIGN KEY (movie_year_of_release, movie_title) REFERENCES Movies(movie_year_of_release, movie_title));


CREATE TABLE Act (
	movie_year_of_release DATE, 
	movie_title VARCHAR(50), 
	actor_name VARCHAR(50), 
	actor_date_of_birth DATE, 
	role VARCHAR(50),
	PRIMARY KEY (movie_year_of_release, movie_title, actor_name, actor_date_of_birth),
	FOREIGN KEY (movie_year_of_release, movie_title) REFERENCES movies(movie_year_of_release, movie_title),
	FOREIGN KEY (actor_name, actor_date_of_birth) REFERENCES actors(actor_name, actor_date_of_birth));
    


CREATE TABLE Movie_Genres (
	genre VARCHAR(50) NOT NULL, 
	movie_year_of_release DATE, 
	movie_title VARCHAR(50),
	PRIMARY KEY (genre, movie_year_of_release, movie_title),
	FOREIGN KEY (movie_year_of_release, movie_title) REFERENCES movies(movie_year_of_release, movie_title));

	
CREATE TABLE Quotes (
	movie_year_of_release DATE, 
	movie_title VARCHAR(50), 
	actor_name VARCHAR(50), 	
	actor_date_of_birth DATE, 
	quote VARCHAR(50),
	PRIMARY KEY (movie_year_of_release, movie_title, actor_name, actor_date_of_birth),
	FOREIGN KEY (movie_year_of_release, movie_title) REFERENCES movies(movie_year_of_release, movie_title),
	FOREIGN KEY (actor_name, actor_date_of_birth) REFERENCES actors(actor_name, actor_date_of_birth)); 


















