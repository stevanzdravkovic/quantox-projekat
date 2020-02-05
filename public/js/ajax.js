$(document).ready(function () {

    let id = 1;
    jQuery.ajax({
        type: 'post',
        url: 'getCategoryAjax.php',
        data: 'id=' + id,
        success: function (result) {

            jQuery('.form-control1').html(result);
        }
    });

    $(".form-control1").change(function () {
        $(".form-control2").css("visibility", "visible");
        var id = jQuery(this).val();
        jQuery.ajax({
            type: 'post',
            url: 'getCategoryAjax.php',
            data: 'id=' + id,
            success: function (result) {
                jQuery('.form-control2').html(result);
            }
        })
    });

    $(".form-control2").change(function () {
        $(".form-control3").css("visibility", "visible");
        var id = jQuery(this).val();
        jQuery.ajax({
            type: 'post',
            url: 'getCategoryAjax.php',
            data: 'id=' + id,
            success: function (result) {
                jQuery('.form-control3').html(result);
            }
        })
    });

    $(".form-control3").change(function () {
        $(".form-control4").css("visibility", "visible");
        var id = jQuery(this).val();
        jQuery.ajax({
            type: 'post',
            url: 'getCategoryAjax.php',
            data: 'id=' + id,
            success: function (result) {
                jQuery('.form-control4').html(result);
            }
        })
    });
});