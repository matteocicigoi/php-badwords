<?php
// argomenti
$paragraph = $_POST['paragraph'];
$word = $_POST['word'];

$paragraph_without_word = str_replace($word, '<span>***</span>', $paragraph);

?>
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

    <main>
        <!-- Primo Paragrafo -->
        <div>
            <h2>Paragrafo originale (<?php echo strlen($paragraph) ?> caratteri):</h2>
                <div class="container">
                    <?php echo $paragraph ?>
                </div>
        </div>
        <!-- Fine Primo Paragrafo -->
        <!-- Secondo Paragrafo -->
        <div>
            <h2>Paragrafo modificato (<?php echo strlen($paragraph_without_word) ?> caratteri):</h2>
                <div class="container">
                    <?php echo $paragraph_without_word ?>
                </div>
        </div>
        <!-- Fine Secondo Paragrafo -->

    </main>
    
</body>
</html>