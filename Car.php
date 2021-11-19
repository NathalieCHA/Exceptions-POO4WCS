<?php 

class Car{
    
    private bool $hasParkBrake;

    public function setParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }
    
    public function start()
    {
      if($this->hasParkBrake === true)
        {
            throw new Exception ();
        }
       
        return "C'est parti !";
    }         
}