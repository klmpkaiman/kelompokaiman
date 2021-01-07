<?php

// class buah
class buah{
  
  // property class buah
  public $hewan_saya;
  
  // method pada class buah
  function berinama($saya) {
      $this->hewan_saya=$saya;
  }
}

// class turunan atau sub class dari class buah
// kita menghubungkan class dengan syntax extends
class teman extends buah{
  
    //property class warna
    public $hewan_teman;
    
    // method pada class buah teman
    function berinamateman($teman){
        $this->hewan_teman=$teman;
    }
}

// instansiasi class buah teman
$hewan = new teman;

// method buah teman adalah method pada class buah
$hewan->berinama(" singa ");
$hewan->berinamateman(" singa ");

// menampilkan isi property
echo "hewan Yang Saya Miliki Adalah : " .$buah->buah_saya . "<br/>" ;
echo " hewan Yang Teman Saya Miliki Adalah : " .$buah->buah_teman;

?>
