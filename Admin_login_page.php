<?php
require_once('inc/config.inc.php');

require_once('inc/Entity/Page.class.php');
require_once('inc/Entity/User.class.php');
require_once('inc/Entity/Mentor.class.php');

require_once('inc/Utility/LoginManager.class.php');
require_once('inc/Utility/PDOService.class.php');
require_once('inc/Utility/UserDAO.class.php');
require_once('inc/Utility/MentorDAO.class.php');

UserDAO::init();

if(!empty($_POST['username'])){
    $authUser = UserDAO::getUser($_POST['username']);
    // check if the user exists or not
    // check if the password is verified
    if($authUser && $authUser->verifyPassword($_POST['password'])){
        // start the session
        session_start();

        // register the session var
        $_SESSION['loggedin'] = $authUser->getUsername();
    }

}

if(LoginManager::verifyLogin()) {
    header("Location: logged_admin.php");  
} 
else {
    Page::displayHeader();
    Page::navbar();
    Page::adminLoginForm();
    Page::footer();
}

?>