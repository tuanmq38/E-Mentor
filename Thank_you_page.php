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

Mentee_Page::displayHeader();
Mentee_Page::navbar();

?>
<div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead">We will contact you to confirm your booking within 24 hours.</p>
  <hr>
  <p>
    Book another session? <a href="Mentor_listings.php">Continue to book</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="TeamNumber01.php" role="button">Back to homepage</a>
  </p>
</div>
<?

Mentee_Page::footer();

?>