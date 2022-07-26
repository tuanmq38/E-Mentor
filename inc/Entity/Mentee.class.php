<?php

class Mentee {
    private $mentee_id;
    private $mentee_email;
    private $password;
    private $mentee_first_name;
    private $mentee_last_name;
    private $mentee_dob;
    private $mentee_gender;
    private $mentee_phone_no;
    private $mentee_status;
    
    //Verify the password
    function verifyPassword(string $passwordToVerify) {
        //Return a boolean based on verifying if the password given is correct for the current user
        return password_verify($passwordToVerify, $this->password);
    }

    /**
     * Get the value of mentee_id
     */ 
    public function getMentee_id()
    {
        return $this->mentee_id;
    }

    /**
     * Set the value of mentee_id
     *
     * @return  self
     */ 
    public function setMentee_id($mentee_id)
    {
        $this->mentee_id = $mentee_id;

        return $this;
    }

    /**
     * Get the value of mentee_first_name
     */ 
    public function getMentee_first_name()
    {
        return $this->mentee_first_name;
    }

    /**
     * Set the value of mentee_first_name
     *
     * @return  self
     */ 
    public function setMentee_first_name($mentee_first_name)
    {
        $this->mentee_first_name = $mentee_first_name;

        return $this;
    }

    /**
     * Get the value of mentee_last_name
     */ 
    public function getMentee_last_name()
    {
        return $this->mentee_last_name;
    }

    /**
     * Set the value of mentee_last_name
     *
     * @return  self
     */ 
    public function setMentee_last_name($mentee_last_name)
    {
        $this->mentee_last_name = $mentee_last_name;

        return $this;
    }

    /**
     * Get the value of mentee_dob
     */ 
    public function getMentee_dob()
    {
        return $this->mentee_dob;
    }

    /**
     * Set the value of mentee_dob
     *
     * @return  self
     */ 
    public function setMentee_dob($mentee_dob)
    {
        $this->mentee_dob = $mentee_dob;

        return $this;
    }

    /**
     * Get the value of mentee_gender
     */ 
    public function getMentee_gender()
    {
        return $this->mentee_gender;
    }

    /**
     * Set the value of mentee_gender
     *
     * @return  self
     */ 
    public function setMentee_gender($mentee_gender)
    {
        $this->mentee_gender = $mentee_gender;

        return $this;
    }

    /**
     * Get the value of mentee_phone_no
     */ 
    public function getMentee_phone_no()
    {
        return $this->mentee_phone_no;
    }

    /**
     * Set the value of mentee_phone_no
     *
     * @return  self
     */ 
    public function setMentee_phone_no($mentee_phone_no)
    {
        $this->mentee_phone_no = $mentee_phone_no;

        return $this;
    }

    /**
     * Get the value of mentee_status
     */ 
    public function getMentee_status()
    {
        return $this->mentee_status;
    }

    /**
     * Set the value of mentee_status
     *
     * @return  self
     */ 
    public function setMentee_status($mentee_status)
    {
        $this->mentee_status = $mentee_status;

        return $this;
    }

    /**
     * Get the value of mentee_email
     */ 
    public function getMentee_email()
    {
        return $this->mentee_email;
    }

    /**
     * Set the value of mentee_email
     *
     * @return  self
     */ 
    public function setMentee_email($mentee_email)
    {
        $this->mentee_email = $mentee_email;

        return $this;
    }
}

?>