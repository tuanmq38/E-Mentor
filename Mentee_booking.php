<?php

require_once('inc/config.inc.php');

require_once('inc/Entity/User.class.php');
require_once('inc/Entity/Mentee.class.php');
require_once('inc/Entity/Mentor.class.php');
require_once('inc/Entity/Mentee_Page.class.php');
require_once('inc/Entity/Appointment.class.php');

require_once('inc/Utility/LoginManager.class.php');
require_once('inc/Utility/PDOService.class.php');
require_once('inc/Utility/UserDAO.class.php');
require_once('inc/Utility/MenteeDAO.class.php');
require_once('inc/Utility/MentorDAO.class.php');
require_once('inc/Utility/Validate.class.php');
require_once('inc/Utility/AppointmentDAO.class.php');

// initialize classes
MenteeDao::init("Mentee");
MentorDAO::init("Mentor");
AppointmentDAO::init("Appointment");

if (!empty($_POST)) {
    if (isset($_POST['action']) && $_POST['action'] == "create") {
        if (Validate::ValidateForm()) {
            // Create new mentee and save on the database
            $newMentee = new Mentee();

            $newMentee->setMentee_id($_POST['mentee_id']);
            $newMentee->setMentee_first_name($_POST['mentee_first_name']);
            $newMentee->setMentee_last_name($_POST['mentee_last_name']);
            $newMentee->setMentee_email($_POST['mentee_email']);
            $newMentee->setMentee_gender($_POST['mentee_gender']);
            $newMentee->setMentee_dob($_POST['mentee_dob']);
            $newMentee->setMentee_phone_no($_POST['mentee_phone_no']);
            $newMentee->setMentee_status($_POST['mentee_status']);


            MenteeDAO::createMentee($newMentee);

            // $mentee = $newMentee->getMentee_id();

            // $newAppointment = new Appointment();

            // $newAppointment->setMentor_id($_POST['mentor_id']);
            // $newAppointment->setMentee_id($mentee);

            // AppointmentDAO::makeAppointment($newAppointment);


            header("Location: Thank_you_page.php");
        } else {
            Mentee_Page::displayErrorMessage(Validate::$notifications);
        }
    }
}


// $mentor = MentorDAO::getMentor($_GET['mentor_id']);
// MenteeDao::getMentee($_GET['mentee_id']);

Mentee_Page::displayHeader();
Mentee_Page::navbar();
Mentee_Page::menteeBookForm();
Mentee_Page::footer();
