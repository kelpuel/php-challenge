<?php
echo'<link rel="stylesheet" href="style.css">';
echo "Merci " .$_POST['fname']. ' ' .$_POST['lname']. ' de nous avoir contacté à propos de '.$_POST['subject'].".\n";
echo "Un de nos conseiller vous contactera soit à l'adresse: ".$_POST['email'].' ou par téléphone au '.$_POST['phone']." dans les plus brefs délais pour traiter votre demande : \n";
?>
<br><br>
<?php
echo $_POST['message'];
?>