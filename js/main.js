function setStyle(value) {
    $('#css').attr('href', 'css/' + value);

    var expiration = new Date();
    expiration.setTime(expiration.getTime() + 3600000);
    document.cookie = "style=" + value + "; expires=" + expiration.toGMTString();
}

function getStyleCookie() {
    var cookieArray = document.cookie.split(';');
    for( var i = 0; cookieArray.length > i; ++i ){
        var cookieStr = cookieArray[i];
        var nameplace = cookieStr.indexOf("style=");
        if( nameplace != -1)
            return cookieStr.substring((nameplace + 6), cookieStr.length);
    }
    return "";
}

function readStyleCookie() {
    var style = getStyleCookie();
    if( style != "" ) {
        $('#css').attr('herf', 'css/' + style);
    }
}
