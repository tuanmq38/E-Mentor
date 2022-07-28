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
if (empty($_POST)) {
// verify our session
if (LoginManager::verifyLogin()) {
    // get the user detail
    UserDAO::init();
    header("Location: Mentor_management.php");
} else {
    header("Location: Admin_login_page.php");
}
}

?>
