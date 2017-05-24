<?php
$azure_key = "277fae4b182b47eb927040b074c6ff4d";

$azure_key = urlencode ($azure_key);

// Get a 10-minute access token for Microsoft Translator API.
$url = "https://api.cognitive.microsoft.com/sts/v1.0/issueToken";

$ch = curl_init();
$data_string = json_encode('{body}');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string),
    'Ocp-Apim-Subscription-Key: ' . $azure_key
));
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);  
$rsp = curl_exec($ch); 

print $rsp;
?>