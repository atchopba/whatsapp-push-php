<?php

@include_once("./whatsapp_data.php");
@include_once("./vars.inc.php");

$API_VERSION = "v17.0";
$PHONE_NUMBER_ID = __PHONE_NUMBER_ID__;
$ACCESS_TOKEN = __ACCESS_TOKEN__;

$dest_name = "Pollux";
$recipient_phone_number = "+33631957338";
$business_name = "restaurant des cuons";
$template_name = "test_template_with_image_and_dest_name";
$media = "https://www.educatout.com/images/medium/Lenfant-qui-veut-controler-les-autres-FB.jpg";
$message_text = "votre facture";

$url = "https://graph.facebook.com/$API_VERSION/$PHONE_NUMBER_ID/messages";
$headers = array(
    "Authorization: Bearer $ACCESS_TOKEN",
    "Content-Type: application/json"
);

$data_to_send = json_encode(build_data_with_image_and_dest_name($template_name, $business_name, $recipient_phone_number, $dest_name, $message_text, $media));

$media = "https://www.erudit.org/fr/revues/ltp/1958-v14-n1-ltp0952/1019961ar.pdf";
$template_name = "test_template_with_document_and_dest_name";
$data_to_send = json_encode(build_data_with_document_and_dest_name($template_name, $business_name, $recipient_phone_number, $dest_name, $message_text, $media));

echo "$url <br/>$data_to_send";
 
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_to_send);

echo "<br>result: <br>";
$resp = curl_exec($curl);
echo $resp;
curl_close($curl);

?>
