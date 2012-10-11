<?php
$user = "jhauhia";
$database = "jhauhia";
$password = "571f9d229df5a03f";

try
{
    $pdo = new PDO("pgsql:host=localhost;dbname=$database", "$user", "$password");
} 
catch (PDOException $e) 
{
    die("VIRHE! " . $e->getMessage());
}
?>
