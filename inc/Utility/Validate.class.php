<?php

class Validate
{
    static $notifications = [];

    static function ValidateForm()
    {
        $valid = true;

        // First name no empty

        if (strlen($_POST['mentee_first_name']) == 0) {
            $valid = false;
            self::$notifications['firstName'] = "Please enter your first name.";
        }

        // Last name no empty

        if (strlen($_POST['mentee_last_name']) == 0) {
            $valid = false;
            self::$notifications['lastName'] = "Please enter your last name.";
        }

        // Validate Email address
        if (!filter_input(INPUT_POST, "mentee_email", FILTER_VALIDATE_EMAIL)) {
            $valid = false;
            self::$notifications['email'] = "Please enter a valid email address.";
        }

        // Make sure gender is selected
        if (isset($_REQUEST['mentee_gender']) && $_REQUEST['mentee_gender'] == 'Select your gender...') {
            $valid = false;
            self::$notifications['gender'] = "Please select your gender.";
        }

        // Phone number no empty
        if (strlen($_POST['mentee_phone_no']) == 0) {
            $valid = false;
            self::$notifications['phoneNo'] = "Please enter your phone number.";
        }

        // Make sure dob is selected
        $date = $_REQUEST['mentee_dob'];

        if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $date)) {
            $valid = false;
            self::$notifications['dob'] = "Please select your date of birth.";
        } 

        return $valid;
    }
}
