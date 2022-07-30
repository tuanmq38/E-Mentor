<?php

class Appointment_Page
{

    static function displayAppointments(array $appointments)
    {
        ?>
        <div class="container">

            <h3 class="text-left" style="margin-top: 60px; margin-bottom: 60px; ">Appointment Schedule List</h3>
            <p><strong>Current Time and Date: </strong> <?php echo date("l jS \of F Y h:i:s A"); ?></p>
            <table class="table">
                <thead class="thead-dark">
                    <tr class="table-active">
                        <th scope="col">Appointment No.</th>
                        <th scope="col">Mentor First Name</th>
                        <th scope="col">Mentor Last Name</th>
                        <th scope="col">Mentee First Name</th>
                        <th scope="col">Mentee Last Name</th>
                        <th scope="col">Schedule Date</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">End Time</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

        <?php
        $i = 0;
        foreach ($appointments as $appointment) {
            if ($i % 2 == 1)
                echo "<tr class=\"oddRow\">";
            else
                echo "<tr class=\"evenRow\">";

            echo "<td>" . $appointment->getAppointment_id() . "</td>";
            echo "<td>" . $appointment->mentor_first_name . "</td>";
            echo "<td>" . $appointment->mentor_last_name . "</td>";
            echo "<td>" . $appointment->mentee_first_name . "</td>";
            echo "<td>" . $appointment->mentee_last_name . "</td>";
            echo "<td>" . $appointment->mentor_schedule_date . "</td>";
            echo "<td>" . $appointment->mentor_start_time . "</td>";
            echo "<td>" . $appointment->mentor_end_time . "</td>";

            $currentDate = date("Y-m-d");
            if ($appointment->mentor_schedule_date > $currentDate) 
                echo "<td>". "Active" ."</td>";
            else
                echo "<td>". "Inactive" ."</td>";
            
            $link = $_SERVER['PHP_SELF'] . "?action=delete&appointment_id=" . $appointment->getAppointment_id();
            echo "<td><a href=\"" . $link . "\">Delete</td>";
            echo "</tr>";
            $i++;
        }
    }
}

        ?>