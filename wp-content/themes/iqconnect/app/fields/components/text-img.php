<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$textImg = new FieldsBuilder('img-text-section');

$textImg
    ->addImage('image',['label' => 'Zdjęcie', 'wrapper' => ['width' => '80%']])
    ->addText('movie',['label' => 'Film', 'instructions' => 'Link do filmu z yt'])
    ->addTextArea('title', ['label' => 'Tytuł', 'rows'=>'2', 'new_lines' => 'br'])
    ->addWysiwyg('content', ['label' => 'Treść', 'media_upload' => 0])
    ->addLink('button_link', ['label' => 'Odnośnik'])
    ->addRepeater('labels')
        ->addText('content',['label' => 'Content'])
        ->addTextArea('title', ['label' => 'Tytuł', 'rows'=>'2', 'new_lines' => 'br']);
return $textImg;