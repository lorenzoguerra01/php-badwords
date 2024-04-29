<?php
    $paragraph = $_POST['paragraph'];
    $badWord = $_POST['badWord'];
    $censoredParagraph = str_replace($badWord, '***', $paragraph);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- emta per media query  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- collegamento font awsome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- collegamento my-css  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- collegamento bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- collegamento bootstrap-js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
        defer></script>
    <!-- collegamento vue-js  -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- collegamento my-js  -->
    <script src="js/script.js" type="module" defer></script>
    <!-- collegamento libreria luxon  -->
    <script src="https://cdn.jsdelivr.net/npm/luxon@3.4.4/build/global/luxon.min.js"></script>
    <!-- collegamento google font  -->

</head>

<body>
    <div id="app" class="ms_screen text-center">
        <h1>PHP Saluta</h1>
        <div class="card ms_card">
            <h2>Paragraph</h2>
            <?php echo "<p>$paragraph </p> Lenght: " . strlen($paragraph) . " characters"; ?>
            <h2>Censored Paragraph</h2>
            <?php echo "<p>$censoredParagraph</p> Lenght: " . strlen($censoredParagraph) . " characters"; ?>
            <a href="index.php" class="p-3">Back</a>
        </div>
    </div>
</body>

</html>