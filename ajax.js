$(function() {

    $(document.body).on('change', '#brands', function() {
        var modalId = $(this).val();
        if (modalId) {
            $.post('ajax.php', { 'modalId': modalId }, function(response) {
                $('#modal').html(response).removeAttr('disabled');
            });
        } else {
            $('#modal').html('<option>- Model Seçin -</option>').attr('disabled', 'disabled');
        }
    });

});