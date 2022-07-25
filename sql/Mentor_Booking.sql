DROP DATABASE IF EXISTS Mentor_Booking;
CREATE DATABASE IF NOT EXISTS Mentor_Booking;
USE Mentor_Booking;

-- Create table User
create table User (
    id INT AUTO_INCREMENT PRIMARY KEY,
	full_name VARCHAR(100),	
	username VARCHAR(20),
    email VARCHAR(100),
	password VARCHAR(250)
) Engine=InnoDB;

INSERT INTO User (full_name, username, email, password) 
VALUES ('admin', 'admindemo', 'admin@ad.ca', '$apr1$r0g82q3p$A5cuVu2FzlBfkl9.auI.X1');

-- Create table Metor
create table Mentor (
    mentor_id TINYINT(3) AUTO_INCREMENT PRIMARY KEY,
    mentor_email VARCHAR(100) NOT NULL,
    mentor_fist_name VARCHAR(50) NOT NULL,
    mentor_last_name VARCHAR(50) NOT NULL,
    mentor_phone_no VARCHAR(30) NOT NULL,
    mentor_dob date NOT NULL, -- format YYYY-MM-DD
    mentor_gender enum('Male','Female','Other') NOT NULL,
    mentor_degree VARCHAR(250) NOT NULL,
    mentor_expert_field enum('Training','Motivation','Advice', 'Coaching', 'Support') NOT NULL,
    mentor_schedule_date date NOT NULL, -- format YYYY-MM-DD
    mentor_schedule_time time NOT NULL -- format 00:00:00
) Engine=InnoDB;

INSERT INTO Mentor (mentor_id, mentor_email, mentor_fist_name, mentor_last_name, mentor_phone_no, mentor_dob, mentor_gender, mentor_degree, mentor_expert_field, mentor_schedule_date, mentor_schedule_time)
VALUES (1, 'johnd@mentor.ca', 'John', 'Doe', '12364435678', '1971-08-22', 'Male', 'MBA', 'Training', "2022-10-12", "9:00:00");


-- Create table Mentee
create table Mentee (
    mentee_id TINYINT(3) AUTO_INCREMENT PRIMARY KEY,
    mentee_email VARCHAR(100) NOT NULL,
    mentee_fist_name VARCHAR(50) NOT NULL,
    mentee_last_name VARCHAR(50) NOT NULL,
    mentee_dob date NOT NULL, -- format YYYY-MM-DD
    mentee_gender enum('Male','Female','Other') NOT NULL,
    mentee_phone_no VARCHAR(30) NOT NULL,
    mentee_status VARCHAR(200) 
) Engine=InnoDB;

INSERT INTO Mentee (mentee_id, mentee_email, mentee_fist_name, mentee_last_name, mentee_dob, mentee_gender, mentee_phone_no)
VALUES (1, 'anneg@mentee.ca', 'Anne', 'Green', '1994-02-17', 'Female', '12384456734');


-- Create table Schedule
-- create table Schedule (
--     mentor_schedule_id TINYINT(3) AUTO_INCREMENT PRIMARY KEY,
--     mentor_schedule_date date NOT NULL,
--     mentor_schedule_time time NOT NULL,
--     mentor_id TINYINT(3),
--     FOREIGN KEY (mentor_id) REFERENCES Mentor (mentor_id) ON DELETE CASCADE ON UPDATE CASCADE
-- ) Engine=InnoDB;

-- Crete table Appointment
create table Appointment (
    appointment_id TINYINT(3) AUTO_INCREMENT PRIMARY KEY,
    mentor TINYINT(3),
    mentee TINYINT(3),
    FOREIGN KEY (mentor) REFERENCES Mentor (mentor_id),
    FOREIGN KEY (mentee) REFERENCES Mentee (mentee_id)
) Engine=InnoDB;

INSERT INTO Appointment (mentor, mentee)
VALUES (1, 1);