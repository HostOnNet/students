<?php

require 'config.php';

Auth::check();

$courses = file('courses.txt');

require 'header.php';


?>

    <div class="container">
        <div class="jumbotron">

            <h1>Enroll Courses</h1>

            <form action="update_course.php" method="POST">
            <?php

            foreach ($courses as $course) {
                $course = trim($course);
                if (!empty($course)) {
                    echo "<input type=\"checkbox\" name=\"course[]\" value=\"$course\"/> $course<br>";
                }
            }

            ?>
                <br>

                <input type="submit" name="submit" value="Update" class="btn btn-lg btn-default" />
            </form>


        </div>
    </div>


<?php

require 'footer.php';

