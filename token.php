<?php
$ClientID="scriptTranslate-01";
$ClientSecret="4evraNcG2aHC0uBsUAr2TYybntciPEwWht9fGaegdMw=";

$ClientSecret = urlencode ($ClientSecret);
$ClientID = urlencode($ClientID);

// Get a 10-minute access token for Microsoft Translator API.
$url = "https://datamarket.accesscontrol.windows.net/v2/OAuth2-13";
$postParams = "grant_type=client_credentials&client_id=$ClientID&client_secret=$ClientSecret&scope=http://api.microsofttranslator.com";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);  
$rsp = curl_exec($ch); 

print $rsp;
?>