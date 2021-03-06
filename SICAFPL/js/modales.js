$(document).ready(function () {
    $('.datepicker2').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 150, // Creates a dropdown of 15 years to control year,
        today: 'Hoy',
        clear: 'Borrar',
        close: 'Ok',
        format: 'dd-mm-yyyy',
        max: new Date(),
        closeOnSelect: true // Close upon selecting a date,
    });

    $('#fecha_dev').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 2, // Creates a dropdown of 15 years to control year,
        today: 'Hoy',
        clear: 'Borrar',
        close: 'Ok',
        format: 'dd-mm-yyyy',
        min: new Date(),
        closeOnSelect: true // Close upon selecting a date,
    });
    $('.fecha_dev').pickadate({//es clase para validar las fechas del activo fijo
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 2, // Creates a dropdown of 15 years to control year,
        today: 'Hoy',
        clear: 'Borrar',
        close: 'Ok',
        format: 'dd-mm-yyyy',
        min: new Date(),
        closeOnSelect: true // Close upon selecting a date,
    });
    $('.collapse')
            .on('shown.bs.collapse', function () {
                $(this).parent()
                        .find(".fa-sort-desc")
                        .removeClass("fa-sort-desc")
                        .addClass("fa-sort-asc");
            })
            .on('hidden.bs.collapse', function () {
                $(this)
                        .parent()
                        .find(".fa-sort-asc")
                        .removeClass("fa-sort-asc")
                        .addClass("fa-sort-desc");
            });
});
$(document).ready(function () {
    $('.datepicke-cumple').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 150, // Creates a dropdown of 15 years to control year,
        today: 'Hoy',
        clear: 'Borrar',
        close: 'Ok',
        format: 'dd-mm-yyyy',
        max: new Date(1999, 10 - 1, 31),
        closeOnSelect: true // Close upon selecting a date,
    });

    $('#fecha_dev').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 2, // Creates a dropdown of 15 years to control year,
        today: 'Hoy',
        clear: 'Borrar',
        close: 'Ok',
        format: 'dd-mm-yyyy',
        min: new Date(),
        closeOnSelect: true // Close upon selecting a date,
    });
    $('.fecha_dev').pickadate({//es clase para validar las fechas del activo fijo
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 2, // Creates a dropdown of 15 years to control year,
        today: 'Hoy',
        clear: 'Borrar',
        close: 'Ok',
        format: 'dd-mm-yyyy',
        min: new Date(),
        closeOnSelect: true // Close upon selecting a date,
    });
    $('.collapse')
            .on('shown.bs.collapse', function () {
                $(this).parent()
                        .find(".fa-sort-desc")
                        .removeClass("fa-sort-desc")
                        .addClass("fa-sort-asc");
            })
            .on('hidden.bs.collapse', function () {
                $(this)
                        .parent()
                        .find(".fa-sort-asc")
                        .removeClass("fa-sort-asc")
                        .addClass("fa-sort-desc");
            });
});

$(document).ready(function () {

    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal({
        dismissible: false, // Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacity of modal background
        inDuration: 300, // Transition in duration
        outDuration: 200, // Transition out duration
        startingTop: '0%', // Starting top style attribute
        endingTop: '0%', // Ending top style attribute

    }
    );





});

function abrir_edicion_administrador(nombre, apellido, user, dui, fecha, email, password, nivel, sexo) {
    $("#idNombreE").val(nombre);
    $("#idApellidoE").val(apellido);
    $("#idUserE").val(user);
    $("#idDuiE").val(dui);
    $("#idFechaE").val(fecha);
    $("#idEmailE").val(email);
    $("#idPass1E").val(password);
    $("#idPass2E").val(password);
    $("#idSecreto").val(nombre);
    $("#codigo_original").val(user);

    $("#idListarAdmnistrador").removeClass("active");
    $("#idRegistroAdministrador").addClass("active");

    if (nivel == '0') {
        $("#idRootE").attr("checked", "checked");
    } else {
        $("#idAdministradorE").attr("checked", "checked");
    }

    if (sexo == "Masculino") {
        $('#idHombreE').attr("checked", "checked");

    } else {
        $("#idMujerE").attr("checked", "checked");
    }

    $('#edicion_administradores').modal('open');
}

function abrir_edicion_usuario(nombre, apellido, direccion, email, telefono, sexo, password, carnet, institucion) {
    $("#idSecreto").val(nombre + " " + apellido);
    $("#idCarnetE").val(carnet);
    $("#idNombreE").val(nombre);
    $("#idApellidoE").val(apellido);
    $("#idDireccionE").val(direccion);
    $("#idEmailE").val(email);
    $("#idTelefonoE").val(telefono);
    if (sexo == "Masculino") {

        $('#idHombreE').attr("checked", "checked");
    } else {
        $("#idMujerE").attr("checked", "checked");

    }
    var elemento = 5;


    $("select#idInstitucionEf").val(institucion).attr('selected', 'selected');



    $('#edicion_usuario').modal('open');
}

function abrir_eliminacion_usuario(nombre, apellido, carnet, password) {
    $("#idOtroCarnet").val(carnet);
    $("#idNombreEliminado").val(nombre + " " + apellido);
    $("#idCarnetEliminado").val(carnet);

    $("#idCarnetEl").val(carnet);
    $("#idSecretoEL").val(nombre + " " + apellido);
    $('#eliminacion_usuario').modal('open');
}

function abrir_eliminacion_administrador(nombre, apellido, usuario, password) {
    $("#idNombreEl").val(nombre + " " + apellido);
    $("#idUsuarioEl").val(usuario);
    $("#idSecretoEL").val('1121111');
    $("#idOtroCarnet").val(usuario);



    $('#eliminacion_administradores').modal('open');
}
function abrir_restaurar_administrador(nombre, codigo) {
    $("#nombreRestaurado").val(nombre);
    $("#codigoRestaurado").val(codigo);
    $("#codigo_restauracion").val(codigo);

    $('#restaurar_administrador').modal('open');
}

function abrirModal() {
    $('#nuevo').modal('open');
}

function abrirBajaLibros() {
    $('#bajaLib').modal('open');
}

function abrirEdicionLib(codigo, editorial, titulo, fecha, foto, cantidad) {

    var foto2 = "../fotoLibros/" + foto;
    // alert(codigo);
    $('#codigol_edit').val(codigo);
    $('#selectEdit').val(editorial);
    $('#titulo_edit').val(titulo);
    $('#fecha_pub_edit').val(fecha);
    $('#foto1').attr("filename", foto);
    $('#file_foto').val(foto);
    document.getElementById("fotoLibro").src = foto2;
    $('#cantidad_edit').val(cantidad);
    $('#edicionLib').modal('open');
}
function abrirEdicionAut(codigo, nombre, apellido, fecha, bio) {
    $('#codigoa_edit').val(codigo);

    $('#nombrea_edit').val(nombre);
    $('#apellidoa_edit').val(apellido);
    $('#fecha_nac_edit').val(fecha);
    $('#bio_edit1').val(bio);
    $('#edicionAut').modal('open');
}
function abrirEdicionEdi(codigo, nombre, direccion, correo, telefono) {
    $('#codigoe_edit').val(codigo);

    $('#nombree_edit').val(nombre);
    $('#idTelefonoE').val(telefono);
    $('#email_edit').val(correo);
    $('#direccion_edit').val(direccion);
    $('#edicionEdi').modal('open');
}
function abrir_nueva_institucion(codigo, nombre, direccion, correo, telefono) {
    $('#idVentana_institucion').modal('open');

}

//  FUNCIONES QUE SE OCUPAN PARA ACTIVO FIJO
function nuevaCat(opcion) {
    if (opcion == 1) {
        $('#nuevaCat').modal('open');
    }
    if (opcion == 2) {
        $('#nuevoProv').modal('open');
    }
    if (opcion == 3) {
        $('#nuevoEncargado').modal('open');
    }
    if (opcion == 4) {
        $('#actualizarCaracteristicas').modal('open');
    }



    if (opcion == 6) {
        $('#editActivo').modal('open');
    }
}

function nuevoPretamoAct() {
    $("#tabla_activo_prestamo tbody").empty()//ellino el anterior
    $("#talbe_user_activo tbody").empty()
    $('#nuevoPrestamoAct').modal('open');

}

function nuevoMant(id, valor) {
    $("#catMantAct").val("---");
    $("#redireccionar").val(valor);
    $("#codMantAct").val("---");
    $("#tabla_activo_mantenimiento tbody").empty()//ellino el anterior
    $("#datos_encargado2 tbody").empty()//ellino el anterior
    $('#nuevoMant').modal('open');

    if (id != "no") {
        llenarTactMant(id, "reparar");
    }

}




function act_caract() {
    var cosd = document.mant.elements["codsActsMant[]"];
    if (typeof (cosd) === "undefined") {
        swal("Ooops", "Tabla de activos vacía", "warning");
    } else {
        $('#actualizarCaracteristicas').modal('open');
    }

}
function actualizarPrestamoActivo(id) {
    $('#actPres').modal('open');
    $.post("../activofijo/llenar_act_prest.php", {codigo: id, }, function (mensaje) {
        $('#listaLibros22').html(mensaje).fadeIn();

    });

}

function abrirActivo(coda, codadm, foto, estado, codd, color, dimen, marca, memo, mode, otros, proce, ram, seri, siste, admin) {
    var foto2 = "../fotoActivos/" + foto;

    $('#codActivo').val(coda);
    $('#codActivo1').val(coda);
    $('#codDetalle').val(codd);
    //$('#adminedit').val(codadm).selected;
    // $("select#adminedit").val(codadm).attr('selected', 'selected');

    // $('#adminedit > option[value="'+codadm+'"]').attr('selected', 'selected');
    $('#nserieE').val(seri);
    $('#colorE').val(color);
    $('#marcaE').val(marca);
    $('#soE').val(siste);
    $('#dimensionesE').val(dimen);
    $('#modeloE').val(mode);
    $('#proE').val(proce);
    $('#otroE').val(otros);
    $('#ramE').val(ram);
    $('#ddE').val(memo);
    $('#codamin').val(codadm);
    $('#nadmin').val(admin);
    $('#estadoE').val(estado);
    document.getElementById("fotoEdActsrc").src = foto2;
    if(estado=="En Prestamo"){
        document.actAct.ipm.disabled=true;
    }
    $('#editActivo').modal('open');

}
function delA() {

    var coda = document.getElementById('codActivo').value;
    var codd = document.getElementById('codDetalle').value;
    
    DActivo(coda, codd);

}
function DActivo(cada, codd) {
    $('#codDA').val(cada);
    $('#codD').val(cada);

    $('#DActivo').modal('open');
}

function verMantenimiento(id, fecha, costo, des) {
     $("#ver_manteniemiento_encargados tbody").empty()//ellino el anterior
      $("#ver_manteniemiento_activos tbody").empty()//ellino el anterior
    $('#ver_fecha_mant').val(fecha);
    $('#ver_costoTotal').val(costo);
    $('#ver_descrMant').val(des);

    $('#ver_manteniemiento').modal('open');
    $.post("../consultas_activo/llenar_ver_encargado.php", {codigo: id, }, function (mensaje) {
        $('#listaLibros22').html(mensaje).fadeIn();
    });

    $.post("../consultas_activo/llenar_ver_mantenimiento.php", {codigo: id, }, function (mensaje) {
        $('#listaLibros22').html(mensaje).fadeIn();
    });

}

function verDepreciacion(cod, fecha, valor) {
   $("#ver_depre_tab tbody").empty()//ellino el anterior
    $('#ver_cod_depre').val(cod);
    $('#ver_fecha_depre').val(fecha);
    $('#ver_valor').val(valor);
    $('#ver_depre').modal('open');
    var fecha1 = fecha.split('-');
    var dia = fecha1[0];
    var mes = fecha1[1];
    var anio = parseInt(fecha1[2]);
    var d = valor * 0.50;
    var vn = valor - d;
    var linea = "";
    if (cod.length > 1) {
        linea = linea.concat(
                "<tr>",
                '<td class="text-center" ><input type="hidden" name="ani" value="'+anio+'" >' + anio + "</td>",
                '<td class="text-center" ><input type="hidden" name="v" value="'+ valor +'" >  '+ valor +' </td>',
                '<td class="text-center" ><input type="hidden" name="d" value="'+ d + '" >  '+ d + '</td>',
                '<td class="text-center" ><input type="hidden" name="vn" value="' + vn +'" > ' + vn +' </td>',
                "</tr> "
                );

        $("table#ver_depre_tab tbody").append(linea).closest("table#ver_depre_tab");
        valor = vn;
        vn = 0;
        linea="";
        linea = linea.concat(
                                "<tr>",
                '<td class="text-center" ><input type="hidden" name="ani2" value="'+(anio+1)+'" > ' + (anio+1) + "</td>",
                '<td class="text-center" ><input type="hidden" name="v2" value="'+ valor +'" >  '+ valor +' </td>',
                '<td class="text-center" ><input type="hidden" name="d2" value="'+ d + '" >  '+ d + '</td>',
                '<td class="text-center" ><input type="hidden" name="vn2" value="' + vn +'" > ' + vn +' </td>',
                "</tr> "
                );

        $("table#ver_depre_tab tbody").append(linea).closest("table#ver_depre_tab");
    }



}