<?php
    require __DIR__ . "/../../db.php";

    header("Content-Type: application/json");

    echo json_encode($resp);

    $filtroGenere = key_exists("genere", $_GET) ? $_GET["genere"] : "";

    var_dump($_GET);

    $datiFiltrati = $dati;

    if ($filtroCottura) {
        $datiFiltrati = array_filter($datiFiltrati, function($disco) use ($filtroGenere) {
            return $disco["genre"] === $filtroGenere;
        });
    }
?>