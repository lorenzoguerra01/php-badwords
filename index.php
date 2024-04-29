<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- emta per media query  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
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
        <h1>PHP Bad Word</h1>
        <div class="card ms_card">
            <form action="badword.php" method="POST">
                <h2 class=" p-3 " >Paragraph</h2>
                <input type="textarea" name="paragraph">
                <h2 class=" p-3 ">Badword</h2>
                <input type="text" name="badWord">
                <br>
                <button type="submit" class=" m-3 ">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>