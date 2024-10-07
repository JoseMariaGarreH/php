<?php
$colores = array(
    'IndianRed',
    'LightCoral',
    'Salmon',
    'DarkSalmon',
    'LightSalmon',
    'Crimson',
    'Red',
    'FireBrick',
    'DarkRed',
    'Pink',
    'LightPink',
    'HotPink',
    'DeepPink',
    'MediumVioletRed',
    'PaleVioletRed',
    'LightSalmon'
);

$color_seleccionado = (isset($_GET['color']) && !empty($_GET['color'] && in_array($_GET['color'],$colores))) ? $_GET['color'] : "Black";
?>
<!DOCTYPE HTML>
<!--
    Identity by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Identity by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="Referrer" content="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://html5up.net/uploads/demos/identity/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="https://html5up.net/uploads/demos/identity/assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main">
        <header>
            <span class="avatar"><img src="https://es.calcuworld.com/wp-content/uploads/sites/2/2013/02/matematicas-150x150.png" alt="" /></span>
            <h2>Elecci&oacute;n de color</h2>
            <form name="calculator">
                <!-- Escribe el resultado como valor de la propiedad background-color -->
                <input type="textfield" name="ans" value=""  style="background-color:<?php echo $color_seleccionado?>">
                <br>
                <?php $i = 0; foreach($colores as $color) : ?>
                    <a href="?color=<?php echo $color?>">
                        <input type="button" value="" style="background-color:<?php echo $color?>">
                    </a>
                    <?php if(++$i % 4 == 0) :?>
                        <br>
                    <?php endif; ?>
                <?php endforeach; ?>
            </form>

        </header>

        <footer>
            <ul class="icons">
            </ul>
        </footer>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <ul class="copyright">
            <li>&copy; Jane Doe</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </footer>

</div>

<!-- Scripts -->
<script>
    if ('addEventListener' in window) {
        window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
        document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
    }
</script>

</body>
</html>
<!-- Documento HTML-->
