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
        addItemsPoblacion(tr);
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

    if (validatedItemsPoblacion(clasificacion, poblacion, total)) {
        if (tr != 0) {
            deleteItem(tr);
            addTable(tr, product, amount, price);
        } else {
            x++;
            addTable(x, product, amount, price);
        }
        form[0].reset();
        $('#id_product-999').val('');
        $('#id_product-999').selectpicker('refresh');
        $('#modalProduct').modal('hide');
    } else {
        warning('POR FAVOR ESCOGER TODAS LAS OPCIONES DISPONIBLES')
    }


}

const deleteItemPoblacion = (value) => {
    $("#item_poblacion_" + value).remove();
    $('#clone_poblacion-' + value).remove();
}
