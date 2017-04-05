<?php 
  include("../config.php"); // Connect to database

  $to = "emmelie.sundell@hotmail.com";
  $subject = "From www.memlisen.se";

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['text'];

  $query = "
    INSERT INTO messages
    (
      meddelande,
      avsändare, 
      telefonnummer,
      epost
    )

    VALUES 
    (
      '$message',
      '$name',
      '$phone',
      '$email'
    )";

  mysqli_query($database, $query); // Send query
  mysqli_close($database); // Close database connection

  $message = <<<EMAIL
  Sent from; $name , $email
  Meddelande;
  $message
EMAIL;

  mail($to, $subject, $message);
 ?>