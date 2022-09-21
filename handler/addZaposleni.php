<?php

require "../dbBroker.php";
require "../zaposleni.php";


if(isset($_POST['ime']) && isset($_POST['sifra'])  
){

    $zaposleni = new Zaposleni(null,$_POST['ime'],$_POST['sifra']);
    $status = Zaposleni::dodajZaposlenog($zaposleni, $conn);

    if($status){
        echo 'Success';
    }else{
        echo "Failed";
    }
}



?>