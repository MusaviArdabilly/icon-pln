<?php

return [

    'usernames' => [
        'ldap' => env('LDAP_USER_ATTRIBUTE', 'userprincipalname'), // was just 'userprincipalname'
        'eloquent' => 'username', // was 'email'
    ],
    
    'sync_attributes' => [
        // 'field_in_local_db' => 'attribute_in_ldap_server',
        'username' => 'uid', // was 'email' => 'userprincipalname',
        'name' => 'cn',
        'email' => 'mail',
    ],
];