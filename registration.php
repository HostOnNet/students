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
    </head>
    <body>
        
        
        <form action="registration.php" method="post">
            <label>first name :</label>
            <input type="text" name="fname"/><br />
            <label>last name :</label>
            <input type="text" name="lname"/><br />
            <label>father name :</label>
            <input type="text" name="fathername"/><br />
            <label> Date of birth :</label>
            <input type="text" name="dob"/><br />
            <label> Gender :</label>
            <input type="text" name="gender"/><br />
            <label> Username :</label>
            <input type="text" name="uname"/><br />
            <label>Password :</label>
            <input type="password" name="pwrd"/><br />
            <input type="submit" value=" Submit "/><br />
        </form>
        <?php
        include ('./connectn.php');        // put your code here
        if(isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['fathername'])&&isset($_POST['dob'])&&isset($_POST['gender'])&&isset($_POST['uname'])&&isset($_POST['pwrd']))
        {
        $Fname        = $_POST['fname'];
        $Lname        = $_POST['lname'];	
        $Fathername   = $_POST['fathername'];
        $Dob        = $_POST['dob'];
        $Gender     = $_POST['gender'];  
        $Uname     = $_POST['uname'];  
        $Pwd     = $_POST['pwrd'];  
        $sql_query="insert into reg_tab (firstname, lastname, fathername, dob, gender,uname, pwrd) values('$Fname','$Lname','$Fathername','$Dob','$Gender','$Uname','$Pwd')";
      echo $sql_query; 
        $ret=  mysql_query($sql_query,$con) or die("Error:".mysql_error());
        echo $ret;
        if($ret)
        {
            echo 'success';
        }
        else {
     echo 'not sucess';
      }
        }
        ?>
    </body>
</html>
