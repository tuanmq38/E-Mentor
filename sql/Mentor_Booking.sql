DROP DATABASE IF EXISTS Mentor_Booking;
CREATE DATABASE IF NOT EXISTS Mentor_Booking;
USE Mentor_Booking;

-- Create table Metor
create table Mentor (
    mentor_id TINYINT(3) AUTO_INCREMENT PRIMARY KEY,
    mentor_email VARCHAR(100), NOT NULL
    mentor_fist_name VARCHAR(50) NOT NULL,
    mentor_last_name VARCHAR(50) NOT NULL,
    mentor_password VARCHAR(200) NOT NULL,
    mentor_profile_image VARCHAR(100) NOT NULL,
    mentor_phone_no VARCHAR(30) NOT NULL,
    mentor_dob date NOT NULL,
    mentor_gender enum('Male','Female','Other') NOT NULL,
    mentor_degree VARCHAR(250) NOT NULL,
    mentor_expert_field VARCHAR(250) NOT NULL,
    mentor_status enum('Active', 'Inactive') NOT NULL
) Engine=InnoDB;


-- Create table Mentee
create table Mentee (
    mentee_id TINYINT(3) AUTO_INCREMENT PRIMARY KEY,
    mentee_email VARCHAR(100) NOT NULL,
    mentee_fist_name VARCHAR(50) NOT NULL,
    mentee_last_name VARCHAR(50) NOT NULL,
    mentee_password VARCHAR(200) NOT NULL,
    mentee_dob date NOT NULL,
    mentee_gender enum('Male','Female','Other') NOT NULL,
    mentee_address VARCHAR(250) NOT NULL,
    mentee_phone_no VARCHAR(30) NOT NULL
) Engine=InnoDB;


-- Create table Schedule
create table Schedule (
    mentor_schedule_id TINYINT(3),
    mentor_schedule_date date NOT NULL,
    mentor_schedule_time VARCHAR(50) NOT NULL,
    mentor_id TINYINT(3),
    FOREIGN KEY (mentor_id) REFERENCES Mentor (mentor_id) ON DELETE CASCADE ON UPDATE CASCADE
) Engine=InnoDB;

-- Crete table Appointment
create table Appointment (
    appointment_id TINYINT(3),
    mentor_id TINYINT(3),
    mentee_id TINYINT(3),
    mentor_schedule_date date,
    mentor_schedule_time VARCHAR(50)
    FOREIGN KEY (mentor_id) REFERENCES Mentor (mentor_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (mentee_id) REFERENCES Mentee (mentee_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (mentor_schedule_date) REFERENCES Mentor (mentor_schedule_date) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (mentor_schedule_time) REFERENCES Mentor (mentor_schedule_time) ON DELETE CASCADE ON UPDATE CASCADE
) Engine=InnoDB;