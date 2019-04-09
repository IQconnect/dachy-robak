<?php
    $form_title = get_field('form_title', 'options');
    $form_subtitle = get_field('form_subtitle', 'options');
    $form_terms = get_field('form_terms', 'options');
?>

<form class="form" action="">
    <h2 class="form__title subheader">
        <?php echo e($form_title); ?>

    </h2>
    <p class="body">
        <?php echo e($form_subtitle); ?>

    </p>
    <div class="form__wrapper">
        <input class="form__input secondary-body" type="text" name="name" id="name" placeholder="Imię i nazwisko">
        <input class="form__input secondary-body" type="email" name="email" id="email" placeholder="E-mail">
        <textarea name="" id="" cols="30" rows="8" class="form__input secoundary-body" placeholder="Treść"></textarea>
        <div class="form__checkbox-wrapper">
            <input class="form__checkbox" type="checkbox" name="terms" id="terms">
            <label class="form__label" for="terms"><?php echo e($form_terms); ?></label>
        </div>
        <input class="form__button button button--primary" type="submit" name="send" value="Wyślij">
    </div>
</form>