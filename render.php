<?php
class Render{

  public function __toString(){
    $output = "The following methods are available for". __CLASS__ . "objects :";
    $output .=implode(get_class_methods(__CLASS__));
    $output .= "<br>";
    return $output;
  }

  public static function listRecipes($titles){
    asort($titles);
    return implode($titles);
  }
    
    public static function listIngredients($ingredients){
       $output = "";
       foreach ($ingredients as $ing){
        $output .= $ing["amount"]. " " .$ing["measure"] . " " . $ing["item"];
        $output .= "<br>";  
      };
       return $output;
    }

    public static function displayRecipe($recipe){
        $output = "";
        $output .= $recipe-> getTitle(). "by" . $recipe->getSource() ;
        $output .= "<br>";
        $output .= implode(", ", $recipe->getTags()) . "<br>";
        $output .= "<br>";
        $output .= self::listIngredients($recipe->getIngredients());
        $output .= implode($recipe->getInstructions()) . "<br>";
        $output .= "<br>";
        $output .= $recipe->getyield();
        return $output;
    }
}

?>