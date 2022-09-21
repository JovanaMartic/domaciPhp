<?php

class Kategorija{
    public $id;
    public $naziv;
    public $cena;
    public $zaposleni;

    public function __construct($id=null,$naziv=null,$cena=null,$zaposleni=null)
    {
        $this->id = $id;
        $this->naziv = $naziv;
        $this->cena = $cena;
        $this->zaposleni = $zaposleni;
    }


     public static function prikaziSve(mysqli $conn)
     {
         $query = "SELECT * FROM kategorija";
         return $conn->query($query);
     }

    //  public static function prikaziPremaZanimanju($zaposleni, mysqli $conn)
    //  {
    //     $query = "SELECT * FROM kategorija WHERE zaposleni IN (SELECT id FROM zaposleni WHERE tip_zaposlenog = (SELECT tip_zaposlenog FROM zaposleni WHERE id=$zaposleni))";
    //     return $conn->query($query);
    //  }
 
     public static function nadjikategorija($id, mysqli $conn){
         $query = "SELECT * FROM kategorija WHERE id=$id";
 
         $myObj = array();
         if($msqlObj = $conn->query($query)){
             while($red = $msqlObj->fetch_array(1)){
                 $myObj[]= $red;
             }
         }
 
         return $myObj;
 
     }

     public static function dodajkategorija(kategorija $kategorija, mysqli $conn)
     {
         $query = "INSERT INTO kategorija(naziv, cena, zaposleni) VALUES('$kategorija->naziv','$kategorija->cena','$kategorija->zaposleni')";
         return $conn->query($query);
     }

     public static  function azuriranjekategorijaa($kategorija, mysqli $conn)
     {
        $query = "UPDATE kategorija set naziv='$kategorija->naziv',cena='$kategorija->cena',zaposleni='$kategorija->zaposleni' WHERE id='$kategorija->id'";
        return $conn->query($query);
     }

 
     public static function izbrisikategorija($id1, mysqli $conn)
     {
         $query = "DELETE FROM kategorija WHERE id=$id1";
         return $conn->query($query);
     }

}


?>