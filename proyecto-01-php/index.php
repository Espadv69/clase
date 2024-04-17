<!doctype html>
<html lang="en">
    <head>
        <title>base datos</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

    <div
        class="container"
    >

        <?php

        $name = $email = $coment = $website = $option = "";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = datos_php($_POST["name"]);
            $email= datos_php($_POST["email"]);
            $coment = datos_php($_POST["coment"]);
            $website = datos_php($_POST["website"]);
            $option = datos_php($_POST["option"]);
        }

        function datos_php($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <strong>NOMBRE:</strong><br>
        <input type="text" name="name"><br>
        <strong>EMAIL:</strong><br>
        <input type="text" name="email"><br>
        <strong>WEBSITE:</strong><br>
        <input type="url" name="website"><br>
        <strong>COMENTARIO:</strong><br>
        <textarea name="coment" id="" rows="3"></textarea><br>
        <strong>ESTUDIOS REALIZADOS:</strong><br>
        <input type="radio" name="option" value="bachillerato"><strong> Bachillerato</strong><br>
        <input type="radio" name="option" value="superior"><strong> Superior</strong> <br>
        <input type="radio" name="option" value="doctorado"><strong> Doctorado</strong> <br><br>
        <input type="submit" name="submit" value="enviar">

        </form>

        <?php
        echo "<br>" . $name . "<br>";
        echo $email . "<br>";
        echo $coment . "<br>";
        echo $website . "<br>";
        echo $option . "<br>";
        ?>

    </div>
    










        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
