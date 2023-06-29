$(document).ready(function () {

    "use strict"

    $(document).on('click', "#send-email", function () {

        $.customDesignedBlockUI();

        const data_route = $(this).data('route');

        axios.post(data_route).then((response) => {
            $.unblockUI();

            if (response.status == 200) {
                swal(response.data.message, {icon: "success"});
                $('#send-again').slideUp('slow', function () {
                    $('#send-again').text('Send Email Again').slideDown('slow');
                });
            }
        }, (error) => {
            $.unblockUI();
        });

    });

});
