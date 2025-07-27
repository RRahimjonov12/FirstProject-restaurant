<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/simple.css" />
    <link rel="stylesheet" href="./styles/custom.css" />
    <title>Culinary Cove<?php if(isset($pageTitle) && !empty($pageTitle)): ?> &bull; <?php echo $pageTitle;?><?php endif; ?></title>
</head>
<body>
  <header class="header-with-background" style="background-image: url('<?php if (isset($headerImg) && !empty($headerImg)) {echo $headerImg;} else { echo $headerImg = "images/pexels-julia-volk-5273044.jpg";} ?>'); ">
    <h1>Culinary Cove</h1>
    <p>Your sanctuary for exceptional flavors</p>
    <nav>
      <a <?php if($pageKey === "mission" && !empty($pageKey)): ?> class="active" <?php endif; ?> href="our-mission.php">Our mission</a>
      <a <?php if($pageKey === "ingredients" && !empty($pageKey)): ?> class="active" <?php endif; ?> href="ingredients.php">Our ingredients</a>
      <a <?php if($pageKey === "menu" && !empty($pageKey)): ?> class="active" <?php endif; ?> href="menu.php">Our menu</a>
    </nav>
  </header>

  <main>