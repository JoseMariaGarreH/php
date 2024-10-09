<?php
$operando1 = $_POST['operando1'] ?? 0;
$operando2 = $_POST['operando2'] ?? 0;

if(isset($_POST['operador'])){
    switch ($_POST['operador']) {
        case 'mas':
            $operador = '+';
            $resultado = $operando1 + $operando2;
            break;
        case 'menos':
            $operador = '-';
            $resultado = $operando1 - $operando2;
            break;
        case 'por':
            $operador = '*';
            $resultado = $operando1 * $operando2;
            break;
        case 'entre':
            $operador = '/';
            $resultado = $operando1 / $operando2;
            break;
        default:
            $operador = '+';
            $resultado = $operando1 + $operando2;
            break;
    }
}else{
    $operador = '+';
    $resultado = $operando1 + $operando2;
}
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
                            <h2>Calculadora B&aacute;sica</h2>
                            <form name="calculator" action="" method="post">
                            <!-- Escribe el resultado como valor de la propiedad value -->
                                <input type="textfield" name="ans" value="<?php echo ($_SERVER["REQUEST_METHOD"] == "POST") ? $operando1." ".$operador." ".$operando2." = ".$resultado : "";?>">
                                <br>
                                <input type="text" name="operando1" value="" placeholder="Operando 1">
                                <select name="operador">
                                    <option value="mas">+</option>
                                    <option value="menos">-</option>
                                    <option value="por">*</option>
                                    <option value="entre">/</option>
                                </select>
                                <input type="text" name="operando2" value="" placeholder="Operando 2">
                                <input type="submit" value="Calcular">
                                <input type="reset" value="Cancelar">
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
