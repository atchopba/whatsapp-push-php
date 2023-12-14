<?php

function build_data_without_dest_name($template_name, $business_name, $recipient_phone_number, $message_text) {
    $data = array(
        "messaging_product" => "whatsapp",
        "to" => $recipient_phone_number,
        "type" => "template",
        "template" => array(
            "name" => $template_name,
            "language" => array(
                "code" => "en_US"
            ),
            "components" => [
                array(
                    "type" => "body",
                    "parameters" => [
                        array(
                            "type" => "text",
                            "text" => $message_text
                        ),
                        array(
                            "type" => "text",
                            "text" => $business_name
                        )
                    ]
                )
            ]
        )
    );
    return $data;
}

function build_data_with_dest_name($template_name, $business_name, $recipient_phone_number, $dest_name, $message_text) {
    $data = array(
        "messaging_product" => "whatsapp",
        "to" => $recipient_phone_number,
        "type" => "template",
        "template" => array(
            "name" => $template_name,
            "language" => array(
                "code" => "en_US"
            ),
            "components" => [
                array(
                    "type" => "body",
                    "parameters" => [
                        array(
                            "type" => "text",
                            "text" => $dest_name
                        ),
                        array(
                            "type" => "text",
                            "text" => $message_text
                        ),
                        array(
                            "type" => "text",
                            "text" => $business_name
                        )
                    ]
                )
            ]
        )
    );
    return $data;
}


function build_data_with_image_and_dest_name($template_name, $business_name, $recipient_phone_number, $dest_name, $message_text, $media) {
    $data = array(
        "messaging_product" => "whatsapp",
        "to" => $recipient_phone_number,
        "type" => "template",
        "template" => array(
            "name" => $template_name,
            "language" => array(
                "code" => "en_US",
                "policy" => "deterministic"
            ),
            "components" => [
                array(
                    "type" => "header",
                    "parameters" => [
                        array(
                            "type" => "image",
                            "image" => array(
                                "link" => $media  # "https://www.educatout.com/images/medium/Lenfant-qui-veut-controler-les-autres-FB.jpg"  # noqa
                            )
                        )
                    ]
                ),
                array(
                    "type" => "body",
                    "parameters" => [
                        array(
                            "type" => "text",
                            "text" => $dest_name
                        ),
                        array(
                            "type" => "text",
                            "text" => $message_text
                        ),
                        array(
                            "type" => "text",
                            "text" => $business_name
                        )
                    ]
                )
            ]
        )
    );
    return $data;
}    


function build_data_with_image_and_no_dest_name($template_name, $business_name, $recipient_phone_number, $message_text, $media) {
    $data = array(
        "messaging_product" => "whatsapp",
        "to" => $recipient_phone_number,
        "type" => "template",
        "template" => array(
            "name" => $template_name,
            "language" => array(
                "code" => "en_US",
                "policy" => "deterministic"
            ),
            "components" => [
                array(
                    "type" => "header",
                    "parameters" => [
                        array(
                            "type" => "image",
                            "image" => array(
                                "link" => $media  # "https://www.educatout.com/images/medium/Lenfant-qui-veut-controler-les-autres-FB.jpg" # noqa
                            )
                        )
                    ]
                ),
                array(
                    "type" => "body",
                    "parameters" => [
                        array(
                            "type" => "text",
                            "text" => $message_text
                        ),
                        array(
                            "type" => "text",
                            "text" => $business_name
                        )
                    ]
                )
            ]
        )
    );
    return $data;
}

?>
