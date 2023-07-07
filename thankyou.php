<?php
//challenge 9
$fNameErr = $lNameErr = $emailErr = $phoneErr = "";
$fName = $lName = $email = $phone = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
  if (empty($_POST["fname"])) {
    $fNameErr = "Un prénom est requis pour continuer";
  } else {
    $fName = test_input($_POST["fname"]);
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["lname"])) {
      $lNameErr = "Un nom est requis pour continuer";
    } else {
      $lName = test_input($_POST["lname"]);
    }

  if (empty($_POST["email"])) {
    $emailErr = "Un e-mail est requis pour continuer";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Un numéro de téléphone est requis pour continuer";
  } else {
    $phone = test_input($_POST["pone"]);
  }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
echo'<link rel="stylesheet" href="style.css">';
echo "Merci " .$_POST['fname']. ' ' .$_POST['lname']. ' de nous avoir contacté à propos de '.$_POST['sujet'].".\n";
echo "Un de nos conseiller vous contactera soit à l'adresse: ".$_POST['email'].' ou par téléphone au '.$_POST['phone']." dans les plus brefs délais pour traiter votre demande : \n";
echo "\n";
echo "\n";
echo $_POST['message'];
?>