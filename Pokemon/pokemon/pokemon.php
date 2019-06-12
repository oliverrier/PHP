<?php
	

    abstract class Pokemon 
    {
    	public $name;
		public $max_life;
		public $current_life;
    	public $level;
    	public $type;
    	public $strength;

    	public function __construct ($name, $max_life, $level, $type, $strength)
    	{
    		$this->name = $name;
			$this->max_life = $max_life;
			$this->current_life = $max_life;
    		$this->level = $level;
    		$this->type = $type;
			$this->strength = $strength;
			static::say_hi();
    	}

        public function level_up()
        {
            $this->level += 1;
            $this->max_life +=5;
            $this->strength +=2;

            $level_up_text = $this->name . ' passe au niveau ' . $this->level. '<br>Vie + 5<br>Force + 2<br>';
            
            echo $level_up_text;
		}
		
		public function attack($target)
		{
			$damage = ceil($this->strength * (rand(900, 1100) / 1000));
			$target->take_damage($damage);	
			echo $damage . '<br>';
			return $damage;
		}

		public function take_damage($damage_taken)
		{
			$this->current_life -= $damage_taken;
			$take_damage_text = $this->name . ' : ' . $this->current_life . '/' . $this->max_life . '<br>';
			echo $take_damage_text;
		}

		abstract public function say_hi ();
    }

?>