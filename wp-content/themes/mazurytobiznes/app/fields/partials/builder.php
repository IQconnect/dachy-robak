<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Add Component'])
            ->addLayout(get_field_partial('components.slider'))
            ->addLayout(get_field_partial('components.hero'))
            ->addLayout(get_field_partial('components.text-img'))
            ->addLayout(get_field_partial('components.products'))
            ->addLayout('contact', ['label' => 'Kontakt'])
            ->addLayout('partners', ['label' => 'Partnerzy'])
            ->addLayout('opinie', ['label' => 'Opinie'])
            ->addLayout('breadcramps', ['label' => 'Breadcramps'])
            ->addLayout(get_field_partial('components.blue-box'))
            ->addLayout(get_field_partial('components.team'))
            ->addLayout(get_field_partial('components.content'));
return $builder;