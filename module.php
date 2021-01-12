<div class="envois">
<?php 


if(!isset($_POST['email']) || empty($_POST['email']))
{
	echo "<h1> Veuillez fournir au moins votre mail afin que nous puissions vous contacter.</h1>";
}
else
{
	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$message = $_POST['message'];
	$date = date('d F Y');  
	$email_msg = "Demande de devis (".$date. "): \n\n";
	$email_msg .="Nom : ".$nom."\n";
	$email_msg .="Téléphone : ".$tel."\n";
	$email_msg .="Email: ".$email."\n";
	$email_msg .="Message: ".$message."\n"; 
 

	  $dest = "christophedeleu@gmail.com";
	  $sujet = "Demande de devis";
	  
  $headers = 'From: deleu.work@hotmail.com' . "\r\n" .
    'Reply-To: ' .$email. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  if (mb_send_mail($dest, $sujet, $email_msg, $headers)) 
  {
    echo "<h1>Merci pour votre demande. Nous vous contacterons dans les plus bref délais.</h1>";
  } 
  else 
  {
    echo "<h1>OUPS...Échec de l'envoi de l'email...Veuillez nous envoyer un mail pour votre demande.</h1>";
  }
}
?>
</div>