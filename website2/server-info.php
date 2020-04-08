<?php
    #$_SERVER SUPERGLOBAL Variable

    // Create Server Associative Array
    $server = [
        "Host Server Name" => $_SERVER['SERVER_NAME'],
        "Host Header" => $_SERVER['HTTP_HOST'],
        "Server Software" => $_SERVER['SERVER_SOFTWARE'],
        "Document Root" =>  $_SERVER['DOCUMENT_ROOT'],
        'Current Page' => $_SERVER['PHP_SELF'],
        'Script Name' => $_SERVER['SCRIPT_NAME'],
        'Absolute Path' => $_SERVER["SCRIPT_FILENAME"]
    ];
    // echo $server['Document Root'];
    // print_r($server);

    // Create Client Associative Array
    $client = [
        "Client System Info" => $_SERVER['HTTP_USER_AGENT'],
        "Client IP Adress" => $_SERVER["REMOTE_ADDR"],
        "Remote PORT" => $_SERVER["REMOTE_PORT"]
    ];

    // print_r($client);
?>