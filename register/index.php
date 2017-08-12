<?php
/**
 * Created by PhpStorm, brackets.
 * User: FrankBurley
 * Date: 8/5/17
 * Time: 3:12 PM
 */
if (isset($_POST['event'])) {
    $eventName = $_POST['event'];
    $eventSunName = $_POST['eventSun'];
    $shirtSize = $_POST['shirtSize'];
    $persName = $_POST['myName'];
    $persEmail = $_POST['myEmail'];
    $persNumber = $_POST['myNumber'];
    $persAge = $_POST['age'];
    $liability = $_POST['liabilityCheck'];
    //$persEmail = $_POST['myEmail'];
    //$persQuestion = $_POST['myQuestion'];

//this checks if there has been a connection to the database
    include ('../includes/db.inc.php');
    
   /* try {
        $pdo = new PDO('mysql:host=localhost;dbname=ace_in_the_hole', 'music_user', 'mypassword');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');

    } catch (PDOException $e) {
        $error = 'Unable to connect to the database server.';
        include 'error.html.php';
        exit();
    }*/
    
    
//this inserts the data into the table "register" of the //"ace_in_the_hole" DB
    try {
        $sql = 'INSERT INTO register SET
        event = :event,
        eventSun = :eventSun,
        shirtSize = :shirtSize,
        myNumber = :myNumber,
        email = :email,
        age = :age,
        name = :name,
        liabilityCheck = :liabilityCheck';
        $s = $pdo->prepare($sql);
        $s->bindValue(':event', $eventName);
        $s->bindValue(':eventSun', $eventSunName);
        $s->bindValue(':shirtSize', $shirtSize);
        $s->bindValue(':name', $persName);
        $s->bindValue(':email', $persEmail);
        $s->bindValue(':myNumber', $persNumber);
        $s->bindValue(':age', $persAge);
        $s->bindValue(':liabilityCheck', $liability);
        //$s->bindValue(':email', $persEmail);
        //$s->bindValue(':text', $persQuestion);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Error adding submitted author.';
        include 'error.html.php';
        exit();
    }

   include('success.html.php');

} else {
    include('register.html.php');
}