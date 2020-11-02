<?php

require 'Catalog.php';

$catalog = new Catalog('products.json');

//could be other catalogs, ex:
//$catalogCambridge = new Catalog('cambridge-products.json');

$catalog->getById(9);

///could get from ID not hardcoded by ex:
//$product = $catalog->getById($_GET);
//seach form example
var_dump($catalog->searchByName('Cheerios'));
// var_dump($catalog->searchByName('ee'));