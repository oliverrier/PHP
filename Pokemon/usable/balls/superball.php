<?php

    class SuperBall extends Ball{

        public function __construct()
        {
            $name = 'SuperBall';
            $level = 30;
            parent::__construct($name, $level);
        }
    }