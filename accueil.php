	<?php
$__TEST = false;

include ( "MA_saisie_annonces.php" );
include ( "MA_affichage_annonces.php" );
include ( "MA_fonctions_generales.php" );

setHeaderNoCache();
gestionSession();

// la fonction retourne un tableau dans lequel il y a :
// titre (O) 
// description (1) 
// image (2)
// prix (3) 


if ( isset($_POST[ "suppr" ]) )
{            
	$IDAnnonce = $_GET[ "IDAnnonce" ];
	echo "<h1>$IDAnnonce<h1>\n";
	unset(   $annonces[ $IDAnnonce ]  ); 
    $_SESSION[ "annonces" ]  = $annonces;
}



// je prepare la DIV container
echo "<div class=\"container_vignettes\">"; 
	// je parcours le  dictionnaire des annonces 
	foreach ( $annonces as $numero => $annonce ) 
	{
		echo $numero;
		// je récupère les éléments du tableau
	    $titre  = $annonce[0];
	    $desc   = $annonce[1];
	    $image  = $annonce[2];
	    $prix   = $annonce[3];
		afficher_vignette_annonce( $titre, $desc, $image, $prix, "saisie_annonces.php?IDAnnonce=$numero" );
	}
echo "</div>\n";

// affichage du formulaire de saisie de l'annonce
?>
