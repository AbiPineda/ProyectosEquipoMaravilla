<?php
	include_once '../app/Conexion.php';
    include_once '../modelos/Libros.php';
    include_once '../repositorios/respositorio_libros.php';
    Conexion::abrir_conexion();
    $listado=Repositorio_libros::BuscarLibro(Conexion::obtener_conexion(),$_POST['libro']);
    $numero=$_POST['numero'];
    
    if(count($listado)===0){
        echo '5';
    }
    else{
     foreach ($listado as $fila) {
    	?>
		<script type="text/javascript">

		document.getElementById('titulo<?php echo $numero ?>').innerHTML =  "<?php echo $fila['titulo'] ?>";
        document.getElementById('autor<?php echo $numero ?>').innerHTML = "<?php echo $fila['autor'] ?>";
        document.getElementById('fecha_pub<?php echo $numero ?>').innerHTML = "<?php echo date_format(date_create($fila['fecha_publicacion']), 'd-m-Y') ?>";
        document.getElementById('fotLib<?php echo $numero ?>').setAttribute("src", "../fotoLibros/<?php echo $fila['foto'] ?>")

	//	document.getElementById('titulo<?php echo $numero ?>').value = <?php echo $fila['titulo'] ?>;
     ////   document.getElementById('autor<?php echo $numero ?>').value = <?php echo $fila[2] ?>;
      // document.getElementById('genero<?php echo $numero ?>').value = "Epopeya";
     //   document.getElementById('fecha_pub<?php echo $numero ?>').value = <?php echo date_format(date_create($fila['fecha_publicacion']), 'd-m-Y') ?>;
		</script>


    	<?php
    }
    }

 ?>