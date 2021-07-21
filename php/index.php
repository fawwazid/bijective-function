<?php $Alphabet = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

/**
 * Encode
 *
 * @param  int $e
 * @return string
 */
function Encode(int $e = 0) : string
{
    global $Alphabet;
    $encode = "";

    if (!is_numeric($e)) {
        return 'You can only encode a number';
    }
    if ($e == 0) {
        return $Alphabet[0];
    }
    while ($e > 0) {
        $encode .= $Alphabet[$e % strlen($Alphabet)];
        $e = floor($e / strlen($Alphabet));
    }
    return strrev($encode);
}
/**
 * Decode
 *
 * @param  string $d
 * @return int
 */
function Decode(string $d = '0') : int
{
    global $Alphabet;
    if (!is_string($d)) {
        return 'You can only decode a string';
    }
    $e = 0;
    for ($i = 0; $i < strlen($d); $i++) {
        $de = strpos($Alphabet, $d[$i]);
        $e = $e * strlen($Alphabet) + $de;
    }
    return $e;
}

echo "Encode: " . Encode(249) . "<br><br>"; // 41
echo "Decode: " . Decode("41"); //249
