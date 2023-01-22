<!DOCTYPE html>
<html>
    <head>
        <title>
            Formulaire SIMPLON
        </title>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="style/style.css">
        <link rel="shortcut icon" href="favicon.ico.png" type="image/x-icon">
    </head>
    <body>
        
        <div class="conteneur-logo"><img class="logo" src="images/Logo\logo-SIMPLON.png" alt=""></div>
        <form action="traitement.php" method="post">
            <div class="couleur-title"><p>REMPLISSEZ LE FORMULAIRE POUR VOUS ENREGISTRER</p></div>
        <fieldset>
        <div>
            <label for="name">Nom du participant&nbsp; :</label>
            <input type="text" id="nom" name="NOM" required>
        </div>
        <div>
            <label for="name">Prénom du participant&nbsp; :</label>
            <input type="text" id="prenom" name="PRENOM" required>
        </div>
        <div>
            <label for="name">contact du participant &nbsp;:<input type="number" name="NUMERO" id="contacter" required></label>
        </div>
        <div>
            <label for="mail">Adresse e-mail&nbsp;:</label>
            <input type="email" id="le-mail" name="ADRESSE" required>
        </div>
       
          <button type="submit" value="enregistrer">S'enregistrer</button>

    </fieldset>
</form>

<a href="liste.php">Voir les participants</a>
    </body>
</html>