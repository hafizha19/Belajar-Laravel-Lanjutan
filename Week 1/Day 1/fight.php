<?php

    trait fight
    {
        use hewan;

        private $attackPower;
        private $defencePower;

        public function serang($korban){
            echo $this->nama . " sedang menyerang " . $korban->getNama();
            
            echo "<br>";
            
            $darah = $korban->getDarah() - $korban->getAttackPower() / $korban->getDefencePower();
            $korban->setDarah($darah);
            
            echo "Darah ".$korban->getNama()." setelah diserang: ". $korban->getDarah();

            echo "<br>";
        }
        
        public function diserang(){
            echo $this->nama . " sedang diserang";
            
            echo "<br>";

            $darah = $this->darah - $this->attackPower / $this->defencePower;
            $this->setDarah($darah);

            echo "Darah ".$this->nama." setelah diserang: ". $this->darah;
            
            echo "<br>";
        }
    }

?>