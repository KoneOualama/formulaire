<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="for.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <form action="traitement/insert.php" method="POST">
                <h1>INSCRIPTION</h1>
                <label><b>NOM</b></label>
                <input type="text" placeholder="Entrer votre nom" name="nom" required>

                <label><b>PRENOM</b></label>
                <input type="text" placeholder="Entrer votre prenom" name="prenom" required>

                <label><b>NIVEAU D'ETUDE</b></label>
                <input type="text" placeholder="Entrer le niveau" name="niveau" required>

                <label><b>EMAIL</b></label>
                <input type="text" placeholder="Entrer votre Email" name="email" required>

                <label><b>MOT DE PASS</b></label>
                <input type="password" placeholder="Entrer votre password" name="pwd" required>

                <label><b>CONFIRMATION</b></label>
                <input type="password" placeholder="Confirmation" name="verification" required>

                <input type="submit" id='submit' value='INSCRIPTION' >
                <a href="login.php" class="joli">CONNEXION</a>
                
                

        </form>
    </div>
</body>
</html>