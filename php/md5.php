<?php

/*$input = "usuario@usuario.com";

$encrypted = encryptIt( $input );
$decrypted = decryptIt( $encrypted );

echo $encrypted . '<br />' . $decrypted;*/

function encryptIt( $q ) {
    $cryptKey  = 'ilovecostepagina';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}

function decryptIt( $q ) {
    $cryptKey  = 'ilovecostepagina';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
}
?>