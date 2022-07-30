<?php
class Page
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
                    <a class="navbar-brand" href="Homepage.php">
                        <img src="images/logo.svg" alt="" width="150" height="150">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="Homepage.php">Home</a>
                    </div>
                </div>
                </div>
            </nav>
        <?php
    }

    static function navbarAdmin()
    {
        ?>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="Homepage.php">
                        <img src="images/logo.svg" alt="" width="150" height="150">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="Homepage.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="Mentor_management.php">Mentors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="Appointment_listings.php">Appointments</a>
                            </li>
                    </div>
                    <div class="navbar">
                        <div class="col-md-6">
                            <a class="btn btn-danger" href="admin_logout.php" role="button">Logout</a>
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

    static function manageMentors(array $mentors)
    {
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

                $i = 0;
                foreach ($mentors as $mentor) {
                    if ($i % 2 == 1)
                        echo "<tr class=\"oddRow\">";
                    else
                        echo "<tr class=\"evenRow\">";

                    echo "<td>" . $mentor->getMentor_id() . "</td>";
                    echo "<td>" . $mentor->getMentor_first_name() . "</td>";
                    echo "<td>" . $mentor->getMentor_last_name() . "</td>";
                    echo "<td>" . $mentor->getMentor_email() . "</td>";
                    echo "<td>" . $mentor->getMentor_gender() . "</td>";
                    echo "<td>" . $mentor->getMentor_degree() . "</td>";
                    echo "<td>" . $mentor->getMentor_expert_field() . "</td>";
                    echo "<td>" . $mentor->getMentor_schedule_date() . "</td>";
                    echo "<td>" . $mentor->getMentor_start_time() . "</td>";
                    echo "<td>" . $mentor->getMentor_end_time() . "</td>";

                    $link = $_SERVER['PHP_SELF'] . "?action=edit&mentor_id=" . $mentor->getMentor_id();
                    echo "<td><a href=\"" . $link . "\">Edit</td>";
                    $link = $_SERVER['PHP_SELF'] . "?action=delete&mentor_id=" . $mentor->getMentor_id();
                    echo "<td><a href=\"" . $link . "\">Delete</td>";
                    echo "</tr>";
                    $i++;
                }

                echo '</table>
            </section>';
            }

            static function listMentors(array $mentors)
            {
                ?>
                <div class="container">

                    <h3 class="text-left" style="margin-top: 60px; margin-bottom: 60px; ">Mentor Schedule List</h3>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr class="table-active">
                                <th scope="col">ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Degree</th>
                                <th scope="col">Expert Field</th>
                                <th scope="col">Schedule Date</th>
                                <th scope="col">Start Time</th>
                                <th scope="col">End Time</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>

                        <?php
                        $i = 0;
                        foreach ($mentors as $mentor) {
                            if ($i % 2 == 1)
                                echo "<tr class=\"oddRow\">";
                            else
                                echo "<tr class=\"evenRow\">";

                            echo "<td>" . $mentor->getMentor_id() . "</td>";
                            echo "<td>" . $mentor->getMentor_first_name() . "</td>";
                            echo "<td>" . $mentor->getMentor_last_name() . "</td>";
                            echo "<td>" . $mentor->getMentor_email() . "</td>";
                            echo "<td>" . $mentor->getMentor_gender() . "</td>";
                            echo "<td>" . $mentor->getMentor_degree() . "</td>";
                            echo "<td>" . $mentor->getMentor_expert_field() . "</td>";
                            echo "<td>" . $mentor->getMentor_schedule_date() . "</td>";
                            echo "<td>" . $mentor->getMentor_start_time() . "</td>";
                            echo "<td>" . $mentor->getMentor_end_time() . "</td>";

                            //echo "<td><a type='button' href='Mentee_booking.php' class='btn btn-danger'>Book</a></td>";

                            $mentorID = "?mentor_id=" . $mentor->getMentor_id();
                            $link = "Mentee_booking.php";
                            echo "<td><a href=\"" .$link  . $mentorID . "\">Book</td>";

                            $i++;
                        }

                        echo '</table>
                </section>';
                    }

                    static function addMentorForm()
                    { ?>
                        <section class="form1">
                            <h3>Add a New Mentor</h3>
                            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
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


                    static function editMentor(Mentor $mentor)
                    {
                    ?>
                        <section class="form1">
                            <h3>Edit Mentor - <?php echo $mentor->getMentor_id() ?></h3>
                            <form method="post" action=<?= $_SERVER['PHP_SELF'] ?>>
                                <table>
                                    <tr>
                                        <td>Reservation ID</td>
                                        <td><?= $mentor->getMentor_id() ?></td>
                                    </tr>

                                    <tr>
                                    <tr>
                                        <td>First Name</td>
                                        <td><input type="text" name="mentor_first_name" id="mentor_first_name" placeholder="First Name" value="<?= $mentor->getMentor_first_name(); ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Last Name</td>
                                        <td><input type="text" name="mentor_last_name" id="mentor_last_name" placeholder="Last Name" value="<?= $mentor->getMentor_last_name(); ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><input type="text" name="mentor_email" id="mentor_email" placeholder="Email" value="<?= $mentor->getMentor_email(); ?>"></td>
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
                                        <td><input type="text" name="mentor_degree" id="mentor_degree" placeholder="Degree" value="<?= $mentor->getMentor_degree(); ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Expert field</td>
                                        <td><input type="text" name="mentor_expert_field" id="mentor_expert_field" placeholder="Expert field" value="<?= $mentor->getMentor_expert_field(); ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Schedule Date</td>
                                        <td><input type="date" name="mentor_schedule_date" id="mentor_schedule_date" value="<?= $mentor->getMentor_schedule_date(); ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Start Time</td>
                                        <td><input type="time" name="mentor_start_time" id="mentor_start_time" value="<?= $mentor->getMentor_start_time(); ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>End Time</td>
                                        <td><input type="time" name="mentor_end_time" id="mentor_end_time" value="<?= $mentor->getMentor_end_time(); ?>"></td>
                                    </tr>

                                </table>

                                <input type="hidden" name="action" value="edit">
                                <input type="hidden" name="mentor_id" value="<?= $mentor->getMentor_id(); ?>">
                                <input type="submit" value="Edit Mentor">
                            </form>
                        </section>


                    <?php
                    }

                    static function adminLoginForm()
                    {
                    ?>
                        <section>
                            <div>
                                <form action="" method="post">
                                    <h2>Please Sign in</h2>
                                    <div>
                                        <label for="username">Admin</label>
                                        <input type="text" name="username" placeholder="Admin" required>
                                    </div>
                                    <div>
                                        <label for="password">Password</label>
                                        <input type="password" name="password" placeholder="Password" required>
                                    </div>
                                    <div>
                                        <input type="submit" name="submit" value="Login">
                                    </div>
                                    <p class="error"></p>
                                    <?php
                                    if (!empty($_POST['username']) && !LoginManager::verifyLogin()) {
                                        echo "<p class=\"error\">Wrong username or password!</p>";
                                    }
                                    ?>
                                    <!-- <p>Do not have an account? Please <a href="Assignment4_register_QMa32979.php">register</a></p> -->
                                </form>
                            </div>
                        </section>
                    <?php
                    }

                    static function displayRegistration()
                    {

                    ?>
                        <section>
                            <div>
                                <p>Have an account? Please <a href="Admin_login_page.php">login</a></p>
                                <!-- <p class="error">All inputs are required. <br>
                    Please fix the error(s) in the username, email, password, password confirm, profile picture, not secret question, and not secret answer inputs</p> -->
                                <?php
                                // TODO Validation
                                ?>
                                <form action="" method="post">
                                    <h2>Please fill the form</h2>
                                    <div>
                                        <label for="username">Username</label>
                                        <input type="text" name="username" placeholder="Enter username with no whitespace">
                                    </div>
                                    <div>
                                        <label for="full_name">Full Name</label>
                                        <input type="text" name="full_name" placeholder="Enter your full Name">
                                    </div>
                                    <div>
                                        <label for="password">Password</label>
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                    <div>
                                        <label for="password">Password confirm</label>
                                        <input type="password" name="password2" placeholder="Password confirm">
                                    </div>
                                    <div>
                                        <label for="email">Email Address</label>
                                        <input type="email" name="email" placeholder="Email address for login">
                                    </div>

                                    <div>
                                        <input type="hidden" name="action" value="create">
                                        <input type="submit" name="submit" value="Register">

                                    </div>
                                </form>
                            </div>
                        </section>

                <?php }
                }
                ?>