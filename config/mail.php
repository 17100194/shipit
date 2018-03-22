<?php

return array(
    "driver" => "smtp",
    "host" => "smtp.gmail.com",
    "port" => 587,
    "from" => array(
        "address" => "iloveshipit@gmail.com",
        "name" => "Shipit"
    ),
    "encryption"=>"tls",
    "username" => "iloveshipit@gmail.com",
    "password" => "ganrvnybansaqfex",
    "sendmail" => "/usr/sbin/sendmail -bs",
    "pretend" => false,
    'stream' => [
        'ssl' => [
            'allow_self_signed' => true,
            'verify_peer' => false,
            'verify_peer_name' => false,
        ],
    ],
);
