<?php
echo "
<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='css/kontakt.css'>
<link rel='stylesheet' type='text/css' href='css/menu.css'>
  <script src='scripts/jquery.min.js'></script>
  <script src='scripts/menu.js'></script>
  <title></title>
</head>
<body>

  <div id='mySidenav' class='sidenav'>
    <a href='index.html'>Start</a>
    <a href='aboutme.html'>About me</a>
    <a href='mittcv.html'>Resume</a>
    <a href='kontakt.html'>Contact</a>
  </div>

  <!-- Knappen -->
  <div id='nav-container'>
      <div class='toggle-icon'>
        <span class='bar'></span>
        <span class='bar'></span>
        <span class='bar'></span>
      </div>
  </div>




 <div class='contact-div'>
      Järfälla, Sweden<br>
      Mobil: 0708769638<br>
      Email: emmelie.sundell@hotmail.com<br>
    <p>Swing by for a cup of coffee, or leave me a note:</p>
    <form method='post'>
      <input name='name' class='input-style input-border ' type='text' placeholder='Namn'>
      <input name='email' class='input-style input-border' type='email' placeholder='Email'>
      <input name='phone' class='input-style input-border ' type='text' placeholder='Telefonnummer'>
      <input name='text' class='input-style input-border' type='text' placeholder='skriv din text här...'>
      <input type='submit' class='send-btn margin w3-right'>

      <div class='fb-like' data-href='https://memlisen.se' data-width='200' data-layout='standard' data-action='like' data-show-faces='true' data-share='true'></div>

      <script src='//platform.linkedin.com/in.js' type='text/javascript'></script>
      <script type='IN/MemberProfile' data-id='https://www.linkedin.com/in/emmelie-sundell-41bba2128' data-format='hover' data-text='Emmelie Sundell'></script>
        
    </form>
  </div>
  ";

  if($_POST) {
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
      )

    ";

    mysqli_query($database, $query);

  $message = <<<EMAIL
 
 Sent from; $name , $email
  Meddelande;
  $message
EMAIL;
  mail($to, $subject, $message);
  $feedback = 'Your message has been sent!';
  echo $feedback;
  $headers .= 'Content-type: text/html; charset=UTF-8';

}
echo "
</body>
</html>
";

 