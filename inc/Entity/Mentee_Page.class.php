<?php
class Mentee_Page
{

    static function displayHeader()
    { ?>
        <!-- Start the page 'header' -->
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
            <link href="css/stylesB.css" rel="stylesheet">
        </head>

        <body>



        <?php }

    static function navbar()
    {
        ?>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="TeamNumber01.php">
                        <img src="images/logo.svg" alt="" width="150" height="150">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="TeamNumber01.php">Home</a>
                    </div>
                </div>
                </div>
            </nav>
        <?php
    }

    static function footer()
    { ?>

        </body>

        </html>

    <?php }

    static function menteeBookForm()
    {
        $valid_status = Validate::$notifications;
    ?>
        <section class="form-group">
            <h3>Booking Appointment</h3>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                <table>
                    <tr>
                    <tr>
                        <td>First Name</td>
                        <td><input type="text" name="mentee_first_name" id="mentee_first_name" placeholder="First Name"
                        <?php 
                                if (isset($_POST['mentee_first_name']) && empty($valid_status['mentee_first_name'])) {
                                    echo "value='".$_POST['mentee_first_name']."'";
                                } else echo "value='" . "'";
                                
                                ?>></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><input type="text" name="mentee_last_name" id="mentee_last_name" placeholder="Last Name"
                        <?php 
                                if (isset($_POST['mentee_last_name']) && empty($valid_status['mentee_last_name'])) {
                                    echo "value='".$_POST['mentee_last_name']."'";
                                } else echo "value='" . "'";
                                
                                ?>></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="mentee_email" id="mentee_email" placeholder="Email"></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>
                            <select type="text" name="mentee_gender" id="mentee_gender">
                                <option value="Gender">Select your gender...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td><input type="date" name="mentee_dob" id="mentee_dob"
                        <?php 
                                if (isset($_POST['mentee_dob']) && empty($valid_status['mentee_dob'])) {
                                    echo "value='".$_POST['mentee_dob']."'";
                                } else echo "value='" . "'";
                                
                                ?>></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><input type="text" name="mentee_phone_no" id="mentee_phone_no"
                        <?php 
                                if (isset($_POST['mentee_phone_no']) && empty($valid_status['mentee_phone_no'])) {
                                    echo "value='".$_POST['mentee_phone_no']."'";
                                } else echo "value='" . "'";
                                
                                ?>></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><input type="text" name="mentee_status" id="mentee_status"></td>
                    </tr>

                </table>
                <!-- Use input type hidden to let us know that this action is to create record -->
                <input type="hidden" name="action" value="create">
                <input type="hidden" name="mentor_id" value="<?= $_REQUEST['mentor_id'] ?>">
                <input type="submit" value="Make Appointment">
                

            </form>
        </section>
<?php
    }

    static function displayErrorMessage($valid_status)
    {
        ?> 
        <!-- Start the page's error notification -->
        <div class="highlight">
                    <p><strong>Please fix the following errors:</strong></p>
                    <ul>
                        <?php 
                        foreach($valid_status as $error) {
                            echo '<li style="color:red;">' .$error .'</li>';
                           
                        }
                        ?>           
                    </ul>                                        
                </div>
        <?php
    }
}

?>