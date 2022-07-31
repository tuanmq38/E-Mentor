<?php
/*
+-----------+-----------------+------------------+------------------+---------------+---------------+---------------------+----------------------+-------------------+-----------------+
| mentor_id | mentor_email    | mentor_fist_name | mentor_last_name | mentor_gender | mentor_degree | mentor_expert_field | mentor_schedule_date | mentor_start_time | mentor_end_time |
+-----------+-----------------+------------------+------------------+---------------+---------------+---------------------+----------------------+-------------------+-----------------+
*/

class MentorDAO {
    private static $db;

    static function init(string $className) {
        self::$db = new PDOService($className);
    }

    // CREATE NEW MENTOR
    static function createMentor(Mentor $newMentor) {
        
        $sql = "INSERT INTO Mentor (mentor_id, mentor_email, mentor_first_name, mentor_last_name, mentor_gender, mentor_degree,
                mentor_expert_field, mentor_schedule_date, mentor_start_time, mentor_end_time)
                VALUES (:mentor_id, :mentor_email, :mentor_first_name, :mentor_last_name, :mentor_gender, :mentor_degree,
                :mentor_expert_field, :mentor_schedule_date, :mentor_start_time, :mentor_end_time)";
        
        self::$db->query($sql);

        self::$db->bind(':mentor_id', $newMentor->getMentor_id());
        self::$db->bind(':mentor_email', $newMentor->getMentor_email());
        self::$db->bind(':mentor_first_name', $newMentor->getMentor_first_name());
        self::$db->bind(':mentor_last_name', $newMentor->getMentor_last_name());
        self::$db->bind(':mentor_gender', $newMentor->getMentor_gender());
        self::$db->bind(':mentor_degree', $newMentor->getMentor_degree());
        self::$db->bind(':mentor_expert_field', $newMentor->getMentor_expert_field());
        self::$db->bind(':mentor_schedule_date', $newMentor->getMentor_schedule_date());
        self::$db->bind(':mentor_start_time', $newMentor->getMentor_start_time());
        self::$db->bind(':mentor_end_time', $newMentor->getMentor_end_time());

        self::$db->execute();

        return self::$db->lastInsertedId();

    }

    // GET ALL MENTORS
    static function getMentors() {
        $sql = "SELECT * FROM Mentor";

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->getResultSet();
    }

    // GET SPECIFIC MENTOR
    static function getMentor(string $mentorId) {
        $sql = "SELECT * FROM Mentor WHERE mentor_id =:mentor_id";

        self::$db->query($sql);
        self::$db->bind(':mentor_id', $mentorId);
        self::$db->execute();

        return self::$db->singleResult();
    }

    // DETELE MENTOR
    static function deleteMentor(int $mentorID) {
        $sql = "DELETE FROM Mentor WHERE mentor_id=:mentor_id";

        try {
            self::$db->query($sql);
            self::$db->bind(':mentor_id', $mentorID);
            self::$db->execute();
            if(self::$db->rowCount() != 1) {
                throw new PDOException("Problem when deleting reservation $mentorID");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            
            return false;
        }
        return true;
    }

    //UPDATE MENTOR
    static function updateMentor(Mentor $updateMentor) {
        $sql = "UPDATE Mentor
                SET mentor_email=:mentor_email, mentor_first_name=:mentor_first_name, mentor_last_name=:mentor_last_name,
                mentor_gender=:mentor_gender, mentor_degree=:mentor_degree, mentor_expert_field=:mentor_expert_field,
                mentor_schedule_date=:mentor_schedule_date, mentor_start_time=:mentor_start_time, mentor_end_time=:mentor_end_time
                WHERE mentor_id=:mentor_id";
        
        self::$db->query($sql);

        self::$db->bind(':mentor_id', $updateMentor->getMentor_id());
        self::$db->bind(':mentor_email', $updateMentor->getMentor_email());
        self::$db->bind(':mentor_first_name', $updateMentor->getMentor_first_name());
        self::$db->bind(':mentor_last_name', $updateMentor->getMentor_last_name());
        self::$db->bind(':mentor_gender', $updateMentor->getMentor_gender());
        self::$db->bind(':mentor_degree', $updateMentor->getMentor_degree());
        self::$db->bind(':mentor_expert_field', $updateMentor->getMentor_expert_field());
        self::$db->bind(':mentor_schedule_date', $updateMentor->getMentor_schedule_date());
        self::$db->bind(':mentor_start_time', $updateMentor->getMentor_start_time());
        self::$db->bind(':mentor_end_time', $updateMentor->getMentor_end_time());

        self::$db->execute();

        return self::$db->rowCount();
    }


    static function getRecord(string $searchMentor) {
        $sql = "SELECT * FROM Mentor WHERE Mentor.mentor_first_name LIKE '%$searchMentor%'
                OR Mentor.mentor_last_name LIKE '%$searchMentor%'";

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->getResultSet();
    }

}
?>