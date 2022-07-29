DROP DATABASE IF EXISTS Mentor_Booking;
CREATE DATABASE IF NOT EXISTS Mentor_Booking;
USE Mentor_Booking;

-- Create table User
create table users (
    id INT AUTO_INCREMENT PRIMARY KEY,
	full_name VARCHAR(100) NOT NULL,	
	username VARCHAR(20) NOT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    user_role VARCHAR(100)
) Engine=InnoDB;

INSERT INTO users (full_name, username, password, email, user_role) 
VALUES 
('admin demo', 'admindemo', '$2y$10$fmuNItw6JmdFVhZA6FLkUuaom2dS4vs0.hfi880j4t9W7HOSm9xXm', 'admin@ad.ca', 'admin');

-- Create table Metor
create table Mentor (
    mentor_id TINYINT(3) AUTO_INCREMENT PRIMARY KEY,
    mentor_email VARCHAR(100) NOT NULL,
    mentor_first_name VARCHAR(50) NOT NULL,
    mentor_last_name VARCHAR(50) NOT NULL,
    mentor_gender enum('Male','Female','Other') NOT NULL,
    mentor_degree VARCHAR(250) NOT NULL,
    mentor_expert_field VARCHAR(250) NOT NULL,
    mentor_schedule_date date NOT NULL, -- format YYYY-MM-DD
    mentor_start_time time NOT NULL, -- format 00:00:00
    mentor_end_time time NOT NULL -- format 00:00:00
) Engine=InnoDB;

INSERT INTO Mentor (mentor_email, mentor_first_name, mentor_last_name, mentor_gender, mentor_degree, mentor_expert_field, mentor_schedule_date, mentor_start_time, mentor_end_time)
VALUES 
('johnd@ementor.ca', 'John', 'Doe', 'Male', 'MBA', 'Business', "2022-10-12", "9:00", "10:00"),
('jenp@ementor.ca', 'Jennifer', 'Pham', 'Female', 'Master', 'Psychology', '2022-15-09', '20:00', '21:00');


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

INSERT INTO Mentee (mentee_email, mentee_fist_name, mentee_last_name, mentee_dob, mentee_gender, mentee_phone_no)
VALUES 
('anneg@mentee.ca', 'Anne', 'Green', '1994-02-17', 'Female', '12384456734'),
('jackr@mentee.ca', 'Jack', 'Rode', '1997-03-06', 'Male', '12364498765');


-- Crete table Appointment
-- Assocciate Table
create table Appointment (
    appointment_id TINYINT(3) AUTO_INCREMENT PRIMARY KEY,
    mentor TINYINT(3),
    mentee TINYINT(3),
    FOREIGN KEY (mentor) REFERENCES Mentor (mentor_id),
    FOREIGN KEY (mentee) REFERENCES Mentee (mentee_id)
) Engine=InnoDB;

INSERT INTO Appointment (mentor, mentee)
VALUES (1, 1);