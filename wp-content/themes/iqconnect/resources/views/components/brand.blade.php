@php 
    $img = $data['url']; 
    $title = $data['alt'];
    $link = $data['caption'];
@endphp

<div class="brand">
    <a class="brand__link" href="{{ $link }}">
        <img src="{{ $img }}" alt="{{ $title }}">
    </a>
</div>