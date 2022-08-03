<?php

class AppointmentDAO {
    private static $db;

    static function init(string $className) {
        self::$db = new PDOService($className);
    }

    static function makeAppointment(Appointment $appointment) {

        $sql = "INSERT INTO Appointment (mentor_id, mentee_id) 
                VALUES(:mentor_id, :mentee_id)";
        
        self::$db->query($sql);

        self::$db->bind(':mentor_id', $appointment->getMentor_id());
        self::$db->bind(':mentee_id', self::$db->lastInsertedId());


        self::$db->execute();

        return self::$db->lastInsertedId();

    }

    static function getAppointments() {

        $sql = "SELECT Appointment.appointment_id, Mentor.mentor_first_name, Mentor.mentor_last_name,
                        Mentor.mentor_schedule_date, Mentor.mentor_start_time, Mentor.mentor_end_time,
                        Mentee.mentee_first_name, Mentee.mentee_last_name, Mentee.mentee_phone_no
                FROM Appointment
                INNER JOIN Mentor ON Appointment.mentor_id=Mentor.mentor_id
                INNER JOIN Mentee ON Appointment.mentee_id=Mentee.mentee_id";

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->getResultSet();

    }

    static function deleteAppointment(int $appoitnmentID) {
        $sql = "DELETE FROM Appointment WHERE appointment_id=:appointment_id";

        try {
            self::$db->query($sql);
            self::$db->bind(':appointment_id', $appoitnmentID);
            self::$db->execute();
            if(self::$db->rowCount() != 1) {
                throw new PDOException("Problem when deleting reservation $appoitnmentID");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            
            return false;
        }
        return true;
    }

    static function countTotal() {
        $sql = "SELECT * FROM Appointment";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->rowCount();
    }
}

?>