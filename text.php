<?php
// argomenti
$paragraph = $_POST['paragraph'];
$word = $_POST['word'];

$paragraph_without_word = str_replace($word, '***', $paragraph);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    
    <h1>Badwords</h1>

    <h2>Paragrafo originale: <?php echo $paragraph ?></h2>
    <h3>Lunghezza: <?php echo strlen($paragraph) ?></h3>

    <h2>Paragrafo modificato: <?php echo $paragraph_without_word ?></h2>
    <h3>Lunghezza: <?php echo strlen($paragraph_without_word) ?></h3>
    
</body>
</html>