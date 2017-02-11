<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Only for setup purpose
$host='localhost';
$username='root';
$password='johncena';
$con=  mysql_connect($host, $username, $password);
if(!$con)
{
    die(mysql_error());
}
$db=  mysql_select_db("example", $con);
if(!$db){
    die(mysql_error());
}
$c='create table admins(username varchar(10) NOT NULL, password varchar(10) NOT NULL)';
$cq=mysql_query($c);
if(!$cq){
    echo 'problem creating admins table';
}
$d='create table cars(company varchar(10) NOT NULL, price int NOT NULL, year int NOT NULL, image blob NOT NULL, id int PRIMARY KEY auto_increment)';
$dq=  mysql_query($d);
if(!$dq){
    echo 'problem creating cars table';
}
echo 'Database has been setup';