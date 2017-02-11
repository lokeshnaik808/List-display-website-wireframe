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
        if(isset($_POST['upload'])){
         $image_dir1='C:/Users/admin/Documents/NetBeansProjects/Intern/images/';
        //$image= @addslashes(file_get_contents($_FILES['imge']['tmp_name']));
         $final_save_dir='http://localhost/Intern/images/';
        $m1=move_uploaded_file($_FILES['imge']['tmp_name'], $image_dir1.$_FILES['imge']['name']);
        if(!$m1){
            echo 'Problem with moving image1';
        }
        $image=$final_save_dir.$_FILES['imge']['name'];
        $yr=$_POST['year'];
        $pr=$_POST['price'];
        $cmp=$_POST['company'];
        $q="INSERT INTO cars VALUES('$cmp', '$pr', '$yr', '$image', '')";
        $qe=mysql_query($q);
        if($qe==TRUE){
            echo 'Data Added Succesfully';
        }
        }
        ?>
        <form method="post" enctype="multipart/form-data">
            <fieldset>
                <label>Upload image</label> <input type="file" name="imge" id="imge">
                <label>Year<input type="text" name="year"></label><br>
                <label>Price<input type="text" name="price"></label><br>
                <label>Company<input type="text" name="company"></label><br>
                <input type="submit" value="Upload" name="upload">
            </fieldset>
        </form>
        <button type="button" value="disp" onclick="dip()">Display List</button>
        <script> function dip(){
            location.href='http://localhost/Intern/adminpanel/admin_display_list.php';
        }</script>
    </body>
</html>
