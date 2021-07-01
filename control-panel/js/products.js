$(document).ready(function () {
    $('input[type=radio][name=product_type]').change(function () {
        if (this.value == 'parent') {
            $('#parent-product-section').removeClass('hidden');
            $('#sub-product-section').addClass('hidden');
        }
        else if (this.value == 'sub') {
            $('#parent-product-section').addClass('hidden');
            $('#sub-product-section').removeClass('hidden');
        }
    });
    $('#add-row').click(function (e) {
        e.preventDefault();
        var no_of_product = $('#no-of-sub-products').val();
        no_of_product = parseInt(no_of_product) + 1;
        var html = '';

        html += '<div class="row col-md-12">';
        html += '<hr />';
        html += '<h6>Product ' + no_of_product + '</h6>';
        html += '<div class="col-md-4">';
        html += '<div class="form-group form-float">';
        html += '<div class="form-line focused">';
        html += '<input type="text" id="sub-name-' + no_of_product + '" class="form-control" autocomplete="off" name="sub_name_' + no_of_product + '">';
        html += '<label class="form-label">Name</label>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-4">';
        html += '<div class="form-group form-float">';
        html += '<div class="form-line focused"">';
        html += '<input type="number" id="price-' + no_of_product + '" class="form-control" autocomplete="off" name="price_' + no_of_product + '" min="0">';
        html += '<label class="form-label">Price (Rs)</label>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-4">';
        html += '<div class="form-group form-float">';
        html += '<div class="form-line focused"">';
        html += '<input type="number" id="discount-' + no_of_product + '" class="form-control" autocomplete="off" name="discount_' + no_of_product + '" min="0">';
        html += '<label class="form-label">Discount (%)</label>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        $('#no-of-sub-products').val(no_of_product);
        $('.sub-product-section').append(html);
    })
});