<?php

    class Salameche extends Pokemon
    {
        public function __construct ($level, $life = null)
        {
            $name = 'Salameche';
            $max_life = 100 + 5 * $level;
            $current_life = $life ?? $max_life;
            $type = 'feu';
            $strength = 10 + 4 * $level;

            parent::__construct($name, $max_life, $level, $type, $strength);

        }

        public function say_hi ()
        {
            echo 'Sala ! <br>';
        }
    }
?>