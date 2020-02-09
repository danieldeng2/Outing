#!/usr/bin/php

<?php
function analyse($argument, $groupID)
{
  include __DIR__ . "/nlpquery.php";
  include __DIR__ . "/../payments/generate.php";
  include __DIR__ . "/../recomended_locations/recommend.php";
  $result = nlpquery($argument);

  $person = $result->PERSON;
  $price = $result->PRICE;
  $location = $result->LOCATION;

  # payment
  if (!(empty($person) || (empty($price)))) {
    generate($argument, $groupID);
  }

  # recommended loactions
  if (!empty($location)) {
    recommend($argument, $groupID);
  }
}
?>
