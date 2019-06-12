<?php

    include_once './usable/usable.php';


    class Potions implements Usable
    {
        public $name;
        public $level;
    

        public function __construct($name, $hp_healed)
        {
            $this->name = $name;
            $this->hp_healed = $hp_healed;
        }

        public function use ($pokemon)
        {
            $pokemon->current_life += $this->hp_healed;
            echo $pokemon->name . ' a été soigné de ' . $this->hp_healed . ' hp.';
        }

    }