<?php

    Class PotionMax extends Potions
    {
        public function __construct()
        {
            $name = 'PotionMax';
            $hp_healed = 1000;
            parent::__construct($name, $hp_healed);
        }

        public function use($target)
        {
            $target->current_life = $target->max_life;
        }
    }