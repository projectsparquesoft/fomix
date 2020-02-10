$(function(){


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#botontpoblacion').click(function (e) {
        e.preventDefault();
        //console.log('entre');
        save();
    });

    // btn actualizar form edit 1
    $('#btn_update').click(function (e) {
        e.preventDefault();
        update();
    });
    //funtion mostrar campos form edit 2
    $('#editModals').on('show.bs.modal', function (e) {
        showEdit(e, $(this));
    });
});

const save = () => {
    let form = $('#form_tipopoblacion');
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        dataType: 'json',
        success: function (data) {
            if (data.success) {
                success(data.success);
                $('#form_tipopoblacion')[0].reset();
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

//actualizar-editform 3
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
    let form = $('#form_hidden_tipopoblacion');
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        success: function (data) {
            if (data.warning) {
               console.log(data.warning);
            } else {
               $('#id_table_tipopoblacion').html("");
               $('#id_table_tipopoblacion').html(data);
               dataTableInit();

            }
        }
    });
}

/* Mostar informacion  en los campos del modal*/
const showEdit = (e, context) => {
    let button = $(e.relatedTarget);
    let id = button.data('id');
    let tipo_poblacion = button.data('tipo_poblacion');

    let modal = context;
    modal.find('.modal-body #id_clasificacion').val(id);
    modal.find('.modal-body #tipo_poblacion').val(tipo_poblacion);



}
