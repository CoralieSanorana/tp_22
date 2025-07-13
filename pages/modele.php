<?php 
    require_once("../inc/fonction.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Département</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="modele.php?npage=index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modele.php?npage=liste.php">Liste des employés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modele.php?npage=formulaire.php">Recherche multicritère</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <main>
        <?php 
            if(isset($_GET['npage'])){
                $npage = $_GET['npage'];
                include("$npage");
            } else if(isset($_POST['npage'])){
                $npage = $_POST['npage'];
                include("$npage");
            } else if(isset($_SESSION['npage'])){
                $npage = $_SESSION['npage'];
                unset($_SESSION['npage']);
                include("$npage");
            } else{
                include("index.php");
            }
        ?>
    </main>

    <footer>
        <div class="container text-center">
            <p class="text-muted">© 2025 Votre Entreprise. Tous droits réservés.</p>
            <p class="text-muted">Conçu avec passion par notre équipe: ETU004199 - ETU004250</p>
        </div>
    </footer>

</body>
</html>