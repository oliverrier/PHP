<?php

    class Carapuce extends Pokemon
    {
        public function __construct ($level, $life = null)
        {
            $name = 'Carapuce';
            $max_life = 100 + 9 * $level;
            $current_life = $life ?? $max_life;
            $type = 'eau';
            $strength = 10 + 2 * $level;

            parent::__construct($name, $max_life, $level, $type, $strength);

        }

        public function say_hi ()
        {
            echo 'Cara ! <br>';
        }
    }
?>