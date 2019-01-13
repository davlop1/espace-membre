<?php

function account_exists(): array {
    return[
        'id' =>2,
        'password' => 'azerty123'
    ];
}

function account_informations(): array {
    return[];
}

function mail_free():bool {
    return false;
}

function mail_html( string $subject, string $message){

    $headers = "From: david <admin@espacemembre.dev>" . "\r\n"; 
    $headers.= "MIME-Version: 1.0\r\n";
    $headers.= "Content-type: text/html; charset=iso-utf-8";

    mail( $_POST['email'],$subject,$message,$headers );

}

function password_ok():bool {
    return true;}

function password_save(string $password = ''){
    $newpassword = $_POST['newpassword'] ?? $password;

    if ( isset( $_POST['email'])){
        // gestion pour l'oubli de mot de passe
    }
    else{
        // gestion pour changement de mot de passe
    }
}
