<?php


    //Database config
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','root');
    define('DB_NAME','documentation');

    //URL config Front
    define('BASE_URL', 'http://localhost:8888/material-doc-3/');
    define('CSS_URL', BASE_URL.'bundle-home.css');
    define('JS_URL', BASE_URL.'static/js/');
    define('IMG_URL', BASE_URL.'static/img/');
    define('MEDIA_URL',BASE_URL.'static/media/');

    //URL config Admin
    define('ADMIN_URL', 'http://localhost:8888/material-doc-3/admin/');
    define('ADMIN_CSS', ADMIN_URL.'static/css/');
    define('ADMIN_JS', ADMIN_URL.'static/js/');
    define('ADMIN_IMG', ADMIN_URL.'static/img/');

    //Paypal
    define('PAYPAL_EMAIL','etic2018@email.com');
    define('PAYPAL_ID','5C35KGP6NCC94');
    define('PAYPAL_SUBMIT_URL','https://www.sandbox.paypal.com/cgi-bin/webscr');


 ?>
