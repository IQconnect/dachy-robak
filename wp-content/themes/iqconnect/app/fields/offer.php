<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$offer = new FieldsBuilder('offer');

$offer
    ->setLocation('post_type', '==', 'oferty');
  
$offer
    ->addImage('icon', ['label'=>'icon']);
        
return $offer;