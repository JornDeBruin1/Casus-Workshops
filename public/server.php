<?php
session_start();
require_once('../src/users.php');
$klanten = new Klanten();

// initialize variables
$voornaam = '';
$achternaam = '';
$tussenvoegsel = '';
$omschrijving = '';
$email = '';
$telefoon = '';
$adres = '';
$datum = '';
$prijs = '';
$id = 0;
$update = false;

if (isset($_POST['save'])) {
    $voornaam = $_POST['vnaam'];
    $achternaam = $_POST['anaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $email = $_POST['email'];
    $telefoon = $_POST['telefoon'];
    $adres = $_POST['adres'];
    $omschrijving = $_POST['omschrijving'];
    $prijs = $_POST['prijs'];
    $datum = $_POST['datum'];

    $Klanten->createKlant($voornaam, $achternaam, $tussenvoegsel, $email,  $telefoon, $adres, $omschrijving, $prijs, $datum);

    $_SESSION['message'] = "Klant saved";
    header('overzicht.php');
}

if (isset($_POST['update'])) {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    $id = $_POST['id'];
    $voornaam = $_POST['vnaam'];
    $achternaam = $_POST['anaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $email = $_POST['email'];
    $telefoon = $_POST['telefoon'];
    $adres = $_POST['adres'];
    $omschrijving = $_POST['omschrijving'];
    $prijs = $_POST['prijs'];
    $datum = $_POST['datum'];

    $klanten->updateKlant($id, $voornaam, $achternaam, $tussenvoegsel, $email,  $telefoon, $adres, $omschrijving, $prijs, $datum);

    $_SESSION['message'] = "Klant updated!";
    header('location: klantToevoegen.php');
    }
}

if (isset($_GET['del'])) {
    $id = $_GET['del'];

    $klanten->deleteKlant($id);

    $_SESSION['message'] = "klant deleted!";
    header('location: overzicht.php');
}