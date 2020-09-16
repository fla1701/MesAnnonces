<?php
//$__TEST = true;


function afficher_vignette_annonce( $titre, $description, $image, $prix,  $cible="")
{
    echo "<div class=\"annonce_vignette\" >\n";
    echo "    <h2 class=\"titre_vignette\">$titre</h2>\n";
    echo "    <img class=\"image_vignette\" src=\"$image\" alt=\"\">\n";
    echo "    <h3>$prix</h3>\n";
    echo "    <div>\n";
    echo "        <form method=\"POST\" action=\"$cible\" class=\"form\">\n";
    echo "        <input type=\"submit\" class=\"button\" name=\"suppr\"value=\"X\">\n";
    echo "        <input type=\"submit\" class=\"button\" value=\"Réservez\">\n";
    echo "        <input type=\"submit\" class=\"button\" value=\"Ecrire un avis\">\n";
    echo "    </form>\n";
    echo "    </div>\n";
            
    echo "    <div>\n";
    echo "        <p class=\"description_vignette\">$description</p>\n";
    echo "    </div>\n";
    echo "</div>\n";
}


if ( $__TEST )
{
     include ( "MA_fonctions_generales.php" );

    setHeaderNoCache();
   
    echo "<div class=\"container_vignettes\">";
        for( $i=0 ; $i < 20 ; $i++ )
            afficher_vignette_annonce( "mon annonce", "voici un beau lieu de détente", "https://cdn.laredoute.com/products/680by680/4/3/7/43716f4ce8f9a20d91ae2ac686ad3ef5.jpg", "" ); 

    echo "</div>";

}

?>