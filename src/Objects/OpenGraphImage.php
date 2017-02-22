<?php

namespace Spatie\OpenGraph\Objects;

class OpenGraphImage
{
    /** @var string */
    protected $url;

    /** @var string */
    protected $secureUrl;

    /** @var string */
    protected $type;

    /** @var int */
    protected $width;

    /** @var int */
    protected $height;

    public function __construct(string $url, string $secureUrl = null, string $type = null, int $width = null, int $height = null)
    {
        $this->url = $url;
        $this->secureUrl = $secureUrl;
        $this->type = $type;
        $this->width = $width;
        $this->height = $height;
    }

    public static function create(string $url, string $secureUrl = null, string $type = null, int $width = null, int $height = null)
    {
        return new static(...func_get_args());
    }
}
