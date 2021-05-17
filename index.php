<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    
    <?php
    // CODICE PHP

    // 1. Creare una variabile con assegnato un testo per popolare un paragrafo.
    $text = " Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita modi provident ea molestiae nesciunt sequi ullam perferendis, eum corrupti ut quasi consequuntur tempora maiores enim porro iure est nobis eos! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed nulla impedit dolorem hic quae, libero iste voluptatibus, vitae placeat saepe ab natus rerum. Officiis vero saepe, laudantium ullam illum numquam? ";

    // 4. Query string - Get - Replace 
    $badword= $_GET['badword'];
    $replace = str_replace($badword, '***', $text);
    ?>

    <header>
        <h1>Welcome!</h1>
    </header>

    <main>

        <!-- 2. Visualizzare a schermo il paragrafo -->
        <p> <?php echo $text; ?> </p>

        <!-- 3. Visualizzare a schermo la lunghezza di testo del paragrafo. -->
        <p>Lunghezza di testo del paragrafo: <?php echo strlen($text); ?> </p>

        <!-- 5. Stampare a schermo il paragrafo con il testo censurato. -->
        <p> <?php echo $replace; ?> </p>

    </main>

</body>
</html>