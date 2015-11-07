function base_url() {
    pathArray = window.location.href.split( '/' );
    protocol = pathArray[0];
    host = pathArray[2];
    url = protocol + '//' + host;

    return url;
}

var base_url = base_url();
