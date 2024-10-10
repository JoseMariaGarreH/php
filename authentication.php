<?php
$usuario = array(
    'usuario1@cifpcarlos3.es' => 'password1',
    'usuario2@cifpcarlos3.es' => 'password2',
    'usuario3@cifpcarlos3.es' => 'password3',
    'usuario4@cifpcarlos3.es' => 'password4',
    'usuario5@cifpcarlos3.es' => 'password5',
);

$mensaje = array(
    'contraseñasNoCoinciden' => 'Las dos contraseñas no coinciden',
    'registerSuccessfull' => 'Registro realizado correctamente',
    'loginSuccessfull' => 'Sesión iniciada correctamente',
    'loginError' => 'Las credenciales no coinciden con las de ningún usuarios'
);

$mostrarAlerta = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['registerButton']) && $_POST['registerButton'] == 1){
        $emailRegistrado = (isset($_POST['registerEmail']) && !empty($_POST['registerEmail'])) ? $_POST['registerEmail'] : "";    
        $codigoRegistrado = (isset($_POST['registerPassword']) && !empty($_POST['registerPassword'])) ? $_POST['registerPassword'] : "contraseña_vacia";
        $codigoRepetidoRegistrado = (isset($_POST['registerRepeatPassword']) && !empty($_POST['registerRepeatPassword'])) ? $_POST['registerRepeatPassword'] : "contraseña_vacia_repetida";

        if($codigoRegistrado != $codigoRepetidoRegistrado){
            $mostrarAlerta .= $mensaje["contraseñasNoCoinciden"];
        } else {
            $mostrarAlerta .= $mensaje["registerSuccessfull"];
        }
    } else {
        $encontrado = false;
        $loginEmail = (isset($_POST['loginEmail']) && !empty($_POST['loginEmail'])) ? $_POST['loginEmail'] : "";
        $codigoGuardadoRegistrado = (isset($_POST['loginPassword']) && !empty($_POST['loginPassword'])) ? $_POST['loginPassword'] : "";
       
        foreach ($usuario as $email => $password) {
            if($loginEmail == $email && $codigoGuardadoRegistrado == $password){
                $mostrarAlerta .= $mensaje["loginSuccessfull"];
                $encontrado = true;
                break;
            }
        }

        if(!$encontrado){
            $mostrarAlerta .= $mensaje["loginError"];
        }
    }
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
    <!-- vinculo a bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Temas-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <noscript><link rel="stylesheet" href="https://html5up.net/uploads/demos/identity/assets/css/noscript.css" /></noscript>
    <style>
    /* Style the tab */.tab {overflow: hidden;border: 1px solid #ccc;background-color: #f1f1f1;}
    /* Style the buttons that are used to open the tab content */.tab button {background-color: inherit;float: left;border: none;outline: none;cursor: pointer;padding: 14px 16px;transition: 0.3s;}
    /* Change background color of buttons on hover */.tab button:hover {background-color: #ddd;}
    /* Create an active/current tablink class */.tab button.active {background-color: #ccc;}
    /* Style the tab content */.tabcontent {display: none;padding: 6px 12px;border: 1px solid #ccc;border-top: none;}
    </style>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main">
        <header>
            <span class="avatar"><img src=" data:image/png;base64,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" alt="" /></span>
            <div class="alert alert-info"><?php echo $mostrarAlerta?></div>
            <!-- Tab links -->
            <div class="tab">
                <button class="tablinks" onclick="openTab('Register')">Register</button>
                <button class="tablinks" onclick="openTab('Login')">Login</button>
            </div>

            <form name="authentication" action="" method="post"><input type="hidden" name="PHPSESSID" value="2e9e3e3d06eca0c2237fa01262a68034" />
            <!-- Tab content -->
                <div id="Register" class="tabcontent">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input type="text" class="form-control" name="registerEmail" placeholder="email" id="Correo" aria-describedby="sizing-addon1">
                    </div>
                    <br>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="registerPassword" class="form-control" placeholder="******" aria-describedby="sizing-addon1">
                    </div>
                    <br>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="registerRepeatPassword" class="form-control" placeholder="******" aria-describedby="sizing-addon1">
                    </div>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit" name="registerButton" value="1">Register</button>
                </div>

                <div id="Login" class="tabcontent">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input type="text" class="form-control" name="loginEmail" placeholder="email" id="Correo" aria-describedby="sizing-addon1">
                    </div>
                    <br>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="loginPassword" class="form-control" placeholder="******" aria-describedby="sizing-addon1">
                    </div>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit" name="loginButton" value="0">Login</button>
                </div>

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
            <li>© Jane Doe</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </footer>

</div>

<!-- Scripts -->
<script>
    if ('addEventListener' in window) {
        window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
        document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
    }

    function openTab(tabName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(tabName).style.display = "block";
        document.getElementById(tabName).className += " active";
    }

    openTab('Register');
</script>

</body>
</html>
<!-- Curso 24/25 -->
