<?php

session_start();

$nom = "Vanessa";
$prenom = "Nectoux";
$age = "30";

if (isset($_POST['nom'], $_POST['prenom'], $_POST['age'])){
    $nom = strip_tags(trim($_POST['nom']));
    $prenom = strip_tags(trim($_POST['prenom']));
    $age = strip_tags(trim($_POST['age']));
}

echo "Bonjour $nom $prenom $age";