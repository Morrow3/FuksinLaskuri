<?php
try
{
    $pdo = new PDO("pgsql:host=localhost; dbname=jhauhia", 
            "jhauhia", "xxxx");    
}
 catch (PDOException $e)
 {
     die("Ei saatu yhteyttä: " . $e.getMessage());
 }
?>
