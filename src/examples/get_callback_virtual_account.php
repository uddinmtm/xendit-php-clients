<?php
    require('config/xendit_php_client_config.php');
    require('XenditPHPClient.php');
    
    $options['secret_api_key'] = constant('SECRET_API_KEY');

    $xenditPHPClient = new XenditClient\XenditPHPClient($options);

    $fva_id = $argv[1];

    $response = $xenditPHPClient->getCallbackVirtualAccount($fva_id);
    print_r($response);
?>
