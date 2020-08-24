<?php

    trait hewan 
    {
        private $nama;
        private $darah = 50;
        private $jumlahKaki;
        private $keahlian;

        public function atraksi() {
            echo $this->nama." ".$this->keahlian; ;
        }
    }

?>