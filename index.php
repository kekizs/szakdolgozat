<?php
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

require_once "./app/application.php";
//todo config adatok betöltése config fileból
$app = new Application();
try {
    $app->run();
} catch (Exception $e) {
    //todo error controller action hivás
    echo "<h1><center>" . $e->getMessage() . "</center><h1>";
}
?>
