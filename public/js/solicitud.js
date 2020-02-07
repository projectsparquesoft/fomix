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

    $('#exampleModal').modal('show');


$(function () {
    $('#id_linea').selectpicker();

});



