<?php

require_once('inc/config.inc.php');

require_once('inc/Entity/Page.class.php');
require_once('inc/Entity/User.class.php');
require_once('inc/Entity/Mentor.class.php');

require_once('inc/Utility/LoginManager.class.php');
require_once('inc/Utility/PDOService.class.php');
require_once('inc/Utility/UserDAO.class.php');
require_once('inc/Utility/MentorDAO.class.php');

MentorDAO::init("Mentor");
Page::displayHeader();
Page::navbar();
Page::searchRecord();


if (isset($_GET["keyword"]) && $_GET["keyword"]) {
    $filteredMentor = MentorDAO::getRecord($_GET["keyword"]);
    Page::listMentors($filteredMentor);

} else {
    $mentors = MentorDAO::getMentors();
    Page::listMentors($mentors);
}


Page::footer();

?>