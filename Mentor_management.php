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

if (!empty($_POST)) {
    if(isset($_POST['action']) && $_POST['action'] == "edit") {
        $updateMentor = new Mentor();

        $updateMentor->setMentor_id($_POST['mentor_id']);
        $updateMentor->setMentor_first_name($_POST['mentor_first_name']);
        $updateMentor->setMentor_last_name($_POST['mentor_last_name']);
        $updateMentor->setMentor_email($_POST['mentor_email']);
        $updateMentor->setMentor_gender($_POST['mentor_gender']);
        $updateMentor->setMentor_degree($_POST['mentor_degree']);
        $updateMentor->setMentor_expert_field($_POST['mentor_expert_field']);
        $updateMentor->setMentor_schedule_date($_POST['mentor_schedule_date']);
        $updateMentor->setMentor_start_time($_POST['mentor_start_time']);
        $updateMentor->setMentor_end_time($_POST['mentor_end_time']);

        MentorDAO::updateMentor($updateMentor);
        

    } else {
        $newMentor = new Mentor();

        $newMentor->setMentor_first_name($_POST['mentor_first_name']);
        $newMentor->setMentor_last_name($_POST['mentor_last_name']);
        $newMentor->setMentor_email($_POST['mentor_email']);
        $newMentor->setMentor_gender($_POST['mentor_gender']);
        $newMentor->setMentor_degree($_POST['mentor_degree']);
        $newMentor->setMentor_expert_field($_POST['mentor_expert_field']);
        $newMentor->setMentor_schedule_date($_POST['mentor_schedule_date']);
        $newMentor->setMentor_start_time($_POST['mentor_start_time']);
        $newMentor->setMentor_end_time($_POST['mentor_end_time']);

        MentorDAO::createMentor($newMentor);
    }
}

if (isset($_GET["action"]) && $_GET["action"] == "delete")  {
    //Use the DAO to delete the corresponding record
    MentorDAO::deleteMentor($_GET['mentor_id']);
}

if (isset($_GET["keyword"]) && $_GET["keyword"]) {
    $filteredMentor = MentorDAO::getRecord($_GET["keyword"]);
    Page::displayHeader();
    Page::navbarAdmin();
    Page::searchRecord();
    Page::addMentorForm();
    Page::manageMentors($filteredMentor);
} else {
    $mentors = MentorDAO::getMentors();

    Page::displayHeader();
    Page::navbarAdmin();
    Page::searchRecord();
    Page::manageMentors($mentors);
    if(!empty($_GET)) {
        if (isset($_GET["action"]) && $_GET["action"] == "edit")
            Page::editMentor(MentorDAO::getMentor($_GET['mentor_id']));
        else
            Page::addMentorForm();
    } else
        Page::addMentorForm();
    Page::footer();
}


