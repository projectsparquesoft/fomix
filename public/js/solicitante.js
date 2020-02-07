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
        e.preventDefault();
        save();
    });
});

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
      })/*
    return Swal.fire({
        title: 'Exito!',
        text: `${mensaje}`,
        icon: 'success',
        confirmButtonText: 'OK'
    });
    */
}

/*mensaje de error*/
const warning = (mensaje) => {
    Toast.fire({
        type: 'error',
        title: `${mensaje}`
    })
    /*
    return Swal.fire({
        title: 'Error!',
        text: `${mensaje}`,
        icon: 'error',
        confirmButtonText: 'OK'
    });
    */
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

/*recarga-actualizar tbla*/
const updateTable = () => {
    let form = $('#form_tabla');
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        success: function (data) {
            if (data.warning) {
               console.log(data.warning);
            } else {
               $('#section_table').html("");
               $('#section_table').html(data);
               dataTableInit();

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



