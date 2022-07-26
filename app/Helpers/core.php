<?php

function gravatar(string $value) {
    try {
        $hash = md5(strtolower(trim($value)));
        $str = file_get_contents('https://www.gravatar.com/' . $hash . '.php');
        $profile = unserialize($str);
        if (is_array($profile) && isset($profile['entry']))
            return $profile['entry'][0]['thumbnailUrl'];
    } catch (\Throwable $th) {
        return 'http://www.gravatar.com/avatar/?d=mp';
    }
}

function fromJson($value) {
    return json_decode($value, true);
}

function toJson($value) {
    return json_encode($value, true);
}

function toArray($value) {
    $value = json_encode($value, true);
    return json_decode($value, true);
}

function toObject($array) {
    // First we convert the array to a json string
    $json = json_encode($array);

    // The we convert the json string to a stdClass()
    $object = json_decode($json);

    return $object;
}
