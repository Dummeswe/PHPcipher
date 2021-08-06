<?php
function encode_string($string)
{
    $alfa = range('a','z');
    $alfa[] = " ";
    $alfa_reversed = array_flip($alfa);
    $msg = strtolower($string);
    $msg_array = str_split($msg);
    $final[] = ""; 

    foreach ($msg_array as $value)
    {
        
        $final[] = $alfa_reversed[$value];
        $final[] = " ";
        $myJSON = json_encode($alfa_reversed[$value], JSON_FORCE_OBJECT);

    }
    
    $encoded_string = implode("",$final);
    return $encoded_string;
    

}

function decode_string($encoded_string)
{
    //make string lowercase
    $decoded_string = strtolower($encoded_string);
    $msg = explode(" ", $decoded_string);
    $alfa = range('a','z');
    $alfa[] = " ";
    
    var_dump($decoded_string);

    foreach( $msg as $value)
    {
        $final[] = "";
        $final[] = $alfa[$value];
        $final[] = " ";
        echo $alfa[$value];
    }
    $result = implode(" ",$final);
    return $result;

}



$msg = 'This is a secret message';

echo "<br>";
echo "<br>";

$encodedx = encode_string($msg);
echo $encodedx;
echo "<br>";



$decoded = decode_string($encodedx);
print($decoded);