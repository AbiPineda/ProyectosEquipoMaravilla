<?php
$titulo1="Inicio";
include_once('../plantillas/cabecera.php');
include_once('../plantillas/menu.php');

?>
</nav>
<?php
echo $_SESSION["user"];
?>

<?php
include_once('../plantillas/pie_de_pagina.php');

?>