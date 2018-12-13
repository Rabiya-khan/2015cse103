<?php
if (isset($_POST['submit']))
    {      
    include 'db.php';

                    $name=$_POST['name'];                
                    $age=$_POST['age'];
                    $number=$_POST['number'];
                    $password=$_POST['password'];

         mysql_query("INSERT INTO student(name,age,number,password) 
         VALUES ('$name','$age','$number','$password')"); 
            }
?>
