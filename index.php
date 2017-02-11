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
        while ($qx = mysql_fetch_array($qc)) {
            echo('<ul><li><img src="'.$qx["image"].'"><br>Price: '.$qx["price"].'<br>Year: '.$qx["year"].'<br>Company: '.$qx["company"].'<br></li></ul>');   
           
        }
       
        ?>
    </body>
</html>
