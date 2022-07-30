<?php
/*
+-----------+-----------------+------------------+------------------+------------+---------------+-----------------+---------------+
| mentee_id | mentee_email    | mentee_fist_name | mentee_last_name | mentee_dob | mentee_gender | mentee_phone_no | mentee_status |
+-----------+-----------------+------------------+------------------+------------+---------------+-----------------+---------------+
*/
class MenteeDao {
    private static $db;

    static function init(string $className) {
        self::$db = new PDOService($className);
    }

    static function createMentee(Mentee $mentee) {
        $sql = "INSERT INTO Mentee (mentee_email, mentee_first_name, mentee_last_name, mentee_dob,
                                    mentee_gender, mentee_phone_no, mentee_status)
                VALUES(:mentee_email, :mentee_first_name, :mentee_last_name, :mentee_dob,
                        :mentee_gender, :mentee_phone_no, :mentee_status)";

        self::$db->query($sql);

        self::$db->bind(':mentee_email', $mentee->getMentee_email());
        self::$db->bind(':mentee_first_name', $mentee->getMentee_first_name());
        self::$db->bind(':mentee_last_name', $mentee->getMentee_last_name());
        self::$db->bind(':mentee_dob', $mentee->getMentee_dob());
        self::$db->bind(':mentee_gender', $mentee->getMentee_gender());
        self::$db->bind(':mentee_phone_no', $mentee->getMentee_phone_no());
        self::$db->bind(':mentee_status', $mentee->getMentee_status());

        self::$db->execute();
        
        return self::$db->lastInsertedId();

    }

    static function getMentee(string $menteeId) {
        $sql = "SELECT * FROM Mentee WHERE mentee_id =:mentee_id";

        self::$db->query($sql);
        self::$db->bind(':mentee_id', $menteeId);
        self::$db->execute();

        return self::$db->singleResult();
    }

    static function getAllMentee() {
        $sql = "SELECT * FROM Mentee";

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->getResultSet();
    }
}

?>