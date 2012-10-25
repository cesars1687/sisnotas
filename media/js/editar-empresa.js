function readURL(input) {
    console.log("se cargara la imagen");
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#img_prev')
                .attr('src', e.target.result)
        };
        reader.readAsDataURL(input.files[0]);
    }
}
$(document).ready(function () {
    $('#habilita-passw').change(function () {
        if ($(this).is(':checked')) {
            $('#password').removeAttr('readonly');
            $('#password').val('');
            $('#password').show();
        } else {
            $('#password').attr('readonly', '');
            $('#password').val('***********');
            $('#password').hide();
        }
    });
    $('#habilita-imagen').change(function () {
        if ($(this).is(':checked')) {
            $('#imagen').show();
        } else {
            $('#imagen').hide();
        }
    });

});