<?php
$user = "jhauhia";
$database = "jhauhia";
$password = ""

try
{
    $pdo = new PDO("pgsql:host=localhost;dbname=$database", "$user", "$password");
} 
catch (PDOException $e) 
{
    die("VIRHE! " . $e->getMessage());
}
?>
