<?php

require_once('inc/config.inc.php');

require_once('inc/Entity/User.class.php');
require_once('inc/Entity/Mentee.class.php');
require_once('inc/Entity/Mentor.class.php');
require_once('inc/Entity/Mentee_Page.class.php');

require_once('inc/Utility/LoginManager.class.php');
require_once('inc/Utility/PDOService.class.php');
require_once('inc/Utility/UserDAO.class.php');
require_once('inc/Utility/MenteeDAO.class.php');
require_once('inc/Utility/MentorDAO.class.php');


MenteeDao::init("Mentee");
MentorDAO::init("Mentor");


Mentee_Page::displayHeader();
Mentee_Page::navbar();
Mentee_Page::menteeBookForm(MentorDAO::getMentor($_GET['mentor_id']));
Mentee_Page::footer();

?>