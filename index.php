<?php

class RestApi {
  
  function getData($url,$token) {

    $curl = curl_init();
    
    $headers = array(
      'Content-Type:application/json',
      'Authorization:'.$token
    );

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_URL,$url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);

    $result = curl_exec($curl);
      
    curl_close($curl); 
    return $result;
  }
}

// $obj = new RestApi();

// // $headers = apache_request_headers();
// // $token = $headers['Authorization'];

// // $url = $_GET["url"];
// // echo $token;
// // echo $url;
// $url = 'https://devsow.wpengine.com/wp-json/media/posts/';
// $token = 'Basic';
// $data = $obj->getData($url, $token);
// echo $data;
?>
