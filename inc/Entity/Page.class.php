<?php
class Page  {

    static function header()   { ?>
        <!-- Start the page 'header' -->
        <!DOCTYPE html>
        <html>
            <head>
                <title></title>
                <meta charset="utf-8">
                <meta name="author" content="">
                <title></title>   
                <link href="css/stylesB.css" rel="stylesheet">     
            </head>
            <body>
                <header>
                <h1>Mentor Management</h1>
                </header>
                <article>
    <?php }

    static function footer()   { ?>
        <!-- Start the page's footer -->            
                </article>
            </body>

        </html>

    <?php }

static function listMentors(Array $mentors)    {
    ?>
        <!-- Start the page's show data form -->
        <section class="main">
        <h2>Mentor List</h2>
        <table id="list">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Degree</th>
                    <th>Expert Field</th>
                    <th>Schedule Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <!-- Complete the remaining header --> 
                    <th>Edit</th>
                    <th>Delete</th>
            </thead>
            <?php

                $i=0;
                foreach($mentors as $mentor) {
                    if($i%2==1)
                        echo "<tr class=\"oddRow\">";
                    else
                        echo "<tr class=\"evenRow\">";

                    echo "<td>".$mentor->getMentor_id() ."</td>";
                    echo "<td>".$mentor->getMentor_first_name() ."</td>";
                    echo "<td>".$mentor->getMentor_last_name() ."</td>";
                    echo "<td>".$mentor->getMentor_email() ."</td>";
                    echo "<td>".$mentor->getMentor_gender() ."</td>";
                    echo "<td>".$mentor->getMentor_degree() ."</td>";
                    echo "<td>".$mentor->getMentor_expert_field() ."</td>";
                    echo "<td>".$mentor->getMentor_schedule_date() ."</td>";
                    echo "<td>".$mentor->getMentor_start_time() ."</td>";
                    echo "<td>".$mentor->getMentor_end_time() ."</td>";

                    $link = $_SERVER['PHP_SELF']."?action=edit&mentor_id=".$mentor->getMentor_id();
                    echo "<td><a href=\"".$link."\">Edit</td>";
                    $link = $_SERVER['PHP_SELF']."?action=delete&mentor_id=".$mentor->getMentor_id();
                    echo "<td><a href=\"".$link."\">Delete</td>";
                    echo "</tr>";
                    $i++;
                }

            echo '</table>
            </section>';
  
    }

    static function addMentorForm()   { ?>        
        <section class="form1">
                <h3>Add a New Mentor</h3>
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                    <table>
                        <!-- <tr>
                            <td>ID</td>
                            <td><input type="text" name="mentor_id" id="mentor_id" placeholder="ID"></td>
                        </tr> -->
                        <tr>
                        <tr>
                            <td>First Name</td>
                            <td><input type="text" name="mentor_first_name" id="mentor_first_name" placeholder="First Name"></td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><input type="text" name="mentor_last_name" id="mentor_last_name" placeholder="Last Name"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="mentor_email" id="mentor_email" placeholder="Email"></td>
                        </tr>   
                        <tr>
                            <td>Gender</td>
                            <td>
                            <select type="text" name="mentor_gender" id="mentor_gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                            </td>
                        </tr>    
                        <tr>
                            <td>Degree</td>
                            <td><input type="text" name="mentor_degree" id="mentor_degree" placeholder="Degree"></td>
                        </tr>     
                        <tr>
                            <td>Expert field</td>
                            <td><input type="text" name="mentor_expert_field" id="mentor_expert_field" placeholder="Expert field"></td>
                        </tr>     
                        <tr>
                            <td>Schedule Date</td>
                            <td><input type="date" name="mentor_schedule_date" id="mentor_schedule_date"></td>
                        </tr>    
                        <tr>
                            <td>Start Time</td>
                            <td><input type="time" name="mentor_start_time" id="mentor_start_time"></td>
                        </tr>      
                        <tr>
                            <td>End Time</td>
                            <td><input type="time" name="mentor_end_time" id="mentor_end_time"></td>
                        </tr>                                    
                        
                    </table>
                    <!-- Use input type hidden to let us know that this action is to create record -->
                    <input type="hidden" name="action" value="create">
                    <input type="submit" value="Add Mentor">
                </form>
            </section>

    <?php }

    static function editMentor(Mentor $mentor) {
        ?>
            <section class="form1">
            <h3>Edit Mentor - <?php echo $mentor->getMentor_id() ?></h3>
            <form method="post" action=<?=$_SERVER['PHP_SELF']?>>
            <table>
                <tr>
                    <td>Reservation ID</td>
                    <td><?=$mentor->getMentor_id()?></td>
                </tr>
    
                        <tr>
                        <tr>
                            <td>First Name</td>
                            <td><input type="text" name="mentor_first_name" id="mentor_first_name" placeholder="First Name"
                            value="<?=$mentor->getMentor_first_name();?>"></td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><input type="text" name="mentor_last_name" id="mentor_last_name" placeholder="Last Name"
                            value="<?=$mentor->getMentor_last_name();?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="mentor_email" id="mentor_email" placeholder="Email"
                            value="<?=$mentor->getMentor_email();?>"></td>
                        </tr>   
                        <tr>
                            <td>Gender</td>
                            <td>
                            <select type="text" name="mentor_gender" id="mentor_gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                            </td>
                        </tr>    
                        <tr>
                            <td>Degree</td>
                            <td><input type="text" name="mentor_degree" id="mentor_degree" placeholder="Degree"
                            value="<?=$mentor->getMentor_degree();?>"></td>
                        </tr>     
                        <tr>
                            <td>Expert field</td>
                            <td><input type="text" name="mentor_expert_field" id="mentor_expert_field" placeholder="Expert field"
                            value="<?=$mentor->getMentor_expert_field();?>"></td>
                        </tr>     
                        <tr>
                            <td>Schedule Date</td>
                            <td><input type="date" name="mentor_schedule_date" id="mentor_schedule_date"
                            value="<?=$mentor->getMentor_schedule_date();?>"></td>
                        </tr>    
                        <tr>
                            <td>Start Time</td>
                            <td><input type="time" name="mentor_start_time" id="mentor_start_time"
                            value="<?=$mentor->getMentor_start_time();?>"></td>
                        </tr>      
                        <tr>
                            <td>End Time</td>
                            <td><input type="time" name="mentor_end_time" id="mentor_end_time"
                            value="<?=$mentor->getMentor_end_time();?>"></td>
                        </tr>                                    
                        
                    </table>

                    <input type="hidden" name="action" value="edit">
                    <input type="hidden" name="mentor_id" value="<?=$mentor->getMentor_id();?>">
                    <input type="submit" value="Edit Mentor">
                </form>
            </section>


        <?php
    }

}
?>