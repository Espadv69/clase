
<?php
include "header/header.php"; include "header/footer.php"
?>

<style>
    <?php
    include "css/style.css"
    ?>
</style>

<h1 >INSCRIPCIÓN DE ESTUDIANTES</h1>

<div class="container-fluid">

    <form action="registrar-curso.php" method="post">

        <strong>Nombre:</strong>
        <input type="text" name="nombre" required>
        <strong>Apellido:</strong>
        <input type="text" name="apellido" required>
        <strong>Pais:</strong>
        <input type="text" name="pais" required>
        <strong>Curso:</strong>
        <input type="text" name="curso" required>
        <strong>Email:</strong>
        <input type="text" name="email" required>
        <strong>Teléfono:</strong>
        <input type="text" name="telefono" required><br>

        <input type="submit" name="enviar" value="Enviar"><br>
        <input type="reset">

    </form>

</div>