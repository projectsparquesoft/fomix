$(function(){


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#botonsave').click(function (e) {
        e.preventDefault();
        //alert('hola');
        //console.log('entre');
        save();
    });

     //botonbuscar(primero)
     pageitem();

     $('#search').click(function (e) {
         e.preventDefault();
         let text_search = $('#text_search').val();
         getSearch(text_search);
     });

        //(boton listar nuevamente);
     $('#btnlistar').click(function (e) {
         e.preventDefault();
         getSearch('');
         //alert('hola boton');
     });


});


const save = () => {
    let form = $('#form_empleados');
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        dataType: 'json',
        success: function (data) {
            if (data.success) {
                success(data.success);
                $('#form_empleados')[0].reset();
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

//segundo buscar y pagination
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
//2.1
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

//2.2
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

//2.3

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
