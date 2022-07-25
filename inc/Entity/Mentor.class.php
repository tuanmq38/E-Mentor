<?php
    class Mentor {
        private $mentor_id;
        private $mentor_email;
        private $mentor_first_name;
        private $mentor_last_name;
        private $mentor_phone_no;
        private $mentor_dob;
        private $mentor_gender;
        private $mentor_degree;
        private $mentor_expert_field;
        private $mentor_schedule_date;
        private $mentor_schedule_time;

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
         * Get the value of mentor_email
         */ 
        public function getMentor_email()
        {
                return $this->mentor_email;
        }

        /**
         * Set the value of mentor_email
         *
         * @return  self
         */ 
        public function setMentor_email($mentor_email)
        {
                $this->mentor_email = $mentor_email;

                return $this;
        }

        /**
         * Get the value of mentor_first_name
         */ 
        public function getMentor_first_name()
        {
                return $this->mentor_first_name;
        }

        /**
         * Set the value of mentor_first_name
         *
         * @return  self
         */ 
        public function setMentor_first_name($mentor_first_name)
        {
                $this->mentor_first_name = $mentor_first_name;

                return $this;
        }

        /**
         * Get the value of mentor_last_name
         */ 
        public function getMentor_last_name()
        {
                return $this->mentor_last_name;
        }

        /**
         * Set the value of mentor_last_name
         *
         * @return  self
         */ 
        public function setMentor_last_name($mentor_last_name)
        {
                $this->mentor_last_name = $mentor_last_name;

                return $this;
        }

        /**
         * Get the value of mentor_phone_no
         */ 
        public function getMentor_phone_no()
        {
                return $this->mentor_phone_no;
        }

        /**
         * Set the value of mentor_phone_no
         *
         * @return  self
         */ 
        public function setMentor_phone_no($mentor_phone_no)
        {
                $this->mentor_phone_no = $mentor_phone_no;

                return $this;
        }

        /**
         * Get the value of mentor_dob
         */ 
        public function getMentor_dob()
        {
                return $this->mentor_dob;
        }

        /**
         * Set the value of mentor_dob
         *
         * @return  self
         */ 
        public function setMentor_dob($mentor_dob)
        {
                $this->mentor_dob = $mentor_dob;

                return $this;
        }

        /**
         * Get the value of mentor_gender
         */ 
        public function getMentor_gender()
        {
                return $this->mentor_gender;
        }

        /**
         * Set the value of mentor_gender
         *
         * @return  self
         */ 
        public function setMentor_gender($mentor_gender)
        {
                $this->mentor_gender = $mentor_gender;

                return $this;
        }

        /**
         * Get the value of mentor_degree
         */ 
        public function getMentor_degree()
        {
                return $this->mentor_degree;
        }

        /**
         * Set the value of mentor_degree
         *
         * @return  self
         */ 
        public function setMentor_degree($mentor_degree)
        {
                $this->mentor_degree = $mentor_degree;

                return $this;
        }

        /**
         * Get the value of mentor_expert_field
         */ 
        public function getMentor_expert_field()
        {
                return $this->mentor_expert_field;
        }

        /**
         * Set the value of mentor_expert_field
         *
         * @return  self
         */ 
        public function setMentor_expert_field($mentor_expert_field)
        {
                $this->mentor_expert_field = $mentor_expert_field;

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