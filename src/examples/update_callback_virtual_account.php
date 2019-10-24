<?php
    require('config/xendit_php_client_config.php'); 
    require('XenditPHPClient.php');
    
    $options['secret_api_key'] = constant('SECRET_API_KEY');

    $xenditPHPClient = new XenditClient\XenditPHPClient($options);

    $fva_id = $argv[1];
    $amount = $argv[2];

    $callback_virtual_account_options = [
        'is_closed' => true, 
        'expected_amount' => $amount
    ];

    $response = $xenditPHPClient->updateCallbackVirtualAccount($fva_id, $callback_virtual_account_options);
    print_r($response);
?>
