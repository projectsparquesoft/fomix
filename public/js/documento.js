$(function () {


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#guardarDoc').click(function (e) {
        e.preventDefault();
        //console.log('entre');
        save();
    });

    // btn actualizar form
    $('#btn_update').click(function (e) {
        e.preventDefault();
        update();
    });

    $('#editModals').on('show.bs.modal', function (e) {
        showEdit(e, $(this));
    });


});


//actualizar-editform
const update = () => {
    let form = $('#form_update');
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        dataType: 'json',
        success: function (data) {

            if (data.success) {

                success(data.success);
                $('#form_update')[0].reset();
                $('#editModals').modal('hide');
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

//guardar en el form
const save = () => {
    let form = $('#form_documentos');
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        dataType: 'json',
        success: function (data) {

            if (data.success) {

                success(data.success);
                $('#form_documentos')[0].reset();
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

    let form = $('#form_hidden_documentos');
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        success: function (data) {
            if (data.warning) {

            } else {
                $('#id_table_documentos').html("");
                $('#id_table_documentos').html(data);
                dataTableInit();
            }
        }
    });
}

/* Mostar informacion al modal*/
const showEdit = (e, context) => {
    let button = $(e.relatedTarget);
    let id = button.data('id');
    let tipo_documento = button.data('tipo_documento');
    let categoria = button.data('categoria');
    let modal = context;

    modal.find('.modal-body #id_documento').val(id);
    modal.find('.modal-body #tipo_documento').val(tipo_documento);
    modal.find('.modal-body #categoria').val(categoria);
}
