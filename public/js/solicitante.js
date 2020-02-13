let municipio = 0;
$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.departamento').change(function (e) {
        clearSelectMunicipalities();
        changeMunicipalities(this.value);
    });

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



const clearSelectMunicipalities = () => {
    $('.municipio').find('option:not(:first)').remove();
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

        $(".municipio").append('<option value="' + data[i].id+ '">' + data[i].nombre_municipio + '</option>');
        $(".municipio").val(data[i].id);

    }

    if (municipio != 0) {
        $('.municipio').val(municipio);
    }

    if (municipio == 0) {
        //alert("entre"); Arreglar
        $(".municipio").val("");
    }

}

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

/*recarga-actualizar tabla*/
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
        let id_departamento = button.data('id_departamento');
        let persona_id = button.data('persona_id');
        let proponente_id = button.data('proponente_id');
        let nid = button.data('nid');
        let nombre = button.data('nombre');
        let apellido = button.data('apellido');
        let razon_social = button.data('razon_social');
        let email = button.data('email');
        let direccion = button.data('direccion');
        let celular = button.data('celular');
        let representante_legal = button.data('representante_legal');
        municipio = button.data('municipio_id');

        changeMunicipalities(id_departamento);

        let modal = $(this);

        modal.find('.modal-body #id_row').val(id);
        modal.find('.modal-body #id_departamento').val(id_departamento);
        modal.find('.modal-body #persona_id').val(persona_id);
        modal.find('.modal-body #proponente_id').val(proponente_id);
        modal.find('.modal-body #nid').val(nid);
        modal.find('.modal-body #nombre').val(nombre);
        modal.find('.modal-body #apellido').val(apellido);
        modal.find('.modal-body #razon_social').val(razon_social);
        modal.find('.modal-body #email').val(email);
        modal.find('.modal-body #direccion').val(direccion);
        modal.find('.modal-body #celular').val(celular);
        modal.find('.modal-body #representante_legal').val(representante_legal);


    });

    $('#modalEdit').on('hide.bs.modal', function (event) {
        clearSelectMunicipalities();
    });
}

//actualizar-edit-form
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



