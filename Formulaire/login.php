<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
</head>
<body>
<div id="container">
            <!-- zone de connexion -->
            
            <form action="formulaire/traitement/verif-connexion.php" method="POST">
            
                <h1>Connexion</h1>
                
                <label><b>NOM D'UTILISATEUR</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>ME DE PASSE</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required><br><br>
                <a href="admin.php" class="btn btn-warning" style="width : 200px; padding: 10px; background:orange;">CONNEXION</a>
            </form>
        </div>
</body>
</html>