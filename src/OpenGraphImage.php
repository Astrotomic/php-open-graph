<?php

namespace Spatie\OpenGraph;

class OpenGraphImage extends OpenGraphObject
{
    /** @var string */
    protected $prefix = 'og:image';

    public function __construct(string $url, string $secureUrl = '', string $type = '', int $width = null, int $height = null)
    {
        $this->addTag('', $url);
        $this->addTag('url', $url);
        $this->addTag('secure_url', $secureUrl);
        $this->addTag('type', $type);
        $this->addTag('width', (string) $width);
        $this->addTag('height', (string) $height);
    }

    public static function create(string $url, string $secureUrl = '', string $type = '', int $width = null, int $height = null)
    {
        return new static(...func_get_args());
    }
}
