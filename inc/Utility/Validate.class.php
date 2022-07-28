<?php

// See the textbook CH 9 for more information about string functions
 // create a function to validate the registration form
    // Please use filter to validate the inputs whenever possible    
    
    // What to validate?
    
    // username should not be empty
        // Also replace occurences of whitespace, semicolon, colon, comma, ampersand,
        // dollar sign, < and > and any improper character with nothing    

    // password
        // should be a 5 digits string
        // both password and password confirm needs to be exactly similar
    
    // Email should be email format

    // One of the profile images must be chosen

    // One of the not security questions should be selected

    // The answer should not be empty

    // the function should update the page's notifications
    // you can also return some value to the calling function


class Validate {
    static function ValidateForm() {
        $valid = true;

        


        return $valid;
    }

   
    
}



?>