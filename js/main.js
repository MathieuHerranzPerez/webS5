/**
 * change the style and create a cookie
 * @param value
 * @param name
 */
function setStyleCookies(value, name) {
    $('#css').attr('href', 'css/' + value);                     // change style

    var today = new Date();
    var expires = new Date();
    expires.setTime(today.getTime() + (360*24*60*60*1000));     // 1 year
    document.cookie = name + "=" + encodeURIComponent(value) + ";expires=" + expires.toGMTString();

    displayGlob(value);
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
    displayGlob(style);
}

/**
 * change the menu button when the style has been changed
 * @param value
 */
function displayGlob(value) {
    if(value == "style2.css") {
        $('.dropBtn').replaceWith("<a class=\"dropBtn icon\" href=\"#\" onClick=\"displayMenu('1'), listenSong()\"></a>");
    }
    else {
        $('.dropBtn').replaceWith("<a class=\"dropBtn icon\" href=\"#\" onClick=\"displayMenu('2')\">☰</a>");
    }
}

function displayMenu(num) {
    if(num == 2) {
        $('.ulTopNav').slideToggle('medium');
    }
    else {
        var theWidth = window.innerWidth;
        if($('.ulTopNav').css('transform') == 'matrix(1, 0, 0, 1, 95, 0)' || $('.ulTopNav').css('transform') == 'matrix(1, 0, 0, 1, 60, 0)')
        {
            if(theWidth < 1024)
                $('.ulTopNav').css({'transform' : 'translateX( -210px)'});
            else
                $('.ulTopNav').css({'transform' : 'translateX( -260px)'});
        }
        else {
            if(theWidth < 1024)
                $('.ulTopNav').css({'transform': 'translateX(60px)'});
            else
                $('.ulTopNav').css({'transform': 'translateX(95px)'});
        }
    }
}

function displayAnchor(id) {
    if (window.pageYOffset > 120)
        $(id).fadeIn();
    else
        $(id).fadeOut();
}

function listenSong() {
    soundManager.url = '../music/soundmanager/swf/';
    soundManager.debugMode = true;
    soundManager.play("premier_son","../music/tp.mp3");
}

/* CONTACT */
/**
 * check if the name is composed only of letters
 * @param field
 * @returns {boolean}
 */
function checkName(field) {
    console.log($(field).val());
    var regex = new RegExp('[^A-Za-z]');
    if($(field).val().length < 2 || $(field).val().length > 30 || regex.test($(field).val()))
    {
        highlight(field, true);
        return false;
    }
    else
    {
        highlight(field, false);
        return true;
    }
}
/**
 * check if the mail seems "right"
 * @param field
 * @returns {boolean}
 */
function checkMail(field) {
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    console.log(regex.test($(field).val()));
    if($(field).val().length < 5 || $(field).val().length > 50 || !regex.test($(field).val()))
    {
        highlight(field, true);
        return false;
    }
    else
    {
        highlight(field, false);
        return true;
    }
}

/**
 * check if the date is corrected
 * @param field
 * @returns {boolean}
 */
function checkBirth(field) {
    var regex = /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/;
    console.log(regex.test($(field).val()));
    if(!regex.test($(field).val()))
    {
        highlight(field, true);
        return false;
    }
    else
    {
        highlight(field, false);
        return true;
    }

}

function highlight(field, erreur) {
    if(erreur)
        $(field).css('border', '2px solid red')
                .css('background-color', '#FFD5D4');
    else
        $(field).css('border', '2px solid green')
                .css('background-color', '#CDFFCB');
}

/**
 * display, with the function alert, param str
 * @param str
 */
function displayAlert(str) {
    alert(str);
}



$(document).ready(function() {
    readStyleCookie();

    window.onresize = function() {
        var theWidth = window.innerWidth;
        if(theWidth > 1080) {
            $('.ulTopNav').css('display','block');
        }
    };
    /* when you click on an anchor link */
    $('.returnHLink').click(function(){
        var id = $(this).attr("href");
        $('html, body').animate({
            scrollTop: $(id).offset().top
        });
    });
});
