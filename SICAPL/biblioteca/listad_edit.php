
<table padding="20px" class="responsive-table display" id="tabla-paginada3">
                    <thead class="">
                    <th class="text-center"></th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Direccion</th>
                    <th class="text-center">Correo</th>
                    <th class="text-center">Telefono</th>
                    
                    <th class="text-center"></th>

                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><button class="btn btn-success" onclick="abrirEdicionEdi()"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">Anaya</td>
                            <td class="text-center">3a Calle Oriente #33 San Salvador</td>
                            <td class="text-center">anaya@gmail.com</td>
                            <td class="text-center">77496839</td>
                            
                            <td class="text-center"><button class="btn btn-danger"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>
                        
                        <tr>
                            <td class="text-center"><button class="btn btn-success" onclick="abrirEdicionEdi()"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">Oceano</td>
                            <td class="text-center">2a Avenida sur #24 San Salvador</td>
                            <td class="text-center">oceano@gmail.com</td>
                            <td class="text-center">74563293</td>
                            
                            <td class="text-center"><button class="btn btn-danger"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>
                        <tr>
                            <td class="text-center"><button class="btn btn-success" onclick="abrirEdicionEdi()"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">Harday Electric</td>
                            <td class="text-center">Ues San vicente</td>
                            <td class="text-center">hardayelectric763@gmail.com</td>
                            <td class="text-center">78654309</td>
                            
                            <td class="text-center"><button class="btn btn-danger"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>
                       
                    </tbody>
                </table>


                 <div id="edicionEdi" class="modal modal-fixed-footer nuevo">
    <div class="modal-content modal-lg">
        <?php include('frm_edit_edi.php'); ?>
    </div>
    <div class="modal-footer">
    <div class="row">
        <div class="col-md-6 text-right"><a href="#" class="modal-action modal-close waves-effect btn btn-success">Actualizar</a></div>
        <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger">Salir</a></div>
        </div>
    </div>
</div>