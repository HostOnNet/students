<?php require 'header.php'; ?>

<div class="container">

    <div class="jumbotron">

        <?php require 'flash_messages.php'; ?>

        <h1>Login</h1>
        <form action="login_process.php" method="post" class="form-horizontal">
            <label>UserName :</label>
            <input type="text" name="username" class="form-control"/><br />
            <label>Password :</label>
            <input type="password" name="password" class="form-control" /><br />
            <input type="submit" value=" Submit " class="btn btn-primary"/><br />
        </form>

    </div>

</div>

<?php

require "footer.php";
