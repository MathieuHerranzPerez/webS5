/**
 * Change le style en value.css et creer un cookie name d'une durée de 1 an
 * @param value
 * @param name
 */
function setStyleCookies(value, name) {
    $('#css').attr('href', 'css/' + value);                     // on change de style

    var today = new Date();
    var expires = new Date();
    expires.setTime(today.getTime() + (360*24*60*60*1000));     // 1 an
    document.cookie = name + "=" + encodeURIComponent(value) + ";expires=" + expires.toGMTString();
}

/**
 * Lit le cookie name et return sa valeur
 * @param name
 * @returns {*}
 */
function getStyleCookie(name) {
    var cookContent = document.cookie, cookEnd, i, j;
    name = name + "=";
    for (i=0, c=cookContent.length; i<c; i++) {
        j = i + name.length;
        if (cookContent.substring(i, j) == name) {
            cookEnd = cookContent.indexOf(";", j);
            if (cookEnd == -1) {
                cookEnd = cookContent.length;
            }
            return decodeURIComponent(cookContent.substring(j, cookEnd));
        }
    }
    return null;
}

/**
 * Regarde si il y a un cookie pour le style, dans quel cas adapte le style
 */
function readStyleCookie() {
    var style = getStyleCookie('style');
    if(style != "") {
        $('#css').attr('href', 'css/' + style);
    }
}



$('.topnav li a').click( function () {

    var name = $(this).attr("name");

    var actualSection = $('nav .active').attr("name");
    $("." + actualSection).removeClass("active");
    $("." + name).addClass("active");

    $("#"+ actualSection).slideUp( function() {
        $("#"+ name).fadeIn();
    });
    console.log(actualSection + " -> " + name);
});
