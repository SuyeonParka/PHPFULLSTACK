<?php

class Blackjack
{
    public $faces = array("A", 2,3,4,5,6,7,8,9,10,11,12);
    public $suits = array("J", "K", "Q", 10);
    public $deck = array();
    public $card;
    public $value = 0;

    public function __construct() 
    {
        foreach ($this->suits as $suit) 
        {
            foreach($this->faces as $face)
            {
                $value = $face;

                if(!is_numeric($face))
                {
                    $value = 10;
                }
                if($face == 'A')
                {
                    $value = 11;
                }
                $this->deck[] = array("suit"=>$suit, "face"=>$face, "value"=>$value);
            }
        }
        return $this->random_card();
    }
    public function randon_card()
        {
            shuffle($this->deck);
            $card = array_shift($this->deck);
            var_dump ($this->card);
            return $this->card['face'];
            echo ($this->card['face']);
        }
}

$obj = new Blackjack;
var_dump($obj->suits);
echo '<br>';
print_r($obj->faces);
echo '<br>';
echo '<br>';
print_r($obj->deck);
echo '<br>';
echo '<br>';
echo 'Test test';
print_r ($obj->card);




?>