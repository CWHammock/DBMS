DROP TABLE IF EXISTS Movie;
DROP TABLE IF EXISTS Reviewer;
DROP TABLE IF EXISTS Rating;


CREATE TABLE Movie
(
mID 		int, 
title 		varchar(100) NOT NULL UNIQUE,
year		date NOT NULL UNIQUE, 	
director	varchar(100),
PRIMARY KEY (mID),
CONSTRAINT chk_Movie_Year CHECK(year >= '1901-01-01'),
CONSTRAINT chk_Spielberg_Direct_Year CHECK(director='Steven Spielberg' and 
										year < '1990-01-01'),
CONSTRAINT chk_Cameron_Direct_Year CHECK(director='Steven Spielberg' and 
										year >= '2000-01-01')
);

CREATE TABLE Reviewer
(
rID			int, 
name		varchar(100) NOT NULL,
PRIMARY KEY (rID)
);

CREATE TABLE Rating
(
rID			int UNIQUE,
mID			int UNIQUE,
stars		int(5) NOT NULL,
ratingsDate date UNIQUE,
CONSTRAINT chk_ratingsDate CHECK(ratingsDate >= '2001-01-01'),
CONSTRAINT chk_starts_num CHECK(stars>=1 and stars<=5),

FOREIGN KEY (rID) REFERENCES Reviewer(rID)
ON UPDATE CASCADE ON DELETE SET NULL,

FOREIGN KEY (mID) REFERENCES Movie(mID)
ON DELETE CASCADE
);

