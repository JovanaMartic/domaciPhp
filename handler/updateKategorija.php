<?php

require "../dbBroker.php";
require "../kategorija.php";


if(isset($_POST['id']) && isset($_POST['naziv']) && isset($_POST['cena']) 
&& isset($_POST['zaposleni']) 
){

    $kategorija = new Kategorija($_POST['id'],$_POST['naziv'],$_POST['cena'],$_POST['zaposleni']);
    $status = Kategorija::azuriranjeKategorije($kategorija, $conn);

    if($status){
        echo 'Success';
    }else{
        echo "Failed";
    }
}


?>