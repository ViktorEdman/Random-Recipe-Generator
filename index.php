<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://handla.api.ica.se/api/recipes/random?numberofrecipes=1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$recipeObject = json_decode($response);
$firstRecipe = $recipeObject->Recipes[0];
$recipeTitle = $firstRecipe->Title;
$ingredientGroups = $firstRecipe->IngredientGroups;
$recipeId = $firstRecipe->Id;

require "index.view.php";

//var_dump($firstRecipe);