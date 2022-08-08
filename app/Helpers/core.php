<?php

use Illuminate\Support\Facades\DB;

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

function fromJson($value)
{
    return json_decode($value, true);
}

function toJson($value)
{
    return json_encode($value, true);
}

function toArray($value)
{
    $value = json_encode($value, true);
    return json_decode($value, true);
}

function toObject($array)
{
    // First we convert the array to a json string
    $json = json_encode($array);

    // The we convert the json string to a stdClass()
    $object = json_decode($json);

    return $object;
}

function throwException(\Throwable $th)
{
    if (env('APP_DEBUG') === true) {
        dd($th);
    } else {
        return $th->getMessage();
    }
}

function beginTransaction()
{
    \DB::beginTransaction();
}

function commit()
{
    \DB::commit();
}

function rollback()
{
    \DB::rollback();
}


/**
 * Retorna um novo array com as keys do primeiro array e os valores do segundo array
 */
function fillKeysWith(array $keys, array  $array, bool $unsetNullables = false)
{

    // Vemos quais as achaves do array serão mantidas
    $diff = array_diff(array_keys($array), $keys);
    foreach ($array as $key => $value) {
        // Se a chave estiver `key` existir no array `diff` ou se for nulo removemos do array a chave do loop
        if (in_array($key, $diff) || ($unsetNullables &&  (!$array[$key] || $array[$key] == ""))) {
            unset($array[$key]);
        }
    }
    // Retorna o array
    return $array;
}
