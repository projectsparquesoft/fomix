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

    pageitem();

    $('#search').click(function (e) {
        e.preventDefault();
        let text_search = $('#text_search').val();
        getSearch(text_search);
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


const pageitem = () => {
    $(document).on('click', '.page-item a', function (event) {
        event.preventDefault();
        $('li').removeClass('active');
        $(this).parent('li').addClass('active');
        let myurl = $(this).attr('href');
        let page = myurl.split('page=')[1];
        getData(page);
    });
}

const getData = (page) => {
    let text_search = $('#text_search').val();

    let datos = { 'opcion': 1, 'text_search': text_search };

    $.ajax({
        url: '?page=' + page,
        data: datos,
        type: "get",
        datatype: "html"
    }).done(function (data) {
        $("#table").empty().html(data);
        location.hash = page;
    }).fail(function (jqXHR, ajaxOptions, thrownError) {
        alert('No response from server');
    });
}

const getSearch = (text_search) => {
    let form = $('#form_search');
    $.ajax({
        url: form.attr('action'),
        data: { 'opcion': 2, 'text_search': text_search },
        type: form.attr('method')
    }).done(function (data) {
        $("#table").empty().html(data);
        $('#text_search').val("");
    }).fail(function (jqXHR, ajaxOptions, thrownError) {
        alert('No response from server');
    });
}

const haschange = () => {
    $(window).on('hashchange', function () {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            } else {
                getData(page);
            }
        }
    });
}


