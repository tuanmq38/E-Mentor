<?php
require_once('inc/config.inc.php');

require_once('inc/Entity/Page.class.php');
require_once('inc/Entity/User.class.php');
require_once('inc/Entity/Mentor.class.php');

require_once('inc/Utility/LoginManager.class.php');
require_once('inc/Utility/PDOService.class.php');
require_once('inc/Utility/UserDAO.class.php');
require_once('inc/Utility/MentorDAO.class.php');

session_start();
// unset our registered session
unset($_SESSION['loggedin']);

// destroy the session
session_destroy();

header("Location: Homepage.php");

?>
