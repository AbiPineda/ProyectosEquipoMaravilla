<script type="text/javascript">

<?php
include_once '../app/Conexion.php';
include_once '../modelos/Activo.php';
include_once '../modelos/Administrador.inc.php';
include_once '../repositorios/repositorio_activo.php';
include_once '../repositorios/repositorio_categoria.php';
include_once '../repositorios/repositorio_administrador.inc.php';
Conexion::abrir_conexion();

$lista = $_POST['lista'];


$listado = Repositorio_activo::obtener_activo(Conexion::obtener_conexion(), $_POST['libro']);
$tipo = $_POST['libro'];
//$numero=$_POST['numero'];
foreach ($listado as $fila) {
    ?>

        var codigo = "<?php echo $fila['codigo_activo']; ?>";
        var estadi = "<?php echo $fila['estado']; ?>";
        var mostrarMensaje = "<?php echo $lista; ?>";


        if (estadi == "1") {
            var pass = doSearch(codigo);
            if (pass) {

                var tipo = "<?php echo Repositorio_categoria::obtener_categoria(Conexion::obtener_conexion(), $fila['codigo_tipo']); ?>";
                var encargado = "<?php echo Repositorio_administrador::obtener_administrador(Conexion::obtener_conexion(), $fila['codigo_administrador'])->getNombre() . " " . Repositorio_administrador::obtener_administrador(Conexion::obtener_conexion(), $fila['codigo_administrador'])->getApellido(); ?>";
                var linea = "";
                linea = linea.concat(
                        "<tr>",
                        '<td><input type="button" class="borrar_activo_tabla_prestamo btn-sm btn-danger" value="-"/>&nbsp;&nbsp; <input type="hidden" name="codsActs[]" value="' + codigo + '"> ' + codigo + "</td>",
                        "<td><input type='hidden' name='tipoActs[]' value='" + tipo  + "'>" + tipo + "</td>",
                        "<td>" + encargado + "</td>",
                        "</tr>"
                        );

                $("table#tabla_activo_prestamo tbody").append(linea);

            } else {
                 
                swal("Importane!", codigo + " ya fue ingresado", "warning")
                 
            }
            //para no ingresar los mismos activo a la tabla
        }
        
            if (estadi == "2") {
                swal({
                    title: "Importane!",
                    text: codigo + " esta en Prestamo",
                    type: "warning",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                });
                //swal("Importane!", codigo + " esta en Prestamo", "warning")
            }
            if (estadi == "3") {
             swal({
                    title: "Importane!",
                    text: codigo + " esta en dañado",
                    type: "warning",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                });
                //swal("Importane!", codigo + " esta dañado", "warning")
            }
            if (estadi == "4") { //$('#mensaje').val(codigo+" esta en Prestamo");
                swal("Importane!", codigo + " esta extraviado", "warning")
            }
            if (estadi == "0") { //$('#mensaje').val(codigo+" esta en Prestamo");
                swal("Importane!", codigo + " ya fue dado de baja", "warning")
            }
        
        function doSearch(codigo)
        {

            var pso = "true";
            var tableReg = document.getElementById('tabla_activo_prestamo');
            var searchText = codigo;
            var cellsOfRow = "";
            var found = false;
            var compareWith = "";


            // Recorremos todas las filas con contenido de la tabla
            for (var i = 1; i < tableReg.rows.length; i++)
            {
                cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
                found = false;
                // Recorremos todas las celdas
                for (var j = 0; j < cellsOfRow.length && !found; j++)
                {

                    compareWith = cellsOfRow[j].innerHTML;

                    // Buscamos el texto en el contenido de la celda
                    if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1))
                    {
                        found = true;
                    }
                }
                if (found)
                {
                    pso = false;//tableReg.rows[i].style.display = '';
                } else {
                    // si no ha encontrado ninguna coincidencia, esconde la
                    // fila de la tabla
                    //tableReg.rows[i].style.display = 'none';
                    pso = true;
                }
            }
            return pso;
        }
    </script>  

    <?php
}
