<?php

@include_once("./whatsapp_data.php");
@include_once("./helpers.php");
@include_once("./vars.inc.php");

$API_VERSION = "v17.0";
$PHONE_NUMBER_ID = __PHONE_NUMBER_ID__;
$ACCESS_TOKEN = __ACCESS_TOKEN__;

$dest_name = "Pollux";
$recipient_phone_number = __RECIPIENT_PHONE_NUMBER__;
$business_name = "restaurant des cuons";
$template_name = "test_template_with_image_and_dest_name";
$media = "https://www.educatout.com/images/medium/Lenfant-qui-veut-controler-les-autres-FB.jpg";
$message_text = "votre facture";

$url = "https://graph.facebook.com/$API_VERSION/$PHONE_NUMBER_ID/messages";
$headers = array(
    "Authorization: Bearer $ACCESS_TOKEN",
    "Content-Type: application/json"
);

$data_to_send = json_encode(build_data_for_image_and_dest_name($template_name, $business_name, $recipient_phone_number, $dest_name, $message_text, $media));

$media = "https://www.erudit.org/fr/revues/ltp/1958-v14-n1-ltp0952/1019961ar.pdf";
$image_link = "https://www.educatout.com/images/medium/Lenfant-qui-veut-controler-les-autres-FB.jpg";
$template_name = "test_template_with_document_and_dest_name";
$data_to_send = json_encode(build_data_for_document_and_dest_name($template_name, $business_name, $recipient_phone_number, $dest_name, $message_text, $media));
$data_to_send = json_encode(build_data_for_buttons('test_template_with_nomessage_and_1button', $business_name, $recipient_phone_number));
$data_to_send = json_encode(build_data_for_location($business_name, $recipient_phone_number));

$message_text = "message simple sans template";
$data_to_send = json_encode(build_data_for_sms($recipient_phone_number, $message_text));
$data_to_send = json_encode(build_data_for_sms_send_your_location($recipient_phone_number, $message_text));
$data_to_send = json_encode(build_data_for_yesno_sms($recipient_phone_number, $message_text));
$data_to_send = json_encode(build_push_poll_message($recipient_phone_number, $message_text, null));
$data_to_send = json_encode(build_data_for_sms_with_image($recipient_phone_number, $image_link));
$data_to_send = json_encode(build_data_for_sms_with_media($recipient_phone_number, $image_link));

echo "$url <br/>$data_to_send";
 
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, false);

curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_to_send);

echo "<br>execution: <br>";
$resp = curl_exec($curl);
echo "<br><br/>result: ". $resp;
curl_close($curl);

?>
