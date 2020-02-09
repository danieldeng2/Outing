#!/usr/bin/php

<?php
function analyse($argument, $groupID, $db)
{
  include __DIR__ . "/nlpquery.php";
  include __DIR__ . "/../payments/generate.php";
  include __DIR__ . "/../recommend_locations/recommend.php";
  $result = nlpquery($argument);
  $person = $result->PERSON;
  $price = $result->PRICE;
  $location = $result->LOCATION;


  # payment
  if (!(empty($person) || (empty($price)))) {
    generate($result, $groupID, $db);
  }

  # recommended loactions
  if (!empty($location)) {
    recommend($location, $groupID, $db);
  }
}
?>
