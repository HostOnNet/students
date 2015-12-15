<?php require 'header.php'; ?>

<script>
    function login(){
        window.location="login.php";

    };
    function reg(){
        window.location="registration.php";
    };
</script>


<br>

<br>

<br>

<div class="container">

    <div class="jumbotron">
        <h1>Hello, Welcome!</h1>
        <p>students can register/login here</p>

        <br>

        <div class="row">
            <div class="col-md-2"><a href="login.php" class="btn btn-lg btn-block btn-default">LOGIN</a></div>
            <div class="col-md-2"><a href="register.php" class="btn btn-lg btn-block btn-default">REGISTER</a></div>
        </div>
    </div>


</div>


<?php require "footer.php";
