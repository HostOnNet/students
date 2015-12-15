<?php require 'header.php'; ?>


<div class="container">
    <div class="jumbotron">

        <h1>Student Enrollment</h1>

        <form action="register_process.php" method="post" class="form-horizontal">
            <label>First Name :</label>
            <input type="text" name="first_name" class="form-control" required="required"/><br />
            <label>Last Name :</label>
            <input type="text" name="last_name" class="form-control" required="required"/><br />
            <label>Father's Name :</label>
            <input type="text" name="father_name" class="form-control" required="required"/><br />
            <label> Date of Birth :</label>
            <input type="date" name="date_of_birth" class="form-control" required="required"/><br />
            <label> Gender :</label>
            <select name="gender" class="form-control"  required="required">
                <option value="">--SELECT--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <br />
            <label> Email :</label>
            <input type="text" name="email" class="form-control" required="required"/><br />
            <label> Username :</label>
            <input type="text" name="username" class="form-control" required="required"/><br />
            <label>Password :</label>
            <input type="password" name="password" class="form-control" required="required"/><br />
            <input type="submit" name="submit" value="Next" class="btn btn-lg btn-default"/><br />
        </form>
    </div>
</div>



<?php require "footer.php";

