#!/usr/bin/php

<?php
function analyse($argument, $groupID)
{
  include __DIR__ . "nlpquery.php";
  include __DIR__ . "generate.php";
  $result = nlpquery($argument);

  $person = $result->PERSON;
  $price = $result->PRICE;

  # payment
  if (!(empty($person) || (empty($price)))) {
    generate($argument, $groupID);
  }
}
?>
