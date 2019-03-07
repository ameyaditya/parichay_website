<?php

$encrypt_method = "AES-256-CBC";
    $secret_key = 'whatislife?';
    $secret_iv = 'lifeissomethingweird';
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    //$output = openssl_encrypt($orderid, $encrypt_method, $key, 0, $iv);
    //$output = base64_encode($output);
    $output2 = openssl_decrypt(base64_decode("Gsusjen62+$:bdidkdndho?"), $encrypt_method, $key, 0, $iv);
    echo $output2;
    ?>