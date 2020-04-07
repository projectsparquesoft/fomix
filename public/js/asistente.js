$(function () {
    modalShow();
});


const modalShow = () => {
    $('#modalShow').on('show.bs.modal', function (event) {

        let button = $(event.relatedTarget)
        let url = button.data('href')

        let modal = $(this)

        $.ajax({
            type: 'GET',
            url: url,
            success: function (data) {
                modal.find('.modal-body').html(data);
                tooltipsMessages();
            }
        });
    });

    $('#modalShow').on('hide.bs.modal', function (e) {
        $(this).find('.modal-body').html("");
    });

}



const enviarJuridica = (context) => {

    let button = context.id;
    let url = $('#' + button).data('href');

    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            if (data.success) {
                success(data.success);
                updateTable();
              //  $('#modalShow').modal('hide');
            } else {
                warning(data.warning);
            }
        },
    });


}


