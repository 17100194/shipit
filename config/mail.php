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
    "password" => "plan9arfa",
    "sendmail" => "/usr/sbin/sendmail -bs",
    "pretend" => false,
);
