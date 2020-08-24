<?php

include "./hewan.php";
include "./fight.php";

    class harimau {
        use hewan, fight;

        function __construct()
        {
            // $this->nama = "Harimau";
            $this->jumlahKaki = 4;
            $this->keahlian = "lari cepat";
            $this->attackPower = 7;
            $this->defencePower = 8;
        }

        public function getInfoHewan(){
            echo "Nama: " . $this->nama . "<br>" 
                . "Darah: " . $this->darah . "<br>"
                . "Jumlah Kaki: " . $this->jumlahKaki . "<br>" 
                . "Keahlian: " . $this->keahlian . "<br>"
                . "Attack Power: " . $this->attackPower . "<br>"
                . "Defence Power: " . $this->defencePower . "<br>";
        }
        
    }

    class elang {
        use hewan, fight;

        function __construct()
        {

            $this->jumlahKaki = 2;
            $this->keahlian = "terbang tinggi";
            $this->attackPower = 10;
            $this->defencePower = 5;
        }

        public function getInfoHewan(){
            echo "Nama: " . $this->nama . "<br>" 
                . "Darah: " . $this->darah . "<br>"
                . "Jumlah Kaki: " . $this->jumlahKaki . "<br>" 
                . "Keahlian: " . $this->keahlian . "<br>"
                . "Attack Power: " . $this->attackPower . "<br>"
                . "Defence Power: " . $this->defencePower . "<br>";
        }
        
    }

?>