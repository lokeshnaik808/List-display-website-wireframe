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
        <?php
        require('config.php');
        if(isset($_POST['login'])){
        $una=$_POST['uname'];
        $paa=$_POST['pass'];
        $q="SELECT * FROM admins WHERE username='$una' AND password='$paa'";
        $cq=mysql_query($q);
        $r=mysql_num_rows($cq);
        if($r==true){
            echo "<script>document.location='http://127.0.0.1/intern/adminpanel/admin_page.php'</script>";
        }
        else {
            echo "Wrong Details check again";
        }
        }
        ?>
    <legend>Login as admin</legend>
    <form method="post">
        <fieldset>
            <label for="uname">Username <input type="text" name="uname" id="uname"></label>
            <label for="pass">Password <input type="password" name="pass"></label>
            <input type="submit" value="Login" name="login">
        </fieldset>
    </form>
    </body>
</html>