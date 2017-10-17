

<!--formulario usuario-->
<div class="container">
    <form id="FORMULARIO1" class="FORMULARIO1" method="post" class="form-horizontal" action="" autocomplete="off">
        <input type="hidden" name="bandera1" id="bandera1">
        <div class="row" name="filaForm">
            <div class="panel" name="regisroAct">
                <div class="panel-heading text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Registro De Activo Fijo</h3>
                        </div>
                    </div>
                </div>

                <div class=" text-center panel-body">
                    <div class="row">
                        <div class="col m1"></div>
                        <!--seccion del combo para encargado  -->
                        <div class="input-field col m1">
                            <div class="input-field col m1">
                                <i class="fa fa-user-circle prefix"></i>   
                            </div>
                        </div>
                        <div class="input-field col m3">
                            <select required="" name="admin" id="admin" >
                                <option value="0" disabled selected>Seleccione Encargado</option>
                                <?php
                                Conexion::abrir_conexion();
                                $lista_admnistradores = Repositorio_administrador::lista_administradores(Conexion::obtener_conexion(),'pereez02');
                                //echo '<script language="javascript">alert("juas");</script>'; 
                                //foreach ($lista_admnistradores as $lista) {
                                   // echo"<option value='" . $lista->getCodigo_administrador() . "'>" . $lista->getNombre() . " " . $lista->getApellido() . "</option>";
                               // }
                                ?>
                            </select>
                        </div>
                        <div class="col m1"></div>
                        <!-- termona el combo de encargado   -->
                        <div class="input-field col m4">
                            <i class="fa fa-calendar prefix"></i> 
                            <input type="date" id="fecha_pub" name="fecha_pub" class="datepicker" required value="<?php echo date("d-m-Y"); ?>" > 
                            <label for="idNombre" class="col-sm-4 control-labe" style="font-size: 16">Fecha de Adquisición</label>
                        </div>

                    </div>
                    <div class="row" >
                        <div class="col m1"></div>
                        <!--seccion del combo para categoria  -->
                        <div class="input-field col m1">
                            <div class="input-field col m1">
                                <i class="fa fa-sitemap prefix"></i>   
                            </div>
                        </div>
                        <div class="input-field col m2" > 
                            <select name="selectCat" id="selectCat" class="selectCat" required="">
                                <option value="0" disabled selected>Seleccione Categoria</option>
                                <?php
                                include'select_categoria.php';
                                ?>
                            </select>

                        </div>
                        <div class="input-field col m1">
                            <input type="text" name="cantidad" placeholder="Cantidad">
                        </div>
                        <div class="input-field col m1">
                            <a class="btn btn_primary"  target="_blank" onclick="nuevaCat(1)"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span></a>
                        </div>
                        <!-- termona el combo de categoria   -->
                        <div class="input-field col m5">
                            <i class="fa fa-usd prefix"></i> 
                            <input type="text" id="precioUnitario" name="precioUnitario" class="text-center validate" required="">
                            <label for="precioUnitario">Precio Unitario <small></small> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m1"></div>
                        <!--seccion del combo para proveedor  -->
                        <div class="input-field col m1">
                            <div class="input-field col m1">
                                <i class="fa fa-truck prefix"></i>   
                            </div>
                        </div>
                        <div class="input-field col m3">
                            <select required="" name="selectPro" id="selectCPro" class="selectPro">
                                <option value="0" disabled selected>Seleccione Proveedor</option>
                                <?php
                                include'select_proveedor.php';
                                ?>
                            </select>
                        </div>
                        <div class="input-field col m1">
                            <a class="btn btn_primary"  target="_blank" onclick="nuevaCat(2)"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span></a>
                        </div>

                        <!-- termina el combo de proveedor   -->
                        <!-- foto  -->
                        <div class="col m6">
                            <div class="file-field input-field col m10">
                                <div class="btn btn-primary">
                                    <span class="glyphicon glyphicon-picture" aria="hidden"></span> Foto                          
                                    <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" name="nameFoto" id="idFoto">
                                    <input type="file" id="files" name="files[]">
                                </div>
                            </div>
                        </div>
                        <!-- termina foto -->

                    </div>
                    <div class="row">
                        <output id="list"></output>                
                    </div>
                    <div class="row"><!--  panel de Caracteristicas   -->

                        <div class="col m1"></div><!--  para dejar espacio en los lados   -->
                        <div class="col-md-10"> <!--  div para centralizar      -->
                            <div class="panel-group" id="accordion">
                                <div class="panel" name="caracteristicas">
                                    <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#caracteristicas">Detalles  </a></div>
                                    <div id="caracteristicas" class="panel-collapse collapse ">
                                        <div class="panel-body">                                            

                                            <div class="row">

                                                <div class="input-field col m5">
                                                    <i class="fa fa-barcode prefix"></i> 
                                                    <input type="text" id="nserie" name="nserie" class="text-center validate" required="" value="Sin Numero de Serie" onclick = "if (this.value == 'Sin Numero de Serie')
                                                                this.value = ''" onblur="if (this.value == '')
                                                                            this.value = 'Sin Numero de Serie'">
                                                    <label for="precioUnitario">Numero de Serie <small></small> </label>
                                                </div>
                                                <div class="col m1"></div>

                                                <div class="input-field col m5">
                                                    <i class="fa fa-adjust prefix"></i> 
                                                    <input type="text" id="color" name="color" class="text-center validate" required="" >
                                                    <label for="idEmail">Color<small></small> </label>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="input-field col m5">
                                                    <i class="fa fa-registered prefix"></i> 
                                                    <input type="text" id="marca" name="marca" class="text-center validate" required="" value="Sin Marca" onclick = "if (this.value == 'Sin Marca')
                                                                this.value = ''" onblur="if (this.value == '')
                                                                            this.value = 'Sin Marca'">
                                                    <label for="precioUnitario">Marca <small></small> </label>
                                                </div>
                                                <div class="col m1"></div>

                                                <div class="input-field col m5">
                                                    <i class="fa fa-windows prefix"></i> 
                                                    <input type="text" id="so" name="so" class="text-center validate" required="" value="Sin Sistema Operativo" onclick = "if (this.value == 'Sin Sistema Operativo')
                                                                this.value = ''" onblur="if (this.value == '')
                                                                            this.value = 'Sin Sistema Operativo'">
                                                    <label for="idEmail">Sistema Operativo <small></small> </label>
                                                </div>

                                            </div>
                                            <div class="row">

                                                <div class="input-field col m5">
                                                    <i class="fa fa-crop prefix"></i> 
                                                    <input type="text" id="dimensiones" name="dimensiones" class="text-center validate" required="" value="Sin Dimenciones" onclick = "if (this.value == 'Sin Dimenciones')
                                                                this.value = ''" onblur="if (this.value == '')
                                                                            this.value = 'Sin Dimenciones'">
                                                    <label for="dimensines">Dimensiones <small></small> </label>
                                                </div>
                                                <div class="col m1"></div>

                                                <div class="input-field col m5">
                                                    <i class="fa fa-circle-o-notch prefix"></i> 
                                                    <input type="text" id="ram" name="ram" class="text-center validate" required="" value="Sin Memoria Ram" onclick = "if (this.value == 'Sin Memoria Ram')
                                                                this.value = ''" onblur="if (this.value == '')
                                                                            this.value = 'Sin Memoria Ram'">
                                                    <label for="dimensines">Memoria Ram <small></small> </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col m5">
                                                    <i class="fa fa-laptop prefix"></i> 
                                                    <input type="text" id="modelo" name="modelo" class="text-center validate" required="" value="Sin Modelo" onclick = "if (this.value == 'Sin Modelo')
                                                                this.value = ''" onblur="if (this.value == '')
                                                                            this.value = 'Sin Modelo'">
                                                    <label for="idEmail">Modelo<small></small> </label>
                                                </div>


                                                <div class="col m1"></div>
                                                <div class="input-field col m5">
                                                    <i class="fa fa-hdd-o prefix"></i> 
                                                    <input type="text" id="dd" name="dd" class="text-center validate" required="" value="Sin Disco Duro" onclick = "if (this.value == 'Sin Disco Duro')
                                                                this.value = ''" onblur="if (this.value == '')
                                                                            this.value = 'Sin Disco Duro'">
                                                    <label for="idEmail">Disco Duro <small></small> </label>
                                                </div> 
                                            </div>
                                            <div class="row">

                                                <div class="input-field col m5">
                                                    <i class="fa fa-microchip prefix"></i> 
                                                    <input type="text" id="pro" name="pro" class="text-center validate" required="" value="Sin Procesador" onclick = "if (this.value == 'Sin Procesador')
                                                                this.value = ''" onblur="if (this.value == '')
                                                                            this.value = 'Sin Procesador'">
                                                    <label for="idEmail">Procesador <small></small> </label>
                                                </div>
                                                <div class="col m1"></div>
                                                <div class="input-field col m5">
                                                    <textarea id="otro" name="otro" class="materialize-textarea" style="font-size:15px"></textarea>
                                                    <label for="textarea1" style="font-size:15px"><i class="  fa fa-pencil-square-o"></i>&nbsp Otro</label>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col m1"></div><!--  para dejar espacio en los lados   -->

                    </div> <!-- termina el div row de Caracteristicas     -->
                </div><!-- termina div panel center-->

                <div class="row">
                    <output id="list"></output>                
                </div>
                <!-- botones -->
                <div class="row text-center" name="botones">
                    <button class="btn btn-success">
                        <span class="glyphicon glyphicon-floppy-disk" aria="hidden"></span>                            
                        Guardar</button>
                    <button type="reset" class="btn btn-danger" onclick="AlertaExttoZZZ()">
                        <span class="glyphicon glyphicon-remove" aria="hidden"></span>Cancelar
                    </button>
                </div><!-- Termina botones -->

            </div> <!-- Termina panel regisroAct -->
        </div><!-- Termina filaForm -->
    </form><!--fin formulario usuario-->

</div><!--fin container-->



<script crossorigin="a
        nonymous" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" src="https://code.jquery.com/jquery-2.2.4.min.js">
</script>


<div id="nuevaCat" class="modal modal-fixed-footer" ><!-- para llamar al modal PARA REGISTRAR CATEGORIA-->
    <div class="modal-heading panel-heading">
        <i class="fa fa-sitemap prefix"></i><h3> &nbsp;Registrar categoria</h3>
    </div>

    <div class="modal-content ">
<?php include('nueva_categoria.php'); ?>

    </div>
    <div class="modal-footer">
        <div class="row">
            <div class="col-md-6 text-right"><button  class="btn btn-success  " type="submit" form="FORMULARIO2" >
                    <span class="glyphicon glyphicon-floppy-disk" aria="hidden"></span>
                    Guardar</button></div>
            <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>
    </div>
</div>


<div id="nuevoProv" class="modal modal-fixed-footer" ><!-- para llamar al modal PARA REGISTRAR PROVEEDOR-->
    <div class="modal-heading panel-heading">
        <i class="fa fa-truck prefix" aria-hidden="true"></i><h3>&nbsp;Registrar Proveedo</h3>
    </div>

    <div class="modal-content ">
<?php include('nuevo_proveedor.php'); ?>

    </div>
    <div class="modal-footer">
        <div class="row">
            <div class="col-md-6 text-right"><button id="gp" class="btn btn-success modal-action " type="submit" form="FORMULARIO3">
                    <span class="glyphicon glyphicon-floppy-disk" aria="hidden"></span>
                    Guardar</button></div>
            <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        $('.FORMULARIO2, .FORMULARIO3, .editorialf').submit(function () {
            //var codigo=$('#codigol').val();
            // alert(codigo);
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: $(this).serialize()
            }).done(function (resp) {
                if (resp == 1) {
                    swal({
                        title: "Exito",
                        text: "Registro Completado",
                        type: "success"},
                    function () {
                        document.getElementById('FORMULARIO1').reset();

                        recargarCombos();

                    }

                    );

                } else {
                    swal("Oops", "Libro no ingresado", "error");

                }
            })
            return false;
        })


    });
    function recargarCombos() {
        $.ajax({
            url: 'select_categoria',
            type: 'POST',
            data: ''
        }).done(function (resp) {
            $('select').material_select('destroy');
            $('select.selectCat').html(resp).fadeIn();
            $('select').material_select();
        })

        $.ajax({
            url: 'select_proveedor',
            type: 'POST',
            data: ''
        }).done(function (resp) {
            $('select').material_select('destroy');
            $('select.selectPro').html(resp).fadeIn();
            $('select').material_select();
        })
    }
</script>