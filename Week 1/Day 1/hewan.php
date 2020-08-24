<?php

    trait hewan 
    {
        private $nama;
        private $darah = 50;
        private $jumlahKaki;
        private $keahlian;

        public function setNama($nama){
            $this->nama = $nama;
        }

        public function getNama(){
            return $this->nama;
        }

        public function setDarah($darah){
            $this->darah = $darah;
        }

        public function getDarah(){
            return $this->darah;
        }
        
        public function atraksi() {
            echo $this->nama." ".$this->keahlian; ;
        }
    }

?>