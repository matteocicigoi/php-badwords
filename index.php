<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <h1>PHP Badwords</h1>
    <!-- Form -->
    <form action="text.php" method="POST">
        <label for="paragraph">Inserisci un paragrafo</label>
        <textarea name="paragraph" id="paragraph" rows="7"></textarea>
        <label for="word">Inserisci una parola</label>
        <input type="text" id="word" name="word">
        <button>Invia</button>
    </form>
    <!-- Fine Form -->
</body>
</html>