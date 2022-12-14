<?php

class Zaposleni{
    public $id;
    public $ime;
    public $sifra;
    public $tip_zaposlenog;

    public function __construct($id=null,$ime=null,$sifra=null,$tip_zaposlenog=null)
    {
        $this->id = $id;
        $this->ime = $ime;
        $this->sifra = $sifra;
        $this->tip_zaposlenog = $tip_zaposlenog;
    }

    

    public static function dodajZaposlenog(Zaposleni $zaposleni, mysqli $conn)
    {
        $query = "INSERT INTO zaposleni(ime, sifra, tip_zaposlenog) VALUES('$zaposleni->ime','$zaposleni->sifra','$zaposleni->tip_zaposlenog')";
        return $conn->query($query);
    }

     public static function logInZaposleni($koris, mysqli $conn)
    {
        $query = "SELECT * FROM zaposleni WHERE ime='$koris->ime' and sifra='$koris->sifra'";
        return $conn->query($query);
    }

     public static function azuriranjeZaposlenog($koris, mysqli $conn)
     {
         $query = "UPDATE zaposleni set ime='$koris->ime',sifra='$koris->sifra' , tip_zaposlenog='$koris->tip_zaposlenog' WHERE id='$koris->id'";
         return $conn->query($query);
     }

     public static function prikaziZ(mysqli $conn)
     {
         $query = "SELECT * FROM zaposleni";
         return $conn->query($query);
     }

     public static function nadjiZaposlenog($id1, mysqli $conn){
        $query = "SELECT * FROM zaposleni WHERE id='$id1'";

        $myObj = array();
        if($msqlObj = $conn->query($query)){
            while($red = $msqlObj->fetch_array(1)){
                $myObj[]= $red;
            }
        }

        return $myObj;

    }
    
     public static function izbrisiZaposlenog($id1, mysqli $conn)
     {
         $query = "DELETE FROM zaposleni WHERE id='$id1'";
         return $conn->query($query);
     }

     


    

}


?>