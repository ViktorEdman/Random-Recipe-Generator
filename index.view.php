<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Slumpat recept</title>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1>Slumpmässig receptgenerator</h1>

					</div>
		<div class="row">
			<div class="col">
				<img class="recipe-image" src="<?=$firstRecipe->ImageUrl?>">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10">
				<h2><?=$recipeTitle; ?></h2>
						
			</div>
			<div class="col-sm-2">
				<form name="nyttrecept" method="GET" action="index.php">
					<!--<input type="submit" name="nyttrecept" value="Nytt recept"> -->
					<button>Slumpa</button>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p><?=$firstRecipe->PreambleHTML?></p>	
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h2>Ingredienser</h2>
				<?php foreach ($ingredientGroups as $ingredientGroup => $value):?>
					<?php if (isset($value->GroupName)):  ?>
						<h3><?=$value->GroupName?></h3>
					<?php endif?>
					<ul>
						<?php foreach ($value->Ingredients as $ingredient => $value): ?>
							<li><?=$value->Text?></li>
						<?php endforeach?>
					</ul>
				<?php endforeach?>
			</div>
		</div>	
	
	<div class="row">
		<div class="col">
			<h2>Gör så här</h2>
			<p><?=$firstRecipe->BodyHTML?></p>
		</div>
	</div>
	</div>
</div>
</div>
</body>
</html>
