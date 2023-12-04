 <?php
 $k=new mysqli("localhost","root","","shebin");
 $table="create table student(Roll_no int(2) primary key,Name varchar(20), Age int(10))";
if($k->query($table)===true)
{
    echo "Table created successfully";
}
else
{
    echo "Error occured";
}
