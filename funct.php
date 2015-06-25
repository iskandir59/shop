<?php

function cutString($text, $max_length = 0, $end = '...', $sep = '[@]') {

	// Si la variable $max_length est définie, supérieure à 0
	// Et que la longueur de la chaine $text est supérieure à $ max_length
	if ($max_length > 0 && strlen($text) > $max_length) {

		// On insère une chaine dans le texte tous les X caractères sans couper les mots
		$text = wordwrap($text, $max_length, $sep, true);
		// On découpe notre chaine en plusieurs bouts répartis dans un tableau
		$text = explode($sep, $text);

		// On retour le premier element du tableau concaténé avec la chaine $end
		return $text[0].$end;
	}

	// On retourne la chaine de départ telle quelle
	return $text;
}


function displayProduct($product, $max_length = 0) {

	$html = '
	<div class="product col-sm-4 col-lg-4 col-md-4">
		<div class="thumbnail">
			<img src="img/product/'.$product['picture'].'" alt="">
			<div class="caption">
				<h4 class="pull-right">'.$product['price'].'</h4>
				<h4><a href="product.php?id='.$product['id'].'">'.cutString($product['name'], 20).'</a>
				</h4>
				<p>';

	if ($max_length > 0) {
		$html .= cutString($product['description'], $max_length);
	} else {
		$html .= nl2br($product['description']);
	}

	$html .= '</p>
		</div>
		<div class="ratings"'.$product['rating'].'>
			<p class="pull-right">15 reviews</p>
			<p>';

	for ($i=0; $i < $product['rating'] ; $i++) { 
		$html .= '<span class="glyphicon glyphicon-star"></span>';
	}


	$html .= '</p>
		</div>
		<div class="btns clearfix">
			<a class="btn btn-info pull-left" href="product.php?id='.$product['id'].'"><span class="glyphicon glyphicon-eye-open"></span> View</a>
			<a class="btn btn-primary pull-right" href="product.php?id='.$product['id'].'"><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
		</div>
	</div><!-- /.thumbnail -->
</div><!-- /.product -->';


	return $html;
}