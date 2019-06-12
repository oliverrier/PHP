<?php

    Class HyperPotion extends Potions
    {
        public function __construct()
        {
            $name = 'HyperPotion';
            $hp_healed = 100;
            parent::__construct($name, $hp_healed);
        }
    }