<?php

    class Bulbizarre extends Pokemon
    {
        public function __construct ($level, $life = null)
        {
            $name = 'Bulbizarre';
            $max_life = 100 + 7 * $level;
            $current_life = $life ?? $max_life;
            $type = 'eau';
            $strength = 10 + 3 * $level;

            parent::__construct($name, $max_life, $level, $type, $strength);

        }

        public function say_hi ()
        {
            echo 'Bulbi ! <br>';
        }
    }
?>