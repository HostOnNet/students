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

        <form action="login.php" method="post">

            <label>UserName :</label>
            <input type="text" name="username"/><br />
            <label>Password :</label>
            <input type="password" name="password"/><br />
            <input type="submit" value=" Submit "/><br />

        </form>
        <?php
        include ('./connectn.php');
        // put your code here
        
        if (isset($_POST['username']) && isset($_POST['password']))
        {
            $Fname = $_POST['username'];
            $Lname = $_POST['password'];

            $sql_query = "select uname, pwrd from reg_tab where uname='$Fname' ";
            //echo $sql_query; 
            $ret = mysql_query($sql_query, $con) or die("Error:" . mysql_error());
            //echo $ret;
            $row=mysql_fetch_row($ret);   
            
               // while ($row = mysql_fetch_array($ret, MYSQL_ASSOC)) 
                //{
                    
                     
                    if ($row['0'] == "$Fname" && $row['1'] == "$Lname")
                    {
                        header("location:sucess.php");                      
                    }
                    else 
                    {                        
                        echo '<script>alert("Please give a valid username and password");</script>';
                    }
        
               // }
         }
             
        ?>
    </body>
</html>
