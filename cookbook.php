<?php

include "recipe.php";
include "render.php";
include "recipecollection.php";

// $recipe1  = new Recipe("my first recipe");
// $recipe1->setSource("That Naing Tun")  ;
// //$recipe1->setTitle("my first recipe");
// $recipe1->addIngredients("egg", 1) . "<br>";
// $recipe1->addIngredients("flour", 2 , "cup");
 

// $recipe2 = new Recipe("my second recipe");
// $recipe2->setSource("Betty Croker")  ;
// //$recipe2->setTitle("my second recipe"); 

// // echo $recipe1->getTitle() . "<br>";
// // foreach($recipe1->getIngredients() as $ing){
// //     echo  $ing["amount"]. " " .$ing["measure"] ." " . $ing["item"] . "<br>";
// // }

// $recipe1->addInstruction("This is my first instruction" . "<br>") ;
// $recipe1->addInstruction("This is my second instructions");

// //echo implode($recipe1->getInstructions()) . "<br>";

// $recipe1->addTags("Breakfast" );
// $recipe1->addTags("Main Course");

// //echo implode($recipe1->getTags()) . "<br>";

// $recipe1->setYield("6 servings");
// // echo $recipe1->getYield() . "<br>";
// // echo $recipe1->getSource();

// echo $recipe1 . "<br>";
// //echo Render::displayRecipe($recipe1);

// echo new Render();

$cookbook = new RecipeCollection("Treehouse Recipes");
$cookbook->addRecipe("Lemon");
$cookbook->addRecipe("Orange");
$cookbook->addRecipe("Banana");
$cookbook->addRecipe("Pineapple");
$cookbook->addRecipe("Atawberry");
//var_dump($cookbook);

// $breakfast = new RecipeCollection("Favouriate Breakfast");
// foreach($cookbook->filterByTags("breakfast") as $recipe){
//     $breakfast->addRecipe($recipe);
// }

echo Render::listRecipes($cookbook->getRecipeTitles());
?>