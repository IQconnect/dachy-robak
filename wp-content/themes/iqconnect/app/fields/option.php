<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option');

$option_page
    ->setLocation('options_page', '==', 'acf-options-ustawienia-strony');
  
$option_page
    ->addTab('Main', ['label' => 'Ustawienia główne', 'placement' => 'left'])
        ->addImage('logo')
    ->addTab('Social media', ['label' => 'Social Media', 'placement' => 'left'])
        ->addRepeater('icons', ['min' => 0, 'layout' => 'table'])
            ->addText('icon', ['title' => 'Font awesome kod ikonki'])
            ->addText('link', ['title' => 'link'])
        ->endRepeater()
    ->addTab('Realizacje', ['label' => 'Realiacje', 'placement' => 'left'])
        ->addTextarea('realization_title',['label' => 'Tytuł sekcji', 'rows' => 2,'new_lines' => 'br'])
    ->addTab('Oferta', ['label' => 'Oferta', 'placement' => 'left'])
        ->addTextarea('ofert_title',['label' => 'Tytuł sekcji', 'rows' => 2,'new_lines' => 'br'])
    ->addTab('Referencje', ['label' => 'Referencje oraz opinie', 'placement' => 'left'])
        ->addText('refs_title',['label' => 'Tytuł sekcji - Referencje'])
        ->addImage('refs_icon',['label' => 'Icon - Referencje'])
        ->addGallery('refs_images',['label' => 'Galeria - Referencje'])
        ->addText('certyficate_title',['label' => 'Tytuł sekcji - Certyfikaty'])
        ->addImage('certyficate_icon',['label' => 'Icon - Certyfikaty'])
        ->addGallery('certyficate_images',['label' => 'Galeria - Certyfikaty'])
    ->addTab('Partnerzy', ['label' => 'Partnerzy', 'placement' => 'left'])
        ->addTextarea('partners_title',['label' => 'Tytuł sekcji', 'rows' => 2,'new_lines' => 'br'])
        ->addGallery('partners_images',['label' => 'Partnerzy'])
    ->addTab('Contact', ['label' => 'Kontakt', 'placement' => 'left'])
        ->addText('contact_title',['label' => 'Tytuł sekcji', 'rows' => 2,'new_lines' => 'br'])
        ->addRepeater('contact_numbers', ['label' => 'Telefony', 'min' => 1, 'layout' => 'table'])
            ->addText('number', ['title' => 'Telefon'])
        ->endRepeater()
        ->addText('contact_mail', ['label' => 'Email'])
    ->addTab('footer', ['label' => 'Stopka', 'placement' => 'left'])
        ->addText('footer_title', ['label' => 'Nagłówek kolumny'])
        ->addText('footer_address', ['label' => 'Adres'] )
        ->addRepeater('footer_links', ['label' => 'Link', 'min' => 0, 'layout' => 'table'])
            ->addLink('link', ['title' => 'Link'])
        ->endRepeater()
        ->addRepeater('footer_tel', ['label' => 'Tel', 'min' => 0, 'layout' => 'table'])
            ->addText('tel', ['title' => 'Tel'])
        ->endRepeater()
        ->addRepeater('footer_mails', ['label' => 'Maile', 'min' => 0, 'layout' => 'table'])
            ->addText('mail', ['title' => 'Mail'])
        ->endRepeater()
        ->addText('footer_krs', ['label' => 'KRS'] )
        ->addText('footer_nip', ['label' => 'NIP'] )
        ->addText('footer_regon', ['label' => 'REGON'] )
    ->addTab('Formularz kontaktowy', ['placement' => 'left'])
        ->addText('form_title', ['label' => 'Nagłówek formularza'])
        ->addText('form_subtitle', ['label' => 'Podtytuł formularza'])
        ->addTextarea('form_terms', ['label' => 'Treść checbkoxa']);
        

    
return $option_page;