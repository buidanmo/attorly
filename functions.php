<?php

    define("PRIVATE_PATH", dirname(__FILE__));
    define("HEADER", PRIVATE_PATH.'/components/header');
    define("FOOTER", PRIVATE_PATH.'/components/footer');
    define("TEMPLATES",PRIVATE_PATH.'/components/templates');
    define("SHORTCODE",PRIVATE_PATH.'/components/shortcode');

    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://localhost/attorly/api/menu.json',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    $menu = json_decode($response);
    