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
('johnd@ementor.ca', 'John', 'Doe', 'Male', 'Master', 'Business', "2022-10-12", "9:00", "10:00"),
('igort@ementor.ca', 'Igor', 'Tyler','Male', 'Doctoral', 'Psychology', '2022-11-12', '8:00', "9:00"),
('willc@ementor.ca', 'Wilson', 'Conway', 'Female', 'Master', 'Computer Science', '2022-09-15', '20:00', '21:00'),
('tonyr@ementor.ca','Tony', 'Rogers', 'Male', 'Associate', 'Finance', '2022-01-09', '18:00', '18:30'),
('chadv@ementor.ca', 'Chad', 'Vega', 'Other', 'Master', 'Physical Therapy', '2022-08-30', '21:00', '22:00'),
('rahmag@ementor.ca', 'Rahma', 'Gates', 'Female', 'Associate', 'Contemporary Art', '2022-10-10', '13:00', '14:00')
;



-- Create table Mentee
create table Mentee (
    mentee_id TINYINT(3) AUTO_INCREMENT PRIMARY KEY,
    mentee_email VARCHAR(100) NOT NULL,
    mentee_first_name VARCHAR(50) NOT NULL,
    mentee_last_name VARCHAR(50) NOT NULL,
    mentee_dob date NOT NULL, -- format YYYY-MM-DD
    mentee_gender enum('Male','Female','Other') NOT NULL,
    mentee_phone_no VARCHAR(30) NOT NULL,
    mentee_status VARCHAR(200) 
) Engine=InnoDB;

INSERT INTO Mentee (mentee_email, mentee_first_name, mentee_last_name, mentee_dob, mentee_gender, mentee_phone_no)
VALUES 
('anneg@mentee.ca', 'Anne', 'Green', '1994-02-17', 'Female', '12384456734'),
('jackr@mentee.ca', 'Jack', 'Rode', '1997-03-06', 'Male', '12364498765'),
('terryp@mentee.ca', 'Terry', 'Pike', '2000-01-02', 'Other', '19871238495'),
('dougieh@mentee.ca', 'Dougie', 'Hayley', '1987-12-11', 'Male', '14780384058'),
('libbym@mentee.ca', 'Libby', 'Meza', '1999-05-08', 'Female', '12347950112');


-- Crete table Appointment
-- Assocciate Table
create table Appointment (
    appointment_id TINYINT(3) AUTO_INCREMENT PRIMARY KEY,
    mentor_id TINYINT(3),
    mentee_id TINYINT(3),
    FOREIGN KEY (mentor_id) REFERENCES Mentor (mentor_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (mentee_id) REFERENCES Mentee (mentee_id) ON DELETE CASCADE ON UPDATE CASCADE
) Engine=InnoDB;

INSERT INTO Appointment (mentor_id, mentee_id)
VALUES 
(3, 2),
(1, 5),
(4, 3),
(6, 4);
