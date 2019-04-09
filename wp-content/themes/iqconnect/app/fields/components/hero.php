<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$hero = new FieldsBuilder('Hero');

$hero
    ->addImage('image')
        ->setInstructions('Wybierz zdjęcie w tle')
    ->addFile('film')
    ->addText('title', ['label'=> 'Własny tytuł']);

return $hero;