<?php require 'header.php'; ?>


<div class="container">
    <div class="jumbotron">

        <h1>Student Enrollment</h1>

        <form action="register_2.php" method="post" class="form-horizontal">
            <label>first name :</label>
            <input type="text" name="first_name" class="form-control" required="required"/><br />
            <label>last name :</label>
            <input type="text" name="last_name" class="form-control" required="required"/><br />
            <label>father name :</label>
            <input type="text" name="father_name" class="form-control" required="required"/><br />
            <label> Date of birth :</label>
            <input type="text" name="$date_of_birth" class="form-control" required="required"/><br />
            <label> Gender :</label>
            <select name="gender" class="form-control"  required="required">
                <option value="">--SELECT--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <br />
            <label> Username :</label>
            <input type="text" name="username" class="form-control" required="required"/><br />
            <label>Password :</label>
            <input type="password" name="password" class="form-control" required="required"/><br />
            <input type="submit" name="submit" value="Next" class="btn btn-lg btn-default"/><br />
        </form>
    </div>
</div>



<?php require "footer.php";

