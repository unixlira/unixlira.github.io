var url   = window.location.search.replace("?", "");
var items = url.split("=");

$(window).load(function() {
    
    if(items[1] == "true"){

        $('#modalSendTrue').modal('show');

        setTimeout(function() {
            $('#modalSendTrue').modal('hide');
        }, 5000);

        setInterval(function(){
            window.location.href="https://unixlira.github.io/"; 
        }, 5600);
    }

});