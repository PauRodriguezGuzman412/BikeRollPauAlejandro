<?php 
return [ 
    'client_id' => 'AdiSnnNtIfsrh8BVUshgOQ25AEbi71g6UC06n7jtV5gP66r_EHwm5BYxpojwOoR0OCrepxgpeUz9B7Lb',
	'secret' => 'EEDor5aDciPqDaI8e3qMPismqmMQNQLUDt6PU5HQ_8FB132vpZYKzECd7tlcpkBO63w8Zb2np9D9bjV_',
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'AUTHENTICATION_STATUS'=>'X',
        'http.ConnectionTimeOut' => 30,
        'LANDINGPAGE'=>'Billing',
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal_new.log',
        'log.LogLevel' => 'ERROR'
    ),
];