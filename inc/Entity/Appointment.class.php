<?php

class Appointment {
    private $appointment_id;
    private $mentor_id;
    private $mentee_id;
    
    /**
     * Get the value of appointment_id
     */ 
    public function getAppointment_id()
    {
        return $this->appointment_id;
    }

    /**
     * Set the value of appointment_id
     *
     * @return  self
     */ 
    public function setAppointment_id($appointment_id)
    {
        $this->appointment_id = $appointment_id;

        return $this;
    }

    /**
     * Get the value of mentor_id
     */ 
    public function getMentor_id()
    {
        return $this->mentor_id;
    }

    /**
     * Set the value of mentor_id
     *
     * @return  self
     */ 
    public function setMentor_id($mentor_id)
    {
        $this->mentor_id = $mentor_id;

        return $this;
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

}

?>