<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 8 PHP Prise de contact</title>
</head>
<body>
    <form action="thankyou.php" method="POST">
        <label for="lname">Votre nom: </label>
        <input type=text name="lname" id="lname" required>
        <label for="fname">Votre prénom: </label>
        <input type=text name="fname" id="fname" required>
        <label for="email">Votre e-mail: </label>
        <input type=email name="email" id="email" required>
        <label for="phone">Votre numéro de téléphone: </label>
        <input type=tel name="phone" id="phone" required>
        <fieldset>
            <legend>Sur quel sujet souhaitez vous qu'on discute ?</legend>
            <div>
                <input type="radio" id="commande" value="'Commande pour création de site web'" name="sujet" checked>
                <label for="commande">Commande pour création de site web</label>
            </div>
            <div>
                <input type="radio" id="reseaux" value="'Prise en charge de réseaux sociaux'" name="sujet">
                <label for="reseaux">Prise en charge de réseaux sociaux</label>
            </div>
            <div>
                <input type="radio" id="autres" value="'Autres sujets'" name="sujet">
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