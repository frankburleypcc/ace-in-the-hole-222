<?php
/**
 * Created by PhpStorm, brackets.
 * User: FrankBurley
 * Date: 8/4/17
 * Time: 1:12 PM
 */
if (isset($_POST['event'])) {
    $eventName = $_POST['event'];
    $eventPosition = $_POST['position'];
    $persName = $_POST['myName'];
    $persEmail = $_POST['myEmail'];
    $persNumber = $_POST['myNumber'];
    $persQuestion = $_POST['myQuestion'];

//this checks if there has been a connection to the database
    include ('../includes/db.inc.php');
    
    /*try {
        $pdo = new PDO('mysql:host=localhost;dbname=ace_in_the_hole', 'music_user', 'mypassword');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');

    } catch (PDOException $e) {
        $error = 'Unable to connect to the database server.';
        include 'error.html.php';
        exit();
    }*/
    
    
//this inserts the data into the table "contact" of the //"ace_in_the_hole" DB
    try {
        $sql = 'INSERT INTO contact SET
        event = :event,
        position = :position,
        name = :name,
        email = :email,
        myNumber = :myNumber,
        text = :text';
        $s = $pdo->prepare($sql);
        $s->bindValue(':event', $eventName);
        $s->bindValue(':position', $eventPosition);
        $s->bindValue(':name', $persName);
        $s->bindValue(':email', $persEmail);
        $s->bindValue(':myNumber', $persNumber);
        $s->bindValue(':text', $persQuestion);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Error adding submitted author.';
        include 'error.html.php';
        exit();
    }

   include('success.html.php');

} else {
    include('contact.html.php');
}