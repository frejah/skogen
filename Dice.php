<?php

//A Dice class to play around with a dice.

class Dice
{
    //Here comes properties & methods.
        //Properties

    public $rolls = [];

    //Roll the dice

   // @param integer $times number of times to roll the dice.

   // @return void

   public function roll ($times)
    {
    $this->rolls = [];

    for ($i = 0; $i < $times; $i++) {
        $this->rolls[] = rand(1, 6);
     }
    }
}

