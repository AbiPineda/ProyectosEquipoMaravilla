
  	<div class="row">
		<div class="col-md-12">
            <form id="FORMULARIO3" name="FORMULARIO3" class="FORMULARIO3" method="post" action="" autocomplete="off" enctype="multipart/form-data">
            <input type="hidden" name="bandera2" id="bandera2" value="no" >
			<div class="panel">
				
				<div class="panel-body">
					 <div class="row">
                        	<div class="col-md-12">
                        		<div class="input-field">
                        			<i class="fa fa-id-badge prefix" aria-hidden="true"></i>
                        			<label for="Titulo">Nombre</label>
                        			<input type="text" id="idNombre" name="nameNombre"  class="text-center validate" required="">
                        		</div>
                        	</div>
                        </div>
                        <div class="row">
                        	<div class="col-md-12">
                        		<div class="input-field">
                        			<i class="fa fa-home prefix" aria-hidden="true"></i>
                        			<label for="Titulo">Direccion</label>
                        			<input type="text" id="idDirecciono" name="nameDireccion"  class="text-center validate" required="">
                        		</div>
                        	</div>
                        </div>
                        <div class="row">
                        	<div class="col-md-12">
                        		<div class="input-field">
                        			<i class="fa fa-mobile prefix" aria-hidden="true"></i>
                        			<label for="Titulo">Telefono</label>
                        			<input type="text" id="idTelefono" name="nameTelefono"  class="text-center validate" >
                        		</div>
                        	</div>
                        </div>
                        <div class="row">
                        	<div class="col-md-12">
                        		<div class="input-field">
                        			<i class="fa fa-at prefix" aria-hidden="true"></i>
                        			<label for="Titulo">Correo</label>
                        			<input type="text" id="idEmail" name="nameEmail"  class="text-center validate" >
                        		</div>
                        	</div>
                        </div>
                        <div class="row">
                        	<div class="col-md-12">
                        		<div class="input-field">
                        			<i class="fa fa-fax prefix" aria-hidden="true"></i>
                        			<label for="Titulo">Fax</label>
                        			<input type="text" id="idFax" name="nameFax"  class="text-center validate" value="Sin Fax">
                        		</div>
                        	</div>
                        </div>
					
				
				</div>
			</div>
                  </form>
		</div>
	</div>

<script>
    $('.FORMULARIO3').attr('autocomplete', 'off');
    document.getElementById('FORMULARIO3').setAttribute('autocomplete', 'off');


</script>
	
<?php 
if ($_REQUEST["bandera2"]=="ok"
    && $_REQUEST["nameDireccion"]!= ""
    && $_REQUEST["nameNombre"] != ""
    && $_REQUEST["nameTelefono"] != ""
    && $_REQUEST["nameEmail"] != ""

    ) {
          
    include_once '../app/Conexion.php';
    include_once '../modelos/Proveedor.php'; 
    include_once '../repositorios/repositorio_proveedor.php';   

    
    Conexion::abrir_conexion(); 

    $proveedor= new Proveedor();
   
   
   
    $proveedor->setNombre($_REQUEST["nameNombre"]);
    $proveedor->setDireccion($_REQUEST["nameDireccion"]);
    $proveedor->setTelefono($_REQUEST["nameTelefono"]);
    $proveedor->setCorreo($_REQUEST["nameEmail"]);
    $proveedor->setFax($_REQUEST["nameFax"]);
    
     
    Repositorio_proveedor::insertar_proveedor(Conexion::obtener_conexion(), $proveedor);
    Conexion::cerrar_conexion();
    
}
?>