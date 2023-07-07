<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 8 PHP Prise de contact</title>
</head>
<body>
    <form action="thankyou_chall9.php" method="post">
        Votre nom: <input type=text name="lname" id="lname" required>
        Votre prénom: <input type=text name="fname" id="fname" required>
        <?php
            //challenge 9
            if (isset($_POST['email'])){
                if (empty($_POST['email'])){
                    if (filter_var($_POST['email'], $FILTER_VALIDATE_EMAIL)){
                        echo "L'email est valide";
                    }
                    else{
                        echo "L'email n'est pas valide";
                    }    
                }
            else{
                echo "Merci de rentrer un mail ";
                }
            };
        ?>
        Votre e-mail: <input type=email name="email" id="email" required>
        Votre numéro de téléphone: <input type=tel name="phone" id="phone" required>
        <fieldset required>
            <legend>Sur quel sujet souhaitez vous qu'on discute ?</legend>
            <div>
                <input type="radio" id="commande" name="subject" value="'Commande pour création de site web'">
                <label for="commande">Commande pour création de site web</label>
            </div>
            <div>
                <input type="radio" id="reseaux" name="subject" value="'Prise en charge de réseaux sociaux'">
                <label for="reseaux">Prise en charge de réseaux sociaux</label>
            </div>
            <div>
                <input type="radio" id="autres" name="subject" value="'Autres sujets'">
                <label for="autres">Autres sujets</label>
            </div>
        </fieldset>
        <label for="message">Votre message:</label>
        <textarea id="message" name="message">
        </textarea>
        <input type="submit" value="Envoyer le formulaire">
    </form>
</body>
</html>