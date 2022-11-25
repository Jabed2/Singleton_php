<?php

require_once ('inc/classes/Student.php');
use SMAK\Inc as T;
$student = array( "name" => "Mohammad Jabed", "age" => "22", "class" => "BBS", "city" => "Chattogram" );
$obj = T\Student::get_instance($student); //  Access Student Class with Singleton Pattern with get_instance Method

?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
font-size : 20px;
}
</style>
<body>

  <table style="width:100%; max-width : 350px;" >
  <tr>
    <th>Name</th>
    <th>Class</th>
    <th>Age</th>
    <th>City</th>
  </tr>
  <tr>
    <td><?php echo $obj->name(); ?></td>
    <td><?php echo $obj->class(); ?></td>
    <td><?php echo $obj->age(); ?></td>
    <td><?php echo $obj->city(); ?></td>
  </tr>

  
</table>

</body></html>




