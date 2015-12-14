<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
        function login(){
       window.location="login.php";
       
        };
        function reg(){
           window.location="registration.php";
        };
        </script>
    </head>
    <body>
        <form action="">
            <h1>WELCOME PAGE</h1>
            <input type="button" value="LOGIN" onclick="login()"/>
            <input type="button" value="REGISTER"onclick="reg()"/>
            
        </form>
        <?php
        // put your code here
        echo 'hello world';
        ?>
    </body>
</html>
