<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CAS 225 Final</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <h1>Album database</h1>
        </header>
        <main>
            <h2>Enter a new album</h2>
            <p>Enter new album information in the form, then click submit to add that entry to the album information database.</p>
            <form method="post" action=" ">
                <label for="name">*Album Name:</label>
                <input type="text" name="name" id="name" required>
                <label for="band">Band Name:</label>
                <input type="text" name="band" id="band">
                <label for="year">Released:</label>
                <input type="text" name="year" id="year" placeholder="XXXX">
                <label for="genre">Genre:</label>
                <input type="text" name="genre" id="genre">
                <input type="submit">
            </form>
        </main>
        <footer>
            &copy; <?php echo date("Y"); ?>
        </footer>
    </body>
</html>