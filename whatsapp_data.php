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

function build_data_for_dest_name($template_name, $business_name, $recipient_phone_number, $dest_name, $message_text) {
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


function build_data_for_image_and_dest_name($template_name, $business_name, $recipient_phone_number, $dest_name, $message_text, $media) {
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


function build_data_for_image_and_no_dest_name($template_name, $business_name, $recipient_phone_number, $message_text, $media) {
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

function build_data_for_document_and_dest_name($template_name, $business_name, $recipient_phone_number, $dest_name, $message_text, $media) {
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


function build_data_for_document_and_no_dest_name($template_name, $business_name, $recipient_phone_number, $message_text, $media) {
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


function build_data_for_buttons($template_name, $business_name, $recipient_phone_number) {
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


function build_data_for_location($recipient_phone_number) {
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


function build_data_for_sms($recipient_phone_number, $message) {
    $data = array(
        "messaging_product" => "whatsapp",
        "recipient_type" => "individual",
        "to" => $recipient_phone_number,
        "type" => "text",
        "text" => array(
            "body" => $message
        )
    );
    return $data;
}


function build_data_for_sms_with_image($recipient_phone_number, $image_link) {
    $data = array(
        "messaging_product" => "whatsapp",
        "to" => $recipient_phone_number,
        "type" => "image",
        "image" => array(
            "link" => $image_link
        )
    );
    return $data;
}


function build_data_for_sms_with_media($recipient_phone_number, $media_link) {
    $media = get_media($media_link);
    print_r($media);
    $data = array(
        "messaging_product" => "whatsapp",
        "to" => $recipient_phone_number
    );
    $data = array_merge($data, $media);
    return $data;
}


function build_data_for_yesno_sms($recipient_phone_number, $message) {
    $data = array(
        "messaging_product" => "whatsapp",
        "to" => $recipient_phone_number,
        "type" => "interactive",
        "interactive" => array(
            "type" => "button",
            "body" => array(
                "text" => $message . "\n\nPlease respond with 'Yes' or 'No'"
            ),
            "action" => array(
                "buttons" => [
                    array(
                        "type" => "reply",
                        "reply" => array(
                            "id" => "unique-postback-yes",
                            "title" => "Yes"
                        )
                    ),
                    array(
                        "type" => "reply",
                        "reply" => array(
                            "id" => "unique-postback-no",
                            "title" => "No"
                        )
                    )
                ]
            )
        )
    );
    return $data;
}


function build_data_for_sms_send_your_location($recipient_phone_number, $message) {
    $data = array(
        "messaging_product" => "whatsapp",
        "to" => $recipient_phone_number,
        "type" => "interactive",
        "interactive" => array(
            "type" => "location_request_message",
            "body" => array(
                "text" => $message
            ),
            "action" => array(
                "name" => "send_location"
            )
        )
    );
    return $data;
}

function build_push_poll_message($recipient_phone_number, $message, $items) {
    $data = array(
        "messaging_product" => "whatsapp",
        "to" => $recipient_phone_number,
        "type" => "interactive",
        "interactive" => array(
            "type" => "list",
            "body" => array(
                "text" => $message . "\n\nPlease respond with 'Yes' or 'No'"
            ),
            "action" => array(
                "button" => "Faîtes votre choix: ",
                "sections" => [
                    array(
                        "title" => "Faîtes votre choix: ",
                        "rows" => [
                            array(
                                "id" => "id1",
                                "title" => "title1",
                                "description" => "description1"
                            ),
                            array(
                                "id" => "id2",
                                "title" => "title2",
                                "description" => "description2"
                            ),
                            array(
                                "id" => "id3",
                                "title" => "title3",
                                "description" => "description3"
                            ),
                        ]
                    )
                ]
            )
        )
    );
    return $data;
}
?>
