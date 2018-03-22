<?php

return array(
    "driver" => "mailgun",
    "host" => "smtp.mailgun.org",
    "port" => 587,
    "from" => array(
        "address" => "postmaster@sandboxb616a325038b47c68df7459fc37f9baf.mailgun.org",
        "name" => "Shipit"
    ),
    "encryption"=>null,
    "username" => "postmaster@sandboxb616a325038b47c68df7459fc37f9baf.mailgun.org",
    "password" => "903fac534897df222c3f13e4f07d6616",
    "sendmail" => "/usr/sbin/sendmail -bs",
    "pretend" => false,
);
