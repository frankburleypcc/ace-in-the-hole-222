<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ace In The Hole</title>
    </head>
    <body>
        <header>
            <h1>Ace In The Hole Multisport Event</h1>
        </header>
        <main>
            <h2>Success!</h2>
            <p>You successfully registered your info to the database. See you at the event!</p>
            <p>Click <a href="http://frankburleyweb.com/ace-in-the-hole-222/home/">here</a> to go back to the home page.</p>
            <p>
                Event Name Saturday: <?php echo htmlspecialchars($eventName, ENT_QUOTES, 'UTF-8'); ?><br>
                Event Name Sunday: <?php echo htmlspecialchars($eventSunName, ENT_QUOTES, 'UTF-8'); ?><br>
                Your Name: <?php echo htmlspecialchars($persName, ENT_QUOTES, 'UTF-8'); ?><br>
                Your Phone: <?php echo htmlspecialchars($persNumber, ENT_QUOTES, 'UTF-8'); ?><br>
                Your Age: <?php echo htmlspecialchars($persAge, ENT_QUOTES, 'UTF-8'); ?><br>
                
            </p>
        </main>
        <footer>
            &copy; <?php echo date("Y"); ?>

        </footer>
    </body>
</html>