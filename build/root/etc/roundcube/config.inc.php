<?php

declare(strict_types=1);

// Looking for the default values set? See: https://github.com/roundcube/roundcubemail/blob/master/config/defaults.inc.php
$config = [
    'product_name'            => 'MailTrap Roundcube',
    'db_dsnw'                 => 'sqlite:////var/lib/roundcube/db/sqlite.db',
    'des_key'                 => '###DES_KEY###',
    'plugins'                 => [
        'archive',
        'zipdownload',
        'contextmenu',
        'keyboard-shortcuts',
        'message-highlight',
        'enigma',
        'emoticons',
    ],
    'session_lifetime'        => 1440,
    'message_show_email'      => true,
    'protect_default_folders' => true,
    'skin'                    => 'elastic',
];