


DROP TABLE IF EXISTS works;
DROP TABLE IF EXISTS employee;
DROP TABLE IF EXISTS certify;
DROP TABLE IF EXISTS department;
DROP TABLE IF EXISTS empschedule;
DROP TABLE IF EXISTS inventory;
DROP TABLE IF EXISTS location;
DROP TABLE IF EXISTS invschedule;

CREATE TABLE empschedule(
	empschedule_id INTEGER UNIQUE AUTO_INCREMENT,
	hours_a_week INTEGER(3) NOT NULL,
	work_weekends VARCHAR(3) NOT NULL,
	shift INTEGER(1),
	PRIMARY KEY (empschedule_id)
	);

CREATE TABLE department(
	department_id INTEGER UNIQUE AUTO_INCREMENT,
	division VARCHAR(30) NOT NULL,
	role VARCHAR(30) NOT NULL,
	PRIMARY KEY (department_id)	
	);
	
CREATE TABLE certify(
	certify_id INTEGER UNIQUE AUTO_INCREMENT,
	certification VARCHAR(50) NOT NULL,
	PRIMARY KEY (certify_id)
	);
	
CREATE TABLE employee(
	employee_id INTEGER UNIQUE AUTO_INCREMENT, 
	first_name VARCHAR(25) NOT NULL,
	middle_initial VARCHAR(1),
	last_name VARCHAR(25) NOT NULL,
	employee_street VARCHAR(30) NOT NULL,
	employee_city VARCHAR(30) NOT NULL,
	employee_state VARCHAR(2) NOT NULL,
	employee_zip INTEGER(5) NOT NULL,
	empschedule_id INTEGER,
	department_id INTEGER,
	certify_id INTEGER,
	primary key (employee_id),
	CONSTRAINT empschedule_employee FOREIGN KEY(empschedule_id) REFERENCES empschedule(empschedule_id) 
	ON DELETE CASCADE,
	CONSTRAINT department_employee FOREIGN KEY(department_id) REFERENCES department(department_id) 
	ON DELETE CASCADE,
	CONSTRAINT certify_employee FOREIGN KEY(certify_id) REFERENCES certify(certify_id) 
	ON DELETE CASCADE
	);

CREATE TABLE location(
	location_id INTEGER UNIQUE AUTO_INCREMENT,
	building VARCHAR(30) NOT NULL,
	room_number INTEGER(3) NOT NULL,
	PRIMARY KEY (location_id)
	);
	
CREATE TABLE invschedule(
	invschedule_id INTEGER UNIQUE AUTO_INCREMENT,
	week INTEGER(1) NOT NULL,
	months INTEGER(12) NOT NULL,
	PRIMARY KEY(invschedule_id)
	);
	

CREATE TABLE inventory(
	inventory_id INTEGER UNIQUE AUTO_INCREMENT,
	date_purchased DATE,
	date_implemented DATE NOT NULL,
	model VARCHAR(25) NOT NULL,
	serial_number VARCHAR(30) NOT NULL,
	company VARCHAR(30),
	type VARCHAR(15) NOT NULL,
	product_description VARCHAR(140) NOT NULL,
	add_notes VARCHAR(140),	
	location_id INTEGER,
	invschedule_id INTEGER,
	PRIMARY KEY (inventory_id),
	CONSTRAINT con_location_inventory FOREIGN KEY(location_id) REFERENCES location(location_id) 
	ON DELETE CASCADE,
	CONSTRAINT invschedule_inventory FOREIGN KEY(invschedule_id) REFERENCES invschedule(invschedule_id) 
	ON DELETE CASCADE	
	);
	

CREATE TABLE works(
	work_id INTEGER UNIQUE AUTO_INCREMENT,
	employee_id INTEGER NOT NULL,
	inventory_id INTEGER NOT NULL,
	date_assigned DATE NOT NULL,
	date_complete DATE NOT NULL,
	description VARCHAR(140) NOT NULL,
	notes VARCHAR(140) NOT NULL,	
	PRIMARY KEY(work_id),
	CONSTRAINT inventory_works FOREIGN KEY(inventory_id) REFERENCES inventory(inventory_id) 
	ON DELETE CASCADE,
	CONSTRAINT employee_works FOREIGN KEY(employee_id) REFERENCES employee(employee_id) 
	ON DELETE CASCADE
	);