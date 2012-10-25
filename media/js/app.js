function updateContent(data) {
    if (data == null)
        return;
    $("#wrapContent").html(data);
}

window.addEventListener('popstate', function (event) {
    console.log('popstate fired!');
    updateContent(event.state);
});

jQuery(document).ready(function ($) {
    /******Nav*******/
    $("#navPrincipal a").click(function () {
        var dir = $(this).attr('href');
        cargar_ajax(dir);
        return false;
    });
});


function cargar_ajax(dir) {
    var url = location.href.substring(0, location.href.length - location.href.split("").reverse().join("").indexOf('/')) + dir;

    $.ajax({
        url:url
    }).done(function (html) {
            $("#wrapContent").html(html);
            var pag ="#"+dir;
            switch (dir) {

                case "home":
                    $(pag).css('display', 'none').show('slow');
                    window.history.pushState(html, 'home', url);
                    break;

                case "servicios":
                    $(pag).css('display', 'none').slideDown('slow');
                    window.history.pushState(html, 'servicios', url);
                    break;

                case "productos":
                    $(pag).css(
                        {'position':'relative',
                            'bottom':'+40em'}).animate({"bottom":"-=40em"}, "slow");
                    window.history.pushState(html, 'productos', url);
                    break;

                case "clientes":
                    $(pag).css(
                        {'position':'relative',
                            'left':'+40em'}).animate({"left":"-=40em"}, "slow");
                    window.history.pushState(html, 'clientes', url);
                    break;

                case "contacto":

                    $(pag).css('display', 'none').show('slow');
                    window.history.pushState(html, 'contacto', url);
                    break;

            }
        });
}