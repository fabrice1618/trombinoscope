<?php


function html_alert()
{
    $html_alert = '<div class="alert alert-danger" role="alert">Données saisies incorrectes</div>';

    return $html_alert;
}



function html_personnages($personnages)
{
    $html_personnage = <<<END
    <!-- Exemple 1: Leonardo da Vinci de toto -->
            <tr>
                <td>MCDLII</td>
                <td>Leonardo da Vinci</td>
                <td><img src="images/Leonardo.png" alt="Leonardo da Vinci" style="max-width: 100px; max-height: 100px;"></td>
            </tr>
    
<!-- Exemple 2: Ken Thompson -->
            <tr>
                <td>MCMXLIII</td>
                <td>Ken Thompson</td>
                <td><img src="images/Ken_Thompson_02.jpg" alt="Ken Thompson" style="max-width: 100px; max-height: 100px;"></td>
            </tr>
    
            <!-- Exemple 3: Linus Torvalds -->
            <tr>
                <td>MCMLXIX</td>
                <td>Linus Torvalds</td>
                <td><img src="images/Linus_Torvalds_03.jpg" alt="Linus Torvalds" style="max-width: 100px; max-height: 100px;"></td>
            </tr>
END;

    $html_nobody = "<tr><td colspan='3'>Aucun personnage enregistré.</td></tr>";

    if (count($personnages) == 0)
        return $html_nobody;
    else
        return $html_personnage;    
}

function view($alert, $personnages)
{
    $html_personnages = html_personnages($personnages);

    $html_page = <<<END
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trombinoscope</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1>Trombinoscope</h1>

    <!-- Bloc message d'erreur -->
    $alert

    <!-- Formulaire -->
    <h2>Ajouter un personnage</h2>
    <form action="#" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom du personnage :</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="annee_naissance" class="form-label">Année de naissance :</label>
            <input type="number" class="form-control" id="annee_naissance" name="annee_naissance" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image :</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

    <hr>

    <!-- Tableau des personnages -->
    <h2>Personnages enregistrés</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Année de naissance</th>
            <th>Nom</th>
            <th>Image</th>
        </tr>
        </thead>
        <tbody>
        $html_personnages
        </tbody>
    </table>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

END;

    return $html_page;
}