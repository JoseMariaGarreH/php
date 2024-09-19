<ul>
<li>Mostrar los errores durante la ejecución: <?php echo ini_get('display_errors')?></li>
<li>Tiempo máximo, en segundos, que puede consumir un script para su ejecución. Si lo supera, se aborta: <?php echo ini_get("max_execution_time")?></li>
<li>Límite de memoria que puede usar un script PHP: <?php echo ini_get("memory_limit")?></li>
<li>Tamaño máximo de un fichero para subir: <?php echo ini_get("upload_max_filesize")?></li>
</ul>