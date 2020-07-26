<?php
 require_once('config.php');

 if(isset($_GET['semail1'])){
  
  $email = $_GET['semail1'];

  $select = mysqli_query($mysqli, "SELECT * FROM users WHERE email = $email");
    if($select==$email)
    {
        //display defeath message
        header("Location: index.php?event=$select#interests");
    }
    else
    {
        $result = mysqli_query($mysqli, "INSERT INTO users(Email) VALUES('$email')");	
        //display success message
        header("Location: index.php?event=popupok#interests");
    }
 }
 else
 {
     header('location: index.php?#interests');
 }



?>