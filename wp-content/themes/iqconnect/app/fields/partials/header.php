<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$header = new FieldsBuilder('header');

$header
    ->addTab('header', ['placement' => 'left'])
        ->addFields(get_field_partial('components.hero'));
            
return $header;