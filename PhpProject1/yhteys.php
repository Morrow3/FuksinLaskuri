<?php
try
{
    $pdo = new PDO("pgsql:host=localhost; dbname=jhauhia", 
            "jhauhia", "71f9d229df5a03f");    
}
 catch (PDOException $e)
 {
     die("Ei saatu yhteyttä: " . $e.getMessage());
 }
?>
