$(function () {

    $('#guardar').click(function (e) {
        e.preventDefault();
        save();
    });

    $('#actualizar').click(function (e) {
        e.preventDefault();
        update();
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

/*Mostrar mensaje*/
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

/*mensaje de guardado*/
const success = (mensaje) => {

    Toast.fire({
        type: 'success',
        title: `${mensaje}`
    })
}

/*mensaje de error*/
const warning = (mensaje) => {
    Toast.fire({
        type: 'error',
        title: `${mensaje}`
    })
}


const addErrorMessage = (errors) => {
    let messages = "";
    $.each(errors, function (key, value) {

        if ($.isPlainObject(value)) {
            $.each(value, function (key, value) {
                messages = messages + "<li><span class='font-bold text-danger'>" + value + "</span></li><br/>";
            });
        }
    });
    showErrorMessage(messages);
}


const showErrorMessage = (messages) => {
    Swal.fire({
        title: "<strong>Error: Datos Incorrectos</strong>!",
        icon: 'error',
        html: messages
    });
}

/*recarga-actualizar tbla*/
const updateTable = () => {

    let form = $('#form_hidden');
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        success: function (data) {
            if (data.warning) {
                warning(data.warning);
            } else {
                $('#id_table').html("");
                $('#id_table').html(data);
                dataTableInit();
            }
        }
    });
}

const showEdit = () => {
    $('#modalEdit').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget)
        let id = button.data('id');
        let nombre_linea = button.data('nombre_linea');
        let descripcion = button.data('descripcion');
        let modal = $(this);

        modal.find('.modal-body #id_row').val(id);
        modal.find('.modal-body #nombre_linea').val(nombre_linea);
        modal.find('.modal-body #descripcion').val(descripcion);

    });
}

//FUNCION DE ESTADOS
const changeLinea = (url) => {
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function (data) {

            if (data.success) {
                success(data.success);
                updateTable();
            } else {
                warning(data.warning);
            }

        },
    });
}
