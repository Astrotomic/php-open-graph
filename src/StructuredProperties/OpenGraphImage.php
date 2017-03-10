<?php

namespace Spatie\OpenGraph\StructuredProperties;

use Spatie\OpenGraph\OpenGraphObject;

class OpenGraphImage extends OpenGraphObject
{
    /** @var string */
    protected $prefix = 'og:image';

    public function __construct(string $url)
    {
        $this->url($url);
    }

    public static function create(string $url)
    {
        return new static(...func_get_args());
    }

    public function url(string $url) {
        $this->setProperty('', $url);

        return $this;
    }

    public function secure_url(string $secure_url) {
        $this->setProperty('secure_url', $secure_url);

        return $this;
    }

    public function type(string $type) {
        $this->setProperty('type', $type);

        return $this;
    }

    public function width(string $width) {
        $this->setProperty('width', $width);

        return $this;
    }

    public function height(string $height) {
        $this->setProperty('height', $height);

        return $this;
    }

}
