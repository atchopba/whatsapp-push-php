<?php

function get_filename($url) {
    $array = explode("/", $url);
    return end($array);
}

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

function build_data_with_document_and_dest_name($template_name, $business_name, $recipient_phone_number, $dest_name, $message_text, $media) {
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
                            "type" => "document",
                            "document" => array(
                                "filename" => get_filename($media),
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


function build_data_with_document_and_no_dest_name($template_name, $business_name, $recipient_phone_number, $message_text, $media) {
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
                            "type" => "document",
                            "document" => array(
                                "filename" => get_filename($media),
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


function build_data_with_buttons($template_name, $business_name, $recipient_phone_number) {
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
                            "text" => $business_name
                        )
                    ]
                )
            ]
        )
    );
    return $data;
}


function build_data_with_location($recipient_phone_number) {
    $data = array(
        "messaging_product" => "whatsapp",
        "to" => $recipient_phone_number,
        "type" => "location",
        "location" => array(
            "latitude" => 37.758056,
            "longitude" => -122.425332,
            "name" => "META HQ",
            "address" => "1 Hacker Way, Menlo Park, CA 94025"
        )
    );
    return $data;
}


function build_data_with_sms($recipient_phone_number, $message) {
    $data = array(
        "messaging_product" => "whatsapp",
        "to" => $recipient_phone_number,
        "type" => "text",
        "text" => array(
           "body" => $message
        )
    );
    return $data;
}

?>
