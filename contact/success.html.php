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
            <p>You successfully added your info to the database. We will reply soon!</p>
            <p>Click <a href="http://frankburleyweb.com/ace-in-the-hole-222/">here</a> to go back to the home page.</p>
            <p>
                Event Name: <?php echo htmlspecialchars($eventName, ENT_QUOTES, 'UTF-8'); ?><br>
                Your Name: <?php echo htmlspecialchars($persName, ENT_QUOTES, 'UTF-8'); ?><br>
                Your Email: <?php echo htmlspecialchars($persEmail, ENT_QUOTES, 'UTF-8'); ?><br>
                Your Comment: <?php echo htmlspecialchars($persQuestion, ENT_QUOTES, 'UTF-8'); ?><br>
            </p>
        </main>
        <footer>
            &copy; <?php echo date("Y"); ?>

        </footer>
    </body>
</html>