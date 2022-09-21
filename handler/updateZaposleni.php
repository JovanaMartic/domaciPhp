<?php

require "../dbBroker.php";
require "../zaposleni.php";


if(isset($_POST['id']) && isset($_POST['ime']) && isset($_POST['sifra'])  
){

    $zaposleni = new Zaposleni($_POST['id'],$_POST['ime'],$_POST['sifra']);
    $status = Zaposleni::azuriranjeZaposlenog($zaposleni, $conn);

    if($status){
        echo 'Success';
    }else{
        echo "Failed";
    }
}



?>
