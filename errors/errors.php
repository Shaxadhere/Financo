<?php


if(http_response_code() == 400){
    redirectWindow("/Financo/errors/400");
}

if(http_response_code() == 404){
    redirectWindow("/Financo/errors/404");
}

if(http_response_code() == 500){
    redirectWindow("/Financo/errors/500");
}

if(http_response_code() == 503){
    redirectWindow("/Financo/errors/503");
}

if(http_response_code() == 505){
    redirectWindow("/Financo/errors/505");
}



?>