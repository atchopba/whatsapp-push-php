<?php

function get_file_extension($url) {
    $array = explode('.', $url);
    return end($array);
}


function get_filename_2($url) {
    $array = explode('/', $url);
    return end($array);
}


function get_media($media) {
    $file_extension = get_file_extension($media);
    switch ($file_extension) {
        case 'jpg':
        case 'JPG':
        case 'png':
        case 'PNG':
            $media = array(
                "type" => "image",
                "image" => array(
                    "link" => $media  # "https://www.educatout.com/images/medium/Lenfant-qui-veut-controler-les-autres-FB.jpg" # noqa
                )
            );
            break;
        case 'mp4':
        case 'MP4':
            $media = array(
                "type" => "video",
                "video" => array(
                    "link" => $media  # "https://www.educatout.com/images/medium/Lenfant-qui-veut-controler-les-autres-FB.jpg" # noqa
                )
            );
            break;
        case 'pdf':
        case 'PDF':
            $media = array(
                "type" => "document",
                "document" => array(
                    "filename" => get_filename_2($media),
                    "link" => $media  # "https://www.educatout.com/images/medium/Lenfant-qui-veut-controler-les-autres-FB.jpg" # noqa
                )
            );
            break;
        default:
            $media = null;
            break;
    }
    return $media;
}

?>
