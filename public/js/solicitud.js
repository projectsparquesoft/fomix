$(function () {


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#departamento').change(function (e) {
        clearSelectMunicipalities();
        changeMunicipalities(this.value);
    });

    $('#btnsave').click(function (e) {
        save();
    });


});

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



const clearSelectMunicipalities = () => {
    $('#municipio').find('option:not(:first)').remove();
}

const changeMunicipalities = (id) => {
    if (!id) {
        warning('SELECCIONE UN DEPARTAMENTO');
    } else {
        $.ajax({
            type: 'GET',
            url: '../change/municipalities/' + id,
            success: function (data) {
                addMunicipalities(data);
            }
        });
    }
}

const addMunicipalities = (data) => {

    for (let i = 0; i < data.length; i++) {

        $("#municipio").append('<option value="' + data[i].id_municipio + '">' + data[i].nombre_municipio + '</option>');
        $("#municipio").val(data[i].id_municipio);

    }

    $("#municipio").val("");

}

const save = () => {
    let form = $('#form');
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        dataType: 'json',
        success: function (data) {
            if (data.success) {
                success(data.success);
                $('#form')[0].reset();
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