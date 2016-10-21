var styleCss;
/**
 * changes the style and creates a cookie
 * @param value value of the cookie
 * @param name name of the cookie
 */
function setStyleCookies(value, name) {
    $('#css').attr('href', 'css/' + value);                     // change style

    styleCss = value;
    var today = new Date();
    var expires = new Date();
    expires.setTime(today.getTime() + (360*24*60*60*1000));     // 1 year
    document.cookie = name + "=" + encodeURIComponent(value) + ";expires=" + expires.toGMTString();

    changeBtn(value);
}

/**
 * read the cookie and return its value
 * @param name name of the cookie we have to find
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
 * looks if there is already a cookie and changes the style
 */
function readStyleCookie() {
    var style = getStyleCookie('style');
    styleCss = style;
    if(style != null) {
        $('#css').attr('href', 'css/' + style);
    }
    changeBtn(style);
}

/**
 * Changes the attribute onClick of the drop button when the style has changed
 * @param style name of the current style
 */
function changeBtn(style) {
    if(style == "style2.css") {
        $('.dropBtn').replaceWith("<a class=\"dropBtn icon\" href=\"#\" onClick=\"displayMenu('1'), reduceMargin()\">☰</a>");
    }
    else {
        $('.dropBtn').replaceWith("<a class=\"dropBtn icon\" href=\"#\" onClick=\"displayMenu('2')\">☰</a>");
    }
}

/**
 * displays the menu, used when someone has just clicked on the drop button
 * @param num
 */
function displayMenu(num) {
    if (num == 2) {
        $('.ulTopNav').slideToggle('medium');
    }
    else {
        $('#prenomNom').toggle(
            function() {
                $('.ulTopNav').animate({left: "100px"}, "slow");
            },
            function() {
                $('.ulTopNav').animate({left: "0px"}, "slow");
            }
        );
        $('.ulTopNav').toggle(
            function() {
                $('.ulTopNav').animate({left: "100px"}, "slow");
            },
            function() {
                $('.ulTopNav').animate({left: "0px"}, "slow");
            }
        );
    }
}

/**
 * Only in the second style, moves the container to reduce the page size
 */
function reduceMargin() {
    console.log($('.container').css('margin-left'));
    if($('.container').css('margin-left') == '290px')
        $('.container').css('margin-left', '28px');
    else
        $('.container').css('margin-left', '290px');
}

/**
 * displays a button when the screen has scrolled more than 120px
 * @param id
 */
function displayAnchor(id) {
    if (window.pageYOffset > 120)
        $(id).fadeIn();
    else
        $(id).fadeOut();
}

/* CONTACT */
/**
 * checks if the name is composed only of letters
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
 * checks if the mail seems "right"
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
 * checks if the date is corrected
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

/**
 * Highlights the field when error or success
 * @param field
 * @param erreur
 */
function highlight(field, erreur) {
    if(erreur)
        $(field).css('border', '2px solid red')
                .css('background-color', '#FFD5D4');
    else
        $(field).css('border', '2px solid green')
                .css('background-color', '#CDFFCB');
}

/**
 * displays, with the function alert, param str
 * @param str
 */
function displayAlert(str) {
    alert(str);
}



$(document).ready(function() {
    readStyleCookie();

    window.onresize = function() {
        var theWidth = window.innerWidth;
        if(theWidth > 1080 && styleCss == "main.css") {
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
