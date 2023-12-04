<?php
$c=new mysqli("localhost","root","","Shebin");
 
$in="insert into student (Roll_no,Name,Age) values(1,'Shebin',22)";
$in="insert into student (Roll_no,name,Age) values(2,'Anas',24)";
$in="insert into student (Roll_no,name,Age) values(3,'Ansi',22)";
$in="insert into student (Roll_no,name,Age) values(4,'Dilsha',23)";
$in="insert into student (Roll_no,name,Age) values(5,'Anu',21)";
$in="insert into student (Roll_no,name,Age) values(6,'Abu',25)";
$l="DELETE FROM student WHERE Roll_no = 6";
if($c->query($in)===true)
{
    echo 'Record added ';
}
 else {
    echo 'Failed';
}