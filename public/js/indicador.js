$(function(){


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#btnsave').click(function (e) {
        e.preventDefault();
        //console.log('entre');
        save();
    });
});

const save = () => {
    let form = $('#form_indicador');
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        dataType: 'json',
        success: function (data) {
            if (data.success) {
                success(data.success);
                $('#form_indicador')[0].reset();
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
    let form = $('#form_hidden_indicadores');
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        success: function (data) {
            if (data.warning) {
               console.log(data.warning);
            } else {
               $('#id_tabla_indicadores').html("");
               $('#id_tabla_indicadores').html(data);
               dataTableInit();

            }
        }
    });
}
