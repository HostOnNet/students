<?php

require 'config.php';

Auth::check();

$user = Auth::getUser();

$courses = explode("\n", $user['courses']);

require 'header.php';

?>

<div class="container">
    <div class="jumbotron">
        <h1>Welcome <?php echo $user['first_name'] . ' ' . $user['last_name']; ?></h1>

        <table class="table table-hover table-borderd">
            <tr>
                <td>First Name</td>
                <td><?php echo $user['first_name']; ?></td>
            </tr>

            <tr>
                <td>Last Name</td>
                <td><?php echo $user['last_name']; ?></td>
            </tr>

            <tr>
                <td>Date of Birth</td>
                <td><?php echo $user['date_of_birth']; ?></td>
            </tr>

            <tr>
                <td>gender</td>
                <td><?php echo $user['gender']; ?></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><?php echo $user['email']; ?></td>
            </tr>

            <tr>
                <td>username</td>
                <td><?php echo $user['username']; ?></td>
            </tr>

        </table>

        <div class="page-header">
            <h2>Courses</h2>
        </div>

        <div class="row">
            <div class="col-md-11" style="margin-left:1em">
                <?php

                foreach ($courses as $course) {
                    $course = trim($course);
                    if (!empty($course)) {
                        echo "<li>$course</li>";
                    }
                }

                ?>
            </div>
        </div>


    </div>
</div>


<?php

require "footer.php";
