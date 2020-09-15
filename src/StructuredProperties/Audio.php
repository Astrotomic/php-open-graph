<?php

namespace Astrotomic\OpenGraph\StructuredProperties;

class Audio extends StructuredProperty
{
    protected const PREFIX = 'og:audio';

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
