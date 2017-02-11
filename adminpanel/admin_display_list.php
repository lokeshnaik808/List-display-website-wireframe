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
        $q="select * from cars";
        $qc=  mysql_query($q);
        function disp($x){
            $q="delete from cars where id=".$x."";
            $qc= mysql_query($q);
            if($qc){
                echo '<script>location.href="http://localhost/Intern/adminpanel/admin_display_list.php"</script>';
            }
            return $x;
        }
        while ($qx = mysql_fetch_array($qc)) {
            echo('<ul><li><img src="'.$qx["image"].'"><br>Price: '.$qx["price"].'<br>Year: '.$qx["year"].'<br>Company: '.$qx["company"].'<br>'.
                 '<form method="POST"><button name="del" value='.$qx["id"].' type="submit">Delete</button></li></ul>');   
           
        }
        if(isset($_POST['del'])){
                disp($_POST['del']);
            }
        ?>
    </body>
</html>
