/**
 * Created with JetBrains PhpStorm.
 * User: cesar
 * Date: 13/09/12
 * Time: 11:59 PM
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function () {
    $('#habilita-passw').change(function () {
        if ($(this).is(':checked')) {
            $('#password').removeAttr('readonly');
            $('#password').val('');
            $('#password').show();
        } else {
            $('#password').attr('readonly', '');
            $('#password').val('*************************');
            $('#password').hide();
        }
    });

});