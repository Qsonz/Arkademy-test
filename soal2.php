<?php

$name = "";
$password = "";
$pesanerror1 = "";
$pesanerror2 = "";

 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $pesanerror1 = "Masukkan Nama.";
    } 
        elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-z._]{8,12}+$/")))){
        $pesanerror1 = "Nama terdiri dari 8 - 12 huruf. Hanya '.' dan '_' yang dibolehkan" ;
    } 
        else{
        $name = $input_name;
    }

    $input_password = trim($_POST["password"]);
    if(empty($input_password))
    {
        $pesanerror2 = "Password Belum di isi.";
    }
        elseif($pass,("/^.+.+\..+$/"))
        {

        $pesanerror2 = "Password minimal 9 digit. Dengab Kombinai Angka Dan Huruf<br>";
    
        }
        else 
        {
            $password = $input_password;
        }
}