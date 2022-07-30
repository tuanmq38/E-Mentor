<?php

require_once('inc/config.inc.php');

require_once('inc/Entity/Appointment_Page.class.php');
require_once('inc/Entity/Page.class.php');
require_once('inc/Entity/User.class.php');
require_once('inc/Entity/Appointment.class.php');

require_once('inc/Utility/LoginManager.class.php');
require_once('inc/Utility/PDOService.class.php');
require_once('inc/Utility/UserDAO.class.php');
require_once('inc/Utility/AppointmentDAO.class.php');

AppointmentDAO::init("Appointment");


if (isset($_GET["action"]) && $_GET["action"] == "delete")  {
    //Use the DAO to delete the corresponding record
    AppointmentDAO::deleteAppointment($_GET['appointment_id']);
}

$appointments = AppointmentDAO::getAppointments();

Page::displayHeader();
Page::navbarAdmin();
Appointment_Page::displayAppointments($appointments);
Page::footer();

?>