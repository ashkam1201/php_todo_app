<?PHP

function read($csv){

    $file = fopen($csv, 'r');
    while (!feof($file) ) {
        $line[] = fgetcsv($file, 1024);
    }
    fclose($file);
    return $line;
}
// Définir le chemin d'accès au fichier CSV
$csv = 'data.csv';
$csv = read($csv);
    