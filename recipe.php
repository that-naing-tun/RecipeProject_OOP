<?php

class Recipe{
    private $title;
    private $ingredients = array();
    private $instructions = array();
    private $yield;
    private $tag = array();
    private $source = "Alena Holligan"; 
    private $measurement = array(
        "tsp",
        "tbsp",
        "cup",
        "oz",
        "lb",
        "fl oz",
        "pint",
        "quart",
        "gallon"
    );

    public function __construct($title = null){
        $this->setTitle($title);
    }

    public function __toString(){
        $output = "You are calling a " . __CLASS__ . "object with the title";
        $output .= $this->getTitle() ; 
        $output .= "It is stored in " . basename(__FILE__) . "at" . __DIR__ . " .";
        $output .= "This display is from line " . __LINE__ . "in method" . __METHOD__ ;
        $output .= "The following methods are available for objects o this class: ";
        $output .=implode(get_class_methods(__CLASS__));
        $output .= "<br>";
        return $output;
    }

    public function setTitle($title){
        if(empty($title)){
            $this->title = null;
        }else{
            $this->title = ucwords($title);
        }
        
    }

    public function getTitle(){
        return $this->title; 
    }

    public function addIngredients($item, $amount = null , $measure = null){
         if($amount != null && !is_float($amount) && !is_int($amount)){
            exit ("The amount must be a float:" . gettype($amount) . "$amount given");
         }

         if($measure != null && !in_array(strtolower($measure),$this->measurement)){
            exit("Please enter a valid measurement " . implode(", ", $this->measurement));
         }

         $this->ingredients[] = array(
               "item" => ucwords($item),
               "amount" => $amount,
               "measure" => strtolower($measure)
         );
    }

    public function getIngredients(){
        return $this->ingredients;
    }

    public function addInstruction($string){
        $this->instructions[] = $string;
    }

    public function getInstructions(){
        return $this->instructions;
    }

    public function addTags($tag){
        $this->tag[] = strtolower($tag);
    }

    public function getTags(){
        return $this->tag;
    }

    public function setYield($yield){
        $this->yield = $yield;
    }

    public function getYield(){
       return $this->yield;
    }

    public function setSource($source){
         $this->source = ucwords($source);
    }

    public function getSource(){
       return $this->source;
    }

}



?>