$(function () {

    $('#guardar').click(function (e) {
        e.preventDefault();
        save();
    });

    $('#actualizar').click(function (e) {
        e.preventDefault();
        update();
    });

    //Initialize Select2 Elements
    $('.select2').select2();

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    });

    $('.clasificaciones').change(function (e) {
        clearSelectPoblaciones();
        changePoblaciones(this.value);
    });


    $('#btnAddPoblacion').click(function (e) {
        e.preventDefault();
        addItemsPoblacion(tr_poblacion);
    });

    $('#btnAddActividad').click(function (e) {
        e.preventDefault();
        addItemsActividad(tr_actividad);
    });

    showEdit();
});


//guardar en el form
const save = () => {
    let form = $('#form_create');
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        dataType: 'json',
        success: function (data) {

            if (data.success) {

                success(data.success);
                $('#form_create')[0].reset();
                $(".select2").val("");
                $(".select2").select2();
                updateTable();
            } else {
                warning(data.warning);

            }

        },
        error: function (data) {

            if (data.status === 422) {
                let errors = $.parseJSON(data.responseText);
                addErrorMessage(errors);
            }
        }
    });

}

//actualizar-editform
const update = () => {
    let form = $('#form_edit');
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        dataType: 'json',
        success: function (data) {

            if (data.success) {
                success(data.success);
                $('#modalEdit').modal('hide');
                updateTable();
            } else {
                warning(data.warning);
            }

        },
        error: function (data) {

            if (data.status === 422) {
                let errors = $.parseJSON(data.responseText);
                addErrorMessage(errors);
            }
        }
    });

}

// Utilizar este codigo para departamentos
const clearSelectPoblaciones = () => {
    $('.poblaciones').find('option:not(:first)').remove();
}

const changePoblaciones = (value) => {
    for (let p of poblaciones) {
        if (p.clasificacion_id == value) {
            $(".poblaciones").append('<option value="' + p.id + '">' + p.detalle + '</option>');
            $(".poblaciones").val(p.id);
        }
    }
    $(".poblaciones").val('0');
}
/* Mostar informacion  en los campos del modal*/

const showEdit = () => {
    $('#modalEdit').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget)
        let id = button.data('id');
        let item = button.data('item');
        let clasificacion_id = button.data('clasificacion_id');
        let detalle = button.data('detalle');
        let modal = $(this);

        modal.find('.modal-body #id_row').val(id);
        modal.find('.modal-body #item').val(item);
        modal.find('.modal-body #clasificacion_id').val(clasificacion_id);
        modal.find('.modal-body #detalle').val(detalle);

    });

}

const addItemsPoblacion = (tr) => {

    let clasificacion = $('#clasificacion_id-999').val();
    let poblacion = $('#poblacion_id-999').val();
    let total = $('#total-999').val();

    let items = [clasificacion, poblacion, total];

    if (validatedItems(items)) {
        if (tr != 0) {
            deleteItemPoblacion(tr);
            addTablePoblacion(tr, clasificacion, poblacion, total);
            tr_poblacion = 0;
        } else {
            x_poblacion++;
            addTablePoblacion(x_poblacion, clasificacion, poblacion, total);
        }

        $('#clasificacion_id-999').val('0');
        $('#poblacion_id-999').val('0');
        $('#total-999').val('');

    } else {
        warning('POR FAVOR ESCOGER TODAS LAS OPCIONES DISPONIBLES')
    }


}

const addItemsActividad = (tr) => {

    let actividad = $.trim($("#nombre_actividad-999").val());
    console.log(actividad);
    let fecha_ini = $('#fecha_inicio-999').val();
    let fecha_fin = $('#fecha_final-999').val();

    let items = [actividad, fecha_ini, fecha_fin];

    if (validatedItems(items)) {
        if (tr != 0) {
            deleteItemActividad(tr);
            addTableActividad(tr, actividad, fecha_ini, fecha_fin);
            tr_actividad = 0;
        } else {
            x_actividad++;
            addTableActividad(x_actividad, actividad, fecha_ini, fecha_fin);
        }

        $('#nombre_actividad-999').val('');
        $('#fecha_inicio-999').val('');
        $('#fecha_final-999').val('');

    } else {
        warning('POR FAVOR ESCOGER TODAS LAS OPCIONES DISPONIBLES')
    }

}


const addTablePoblacion = (x, clasificacion, poblacion, total) => {

    let name_poblacion = namePoblacion(poblacion);
    let name_clasificacion = nameClasificacion(clasificacion);

    let htmlTags = '<tr id="item_poblacion_' + x + '">' +
        '<td>' + x + '</td>' +
        '<td class="text-center">' + name_clasificacion + '</td>' +
        '<td class="text-center">' + name_poblacion + '</td>' +
        '<td class="text-center">' + total + '</td>' +
        '<td class="text-center">' +
        '<button type="button" class="btn btn-warning btn-sm" onclick="addFormPoblacion(' + clasificacion + ',' + poblacion + ',' + total + ',' + x + ')" ><i class="fas fa-pencil-alt"></i></button>' +
        '<button type="button" class="btn btn-danger btn-sm" onclick="deleteItemPoblacion(' + x + ')"><i class="fas fa-trash-alt"></i></button>' +
        '</td>' +
        '</tr>';

    $('#table_poblacion tbody').append(htmlTags);

    $('#clonar_poblacion').append(cloneInputsPoblacion(x, poblacion, total));

}

const addTableActividad = (x, actividad, fecha_ini, fecha_fin) => {
    let htmlTags = '<tr id="item_actividad_' + x + '">' +
        '<td>' + x + '</td>' +
        '<td class="text-center">' + actividad + '</td>' +
        '<td class="text-center">' + fecha_ini + '</td>' +
        '<td class="text-center">' + fecha_fin + '</td>' +
        '<td class="text-center">' +
        '<button type="button" class="btn btn-warning btn-sm" onclick="addFormActividad(' + x + ')" ><i class="fas fa-pencil-alt"></i></button>' +
        '<button type="button" class="btn btn-danger btn-sm" onclick="deleteItemActividad(' + x + ')"><i class="fas fa-trash-alt"></i></button>' +
        '</td>' +
        '</tr>';

    $('#table_actividad tbody').append(htmlTags);

    $('#clonar_actividad').append(cloneInputsActividad(x, actividad, fecha_ini, fecha_fin));

}

const cloneInputsPoblacion = (x, poblacion, total) => {

    return "<div id='clone_poblacion-" + x + "'>" +
        "<input type='hidden' name='id_poblacion[]' id='id_poblacion-" + x + "' value=" + poblacion + ">" +
        "<input type='hidden' name='total[]' id='total-" + x + "' value=" + total + ">" +
        "</div>";
}

const cloneInputsActividad = (x, actividad, fecha_ini, fecha_fin) => {
    return "<div id='clone_actividad-" + x + "'>" +
        "<textarea style='display:none;' name='nombre_actividad[]' id='nombre_actividad-" + x + "'>" + actividad + "</textarea>" +
        "<input type='hidden' name='fecha_inicio[]' id='fecha_inicio-" + x + "' value=" + fecha_ini + ">" +
        "<input type='hidden' name='fecha_final[]' id='fecha_final-" + x + "' value=" + fecha_fin + ">" +
        "</div>";
}

const addFormPoblacion = (clasificacion, poblacion, total, tr) => {
    $('#clasificacion_id-999').val(clasificacion);
    changePoblaciones(clasificacion)
    $('#poblacion_id-999').val(poblacion);
    $('#total-999').val(total);
    tr_poblacion = tr;
}

const addFormActividad = (x) => {

    let nombre_actividad = $.trim($('#nombre_actividad-' + x).val());
    console.log(nombre_actividad);
    let fecha_ini = $('#fecha_inicio-' + x).val();
    let fecha_final = $('#fecha_final-' + x).val();

    $('#nombre_actividad-999').val(nombre_actividad);
    $('#fecha_inicio-999').val(fecha_ini);
    $('#fecha_final-999').val(fecha_final);

    tr_actividad = x;
}

const namePoblacion = (poblacion) => {

    for (let p of poblaciones) {
        if (p.id == poblacion) {
            return p.detalle;
        }
    }

}

const nameClasificacion = (clasificacion) => {

    for (let c of clasificaciones) {
        if (c.id == clasificacion) {
            return c.tipo_poblacion;
        }
    }

}

const deleteItemPoblacion = (value) => {
    $("#item_poblacion_" + value).remove();
    $('#clone_poblacion-' + value).remove();
}

const deleteItemActividad = (value) => {
    $("#item_actividad_" + value).remove();
    $('#clone_actividad-' + value).remove();
}

const validatedItems = (items) => {

    for (let index = 0; index < items.length; index++) {

        if (items[index] == '') {
            return false;
        }

    }

    return true;
}


