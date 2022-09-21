<?php

require "../dbBroker.php";
require "../kategorija.php";

if(isset($_POST['id1'])) 
{

    $id_ = $_POST['id1'];

    $status = Kategorija::izbrisiKategoriju($id_,$conn);

    if($status){
        echo 'Success';
    }else{
        echo "Failed";
    }
}



?>