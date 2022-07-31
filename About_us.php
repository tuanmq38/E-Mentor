<?php

require_once('inc/config.inc.php');

require_once('inc/Entity/Page.class.php');

Page::displayHeader();
Page::navbar();

?>

<div class="row align-items-center" style="margin-top: 120px;">

            <div class="col">
                <img class="rounded" src="images/mentoring2.png" alt="banner" style="width: 1000px;">
            </div>

            <div class="col">
                <h1 class="align-middle" style="color: #5fccac;">About Us</h1>
                <br><br><br>
                 <p>
                    We would like to create E-Mentor website to connect Mentor - an adviser or a trainer 
                    that has years of experience in their field, and Mentee who desire to take advises and 
                    counselling from experts in the industry.

                    
                    <br><br>

                    <em><u>Created by:</u></em> Polina Menshikova & Quintus Mai.
                    
                 </p>
            </div>
        </div>

<?php


Page::footer();

?>