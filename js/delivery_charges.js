$(document).ready(function () {

    $('#district').change(function () {
        var disID = $(this).val();
        var sub_total_amount = $('#sub_total_amount').val();
        $.ajax({
            url: "post-and-get/ajax/delivery_charges.php",
            type: "POST",
            data: {
                district: disID,
                sub_total_amount: sub_total_amount,
                action: 'GETDELIVERYCHARGESBYDISTRICT'
            },
            dataType: "JSON",
            success: function (result) {
                $('.total_amount').text('Rs. ' + result.display_grand_total);
                $('#total_amount').val(result.grand_total);
                $('.delivery_charges').text('Rs. ' + result.display_delivery_charge);
                $('#delivery_charges').val(result.delivery_charge);
            }
        });
    });
});