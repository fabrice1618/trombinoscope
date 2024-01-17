<?php

define("QUERY_INSERT", 'INSERT INTO personnages (nom, annee_naissance, image) VALUES (?, ?, ?)');
define("QUERY_SELECT", 'SELECT nom, annee_naissance, image FROM personnages');

function personnages_create($nom, $annee_naissance, $image)
{
    // Enregistrez $encoded_image et le chiffre romain dans votre base de données
    $requete = $bdd->prepare(QUERY_INSERT);
    if (!$requete->execute([$nom, $annee_naissance, $image])) {
        // Affichez les informations sur l'erreur
        $errorInfo = $requete->errorInfo();
        echo "Erreur d'exécution de la requête : " . $errorInfo[2];
    }
}

function personnages_index()
{
    $requete = $bdd->query(QUERY_SELECT);
    $personnages = $requete->fetchAll(PDO::FETCH_ASSOC);

    return $personnages;
}