<?php

    class HyperBall extends Ball{

        public function __construct()
        {
            $name = 'HyperBall';
            $level = 50;
            parent::__construct($name, $level);
        }
    }