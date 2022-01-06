<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body style='background:#fff;'>
        <div id="content">
            <a href='deconnexion.php'><span>Déconnexion</span></a>
            
            <!-- tester si l'utilisateur est connecté -->

            <?php 
    session_start();
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['username'])){
        header('Location:index.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>
        </div>
    </body>
</html>