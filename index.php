<!doctype html>
<html lang="en">
<head prefix="og: http://ogp.me/ns#">
    <meta charset="utf-8">
    <title>Minimum required properties</title>

    <?php

    require "vendor/autoload.php";

    echo \Spatie\OpenGraph\Types\OpenGraphBook::create()
        ->title('Test title')
        ->addTag('test')
        ->addTag('secondTag')
        ->addImage('http://placehold.it/350x400')
        ->addImage(\Spatie\OpenGraph\StructuredProperties\OpenGraphImage::create('http://placehold.it/400x200'))
        ->getMetaTags();

    ?>
</head>
<body>
<p>Minimum <a href="http://ogp.me/#metadata">required</a> properties:</p>
<ul>
    <li>title</li>
    <li>image</li>
    <li>url</li>
</ul>
<p>The type property is also required but if absent the page will be treated as type website.</p>
</body>
</html>
