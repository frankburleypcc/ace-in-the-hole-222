<?php
/*This is the UN and password for xampp*/

/*try
{
    $pdo = new PDO('mysql:host=localhost;dbname=ace_in_the_hole', 'music_user', 'mypassword');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include 'error.html.php';
    exit();
}*/


/*this is the UN and password for the server database.*/
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=frankbur_ace_in_the_hole', 'frankbur_cas222', 'Myp4ssw0rd');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include 'error.html.php';
    exit();
}