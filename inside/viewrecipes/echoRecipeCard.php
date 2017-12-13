<?php
function echoRecipeCard($cocktailId, $drinkName, $drinkDescription, $drinkAuthor)
{
    echo '<div class="card"><a href="../addupdaterecipe/addupdaterecipe.php?id='. $cocktailId . '">
    <img src="../../images/cocktailIcon.png" alt="Cocktail" width="100" height="100">
    <div class="container">
    <h4><b>' . $drinkName . '</b></h4> 
    <p>' . $drinkDescription . '</p> 
    <p>' . $drinkAuthor . '</p> 
    </div>
    </a></div>';
}
?>