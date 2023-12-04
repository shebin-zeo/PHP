<?php

 $k= new mysqli("localhost","root","","Shebin");
 $d="Delete from student where Roll_no='5'";
 if($k->query($d)==true)
 {
     echo 'Data connected ';
 }
 else {
'Not connected';     
}