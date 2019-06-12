<?php

    Class SuperPotion extends Potions
    {
        public function __construct()
        {
            $name = 'SuperPotion';
            $hp_healed = 50;
            parent::__construct($name, $hp_healed);
        }
    }