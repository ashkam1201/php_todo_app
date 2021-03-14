<!DOCTYPE html>

<html>

<head>
    <title>import csv</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<h1> EN COURS DE CONSTRUCTION</h1>

    <?php
require "reader.php";

function write($dataCsv){
    //header('Content-Type: text/csv');
    //header('Content-Disposition: attachment; filename="data.csv"');

    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_retype = $_POST['password_retype'];

    $data = array (
        'pseudo' => $pseudo,
        'email' => $email,
        'password' => $password,
        'password_retype' => $password_retype,
    );
    $file = fopen($dataCsv, 'a+');

    foreach ( $data as $line ) {
        $val = explode(",", $line);
        fputcsv($file, $val);
    }

    fclose($file);

}
// Définir le chemin d'accès au fichier CSV
$csv = 'data.csv';
$data = write($csv);
?>
