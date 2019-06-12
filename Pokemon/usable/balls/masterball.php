<?php

    class MasterBall extends Ball{

        public function __construct()
        {
            $name = 'MasterBall';
            $level = 100;
            parent::__construct($name, $level);
        }

        public function try_catch($target)
        {
            return true;
        }
    }