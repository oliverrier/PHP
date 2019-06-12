<?php

    class PokeBall extends Ball{

        public function __construct()
        {
            $name = 'PokeBall';
            $level = 10;
            parent::__construct($name, $level);
        }
    }