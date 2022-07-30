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
}

?>