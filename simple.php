<?php

class simple
{
    //Property declaration.

    public $var = "A default value ";
    public $val = 0;


    //A method declaration.

    public function displayVar()
    {
        $this->val++;
        echo $this->var . $this->val;
    }
}
?>