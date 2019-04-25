<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Add Component'])
            ->addLayout(get_field_partial('components.text-img'))
            ->addLayout('realization-section', ['label' => 'Realizacje'])
            ->addLayout('offer-section', ['label' => 'Oferta'])
            ->addLayout('refs-section', ['label' => 'Referencje'])
            ->addLayout(get_field_partial('components.gallery'));
        
return $builder;