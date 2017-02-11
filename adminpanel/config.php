<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$host='localhost';
$username='root';
$password='johncena';
$con=  mysql_connect($host, $username, $password);
if(!$con)
{
    die($con);
}
$db=  mysql_select_db("example", $con);
if(!$db){
    die($con);
}

?>