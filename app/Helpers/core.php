<?php

function gravatar(string $value)
{
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
