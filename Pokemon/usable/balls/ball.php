<?php

    include_once './usable/usable.php';

    class Ball implements Usable
    {
        public $name;
        public $level;
    

        public function __construct($name, $level)
        {
            $this->name = $name;
            $this->level = $level;
        }

        public function try_catch($pokemon)
        {
            $capture_chance = (($pokemon->max_life - $pokemon->actual_life) / $pokemon->max_life) * (1 + ($this->level - $pokemon->level) / 25) * 100;
            $capture_throw = rand(0,100);
            $caught = ($capture_throw < $capture_chance);
            return $caught;
        }
        
        public function use($pokemon)
        {
            $capture = $this->try_catch($pokemon);
            
            if ($capture)
            {
                echo $capture_throw . "<br>";
                echo 'Capture réussie ! ' . $pokemon->name . ' rejoint votre équipe !<br>';
                return true;
            } else {
                echo $capture_throw . "<br>";
                echo 'Capture echouée ! <br>';
                return false;
            }

        }

    }
?>