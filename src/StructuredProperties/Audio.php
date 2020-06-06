<?php

namespace Astrotomic\OpenGraph\StructuredProperties;

use Astrotomic\OpenGraph\BaseObject;

class Audio extends BaseObject
{
    protected const PREFIX = 'og:video';

    public function __construct(string $url)
    {
        $this->setProperty(self::PREFIX, 'url', $url);
    }

    public static function make(string $url)
    {
        return new static($url);
    }

    public function secureUrl(string $url)
    {
        $this->setProperty(self::PREFIX, 'secure_url', $url);

        return $this;
    }

    public function mimeType(string $mimeType)
    {
        $this->setProperty(self::PREFIX, 'type', $mimeType);

        return $this;
    }
}
