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

    $('#btnAddPresupuesto').click(function (e) {
        e.preventDefault();
        addItemsPresupuesto(tr_presupuesto);
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

const addItemsPresupuesto = (tr) => {

    let rubro = $("#rubro-999").val();
    let recurso_municipio = $('#recurso_municipio-999').val();
    let fondo_mixto = $('#fondo_mixto-999').val();
    let ministerio_cultura = $('#ministerio_cultura-999').val();
    let ingreso_propio = $('#ingreso_propio-999').val();

    let items = [rubro, recurso_municipio, fondo_mixto, ministerio_cultura, ingreso_propio];

    if (validatedItems(items)) {
        if (tr != 0) {
            deleteItemPresupuesto(tr);
            addTablePresupuesto(tr, rubro, recurso_municipio, fondo_mixto, ministerio_cultura, ingreso_propio);
            tr_presupuesto = 0;
        } else {
            x_presupuesto++;
            addTablePresupuesto(x_presupuesto, rubro, recurso_municipio, fondo_mixto, ministerio_cultura, ingreso_propio);
        }

        $("#rubro-999").val('');
        $('#recurso_municipio-999').val('');
        $('#fondo_mixto-999').val('');
        $('#ministerio_cultura-999').val('');
        $('#ingreso_propio-999').val('');

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

const addTablePresupuesto = (x, rubro, recurso_municipio, fondo_mixto, ministerio_cultura, ingreso_propio) => {
    let htmlTags = '<tr id="item_presupuesto_' + x + '">' +
        '<td>' + x + '</td>' +
        '<td class="text-center">' + formatterPeso.format(rubro) + '</td>' +
        '<td class="text-center">' + formatterPeso.format(recurso_municipio) + '</td>' +
        '<td class="text-center">' + formatterPeso.format(fondo_mixto) + '</td>' +
        '<td class="text-center">' + formatterPeso.format(ministerio_cultura) + '</td>' +
        '<td class="text-center">' + formatterPeso.format(ingreso_propio) + '</td>' +
        '<td class="text-center">' +
        '<button type="button" class="btn btn-warning btn-sm" onclick="addFormPresupuesto(' + x + ')" ><i class="fas fa-pencil-alt"></i></button>' +
        '<button type="button" class="btn btn-danger btn-sm" onclick="deleteItemPresupuesto(' + x + ')"><i class="fas fa-trash-alt"></i></button>' +
        '</td>' +
        '</tr>';

    $('#table_presupuesto tbody').append(htmlTags);

    $('#clonar_presupuesto').append(cloneInputsPresupuesto(x, rubro, recurso_municipio, fondo_mixto, ministerio_cultura, ingreso_propio));

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

const cloneInputsPresupuesto = (x, rubro, recurso_municipio, fondo_mixto, ministerio_cultura, ingreso_propio) => {

    return "<div id='clone_presupuesto-" + x + "'>" +
        "<input type='hidden' name='rubro[]' id='rubro-" + x + "' value=" + rubro + ">" +
        "<input type='hidden' name='recurso_municipio[]' id='recurso_municipio-" + x + "' value=" + recurso_municipio + ">" +
        "<input type='hidden' name='fondo_mixto[]' id='fondo_mixto-" + x + "' value=" + fondo_mixto + ">" +
        "<input type='hidden' name='ministerio_cultura[]' id='ministerio_cultura-" + x + "' value=" + ministerio_cultura + ">" +
        "<input type='hidden' name='ingreso_propio[]' id='ingreso_propio-" + x + "' value=" + ingreso_propio + ">" +
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
    let fecha_ini = $('#fecha_inicio-' + x).val();
    let fecha_final = $('#fecha_final-' + x).val();

    $('#nombre_actividad-999').val(nombre_actividad);
    $('#fecha_inicio-999').val(fecha_ini);
    $('#fecha_final-999').val(fecha_final);

    tr_actividad = x;
}

const addFormPresupuesto = (x) => {

    let rubro = $("#rubro-" + x).val();
    let recurso_municipio = $('#recurso_municipio-' + x).val();
    let fondo_mixto = $('#fondo_mixto-' + x).val();
    let ministerio_cultura = $('#ministerio_cultura-' + x).val();
    let ingreso_propio = $('#ingreso_propio-' + x).val();


    $("#rubro-999").val(rubro);
    $('#recurso_municipio-999').val(recurso_municipio);
    $('#fondo_mixto-999').val(fondo_mixto);
    $('#ministerio_cultura-999').val(ministerio_cultura);
    $('#ingreso_propio-999').val(ingreso_propio);

    tr_presupuesto = x;
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

const deleteItemPresupuesto = (value) => {
    $("#item_presupuesto_" + value).remove();
    $('#clone_presupuesto-' + value).remove();
}

const validatedItems = (items) => {

    for (let index = 0; index < items.length; index++) {

        if (items[index] == '') {
            return false;
        }

    }

    return true;
}

const formatterPeso = new Intl.NumberFormat('es-CO', {
    style: 'currency',
    currency: 'COP',
    minimumFractionDigits: 0
})

