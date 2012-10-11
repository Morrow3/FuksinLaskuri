<?php
$user = "jhauhia";
$database = "jhauhia";
$password = "571f9d229df5a03f";

try
{
<<<<<<< HEAD
    $pdo = new PDO("pgsql:host=localhost;dbname=$database", "$user", "$password");
} 
catch (PDOException $e) 
{
    die("VIRHE! " . $e->getMessage());
=======
    $pdo = new PDO("pgsql:host=localhost; dbname=jhauhia", 
            "jhauhia", "xxxx");    
<<<<<<< HEAD
>>>>>>> branch 'master' of https://github.com/Morrow3/FuksinLaskuri.git
=======
>>>>>>> e7a00e73aefb880d79a4a3792e0aeacd662bb348
}
//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
