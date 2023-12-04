  <?php
 $a=new mysqli("localhost","root","","shebin");
 $se="select *from student";
 $r=$a->query($se);
 if($r->num_rows>0)
 {
     echo "<table border='2'>
     <tr>
     <th>Roll no</th>
     <th>NAME</th>
     <th>Age</th>
     </tr>";
     
 
 
  while($ro=$r->fetch_assoc())
  {
        echo "<tr>
            <td>".$ro["Roll_no"]."</td>
            <td>".$ro["Name"]."</td>
             <td>" .$ro["Age"]." </td>  <br>
            </tr>";
    }
    echo "</table>";
 
 }else 
{
 echo"not selected";   
}
$a->close();
?>