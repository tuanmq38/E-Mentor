<?php

class Appointment {
    private $appointment_id;
    private $mentor_id;
    private $mentee_id;
    private $mentor_schedule_date;
    private $mentor_schedule_time;
    

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

    /**
     * Get the value of mentor_schedule_date
     */ 
    public function getMentor_schedule_date()
    {
        return $this->mentor_schedule_date;
    }

    /**
     * Set the value of mentor_schedule_date
     *
     * @return  self
     */ 
    public function setMentor_schedule_date($mentor_schedule_date)
    {
        $this->mentor_schedule_date = $mentor_schedule_date;

        return $this;
    }

    /**
     * Get the value of mentor_schedule_time
     */ 
    public function getMentor_schedule_time()
    {
        return $this->mentor_schedule_time;
    }

    /**
     * Set the value of mentor_schedule_time
     *
     * @return  self
     */ 
    public function setMentor_schedule_time($mentor_schedule_time)
    {
        $this->mentor_schedule_time = $mentor_schedule_time;

        return $this;
    }
}

?>