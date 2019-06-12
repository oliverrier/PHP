<?php

    Class Potion extends Potions
    {
        public function __construct()
        {
            $name = 'Potion';
            $hp_healed = 20;
            parent::__construct($name, $hp_healed);
        }
    }