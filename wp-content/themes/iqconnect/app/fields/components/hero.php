<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$hero = new FieldsBuilder('Hero');

$hero
    ->addWysiwyg('subtitle', ['label'=> 'Tekst nad tytułem','toolbar'=>'basic','tabs' => 'visual', 'media_upload' => 0])
    ->addTextArea('title', ['label'=> 'Tytuł', 'rows'=>'3','new_lines' => 'br']);

return $hero;