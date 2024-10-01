<?php $alumnos = ["Pepe", "María", "Carmen", "Juan", "El resto"]; ?>
<?php if(isset($_GET['alumno'])) : ?>
<p>El alumno elegido ha sido: <?php echo $_GET['alumno']?></p>
<?php endif ?>
<ol>
    <?php foreach ($alumnos as $indice => $alumno) : ?>
        <li><a href="alumnos.php?alumno=<?php echo $alumno ?>"><?php echo $alumno ?></a></li>
    <?php endforeach; ?>
</ol>