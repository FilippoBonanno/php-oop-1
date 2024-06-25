<?php

class Movie 
{
    public $title;
    public $year;
    public $category;
    public $adults_only;
  

    public function __construct($title, $year, $category, $adults_only )
    {
        $this->title = $title;
        $this->year = $year;
        $this->category = $category;
        $this->adults_only = $adults_only;

    }

    public function restricted() {
        if ($this->adults_only == "Si") {
            return "VIETATO AI MINORI";
        } else {
            return "CONSENTITO AI MINORI";
        }

        
    }

    
}