$(function(){


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#btnsave').click(function (e) {
        e.preventDefault();
        //alert('hola');
        //console.log('entre');
        save();
    });

});

const save = () => {
    let form = $('#form_dependencia');
    //let stringData = 'nombre_dependencia = ' + $('#nombre_dependencia').val() + '&descripcion = ' + $('#descripcion').val();
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        dataType: 'json',
        success: function (data) {
            if (data.success) {
                success(data.success);
                $('#form_dependencia')[0].reset();
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


const success = (mensaje) => {
    return Swal.fire({
        title: 'Exito!',
        text: `${mensaje}`,
        icon: 'success',
        confirmButtonText: 'OK'
    });
}

const warning = (mensaje) => {
    return Swal.fire({
        title: 'Error!',
        text: `${mensaje}`,
        icon: 'error',
        confirmButtonText: 'OK'
    });
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
