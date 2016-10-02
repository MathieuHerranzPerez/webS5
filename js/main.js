/**
 * change the style and create a cookie
 * @param value
 * @param name
 */
function setStyleCookies(value, name) {
    $('#css').attr('href', 'css/' + value);                     // change style
    console.log('css/' + value);

    var today = new Date();
    var expires = new Date();
    expires.setTime(today.getTime() + (360*24*60*60*1000));     // 1 year
    document.cookie = name + "=" + encodeURIComponent(value) + ";expires=" + expires.toGMTString();
}

/**
 * read the cookie and return its value
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
 * look if there is already a cookie and change the style
 */
function readStyleCookie() {
    var style = getStyleCookie('style');
    if(style != null) {
        $('#css').attr('href', 'css/' + style);
    }
}

function displayAnchor(id) {
    if (window.pageYOffset > 120)
        $(id).fadeIn();
    else
        $(id).fadeOut();
}



$(document).ready(function() {
    readStyleCookie();

    $('.dropBtn').click(function () {
        $('.ulTopNav').slideToggle('medium');
    })

    window.onresize = function() {
        var theWidth = window.innerWidth;
        if(theWidth > 1080) {
            $('.ulTopNav').css('display','block');
        }
    }
    /* when you click on an anchor link */
    $('.returnHLink').click(function(){
        var id = $(this).attr("href");
        $('html, body').animate({
            scrollTop: $(id).offset().top
        });
    });
});
