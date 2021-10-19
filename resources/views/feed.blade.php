<?= '<'.'?'.'xml version="1.0" encoding="UTF-8"?>'."\n" ?>
<mywebstore>
    <created_at>{{ $created_at->format('Y-m-d H:i') }}</created_at>
    <products>
        @each('skroutz::product', $products, 'product')
    </products>
</mywebstore>