<?php

namespace Astrotomic\OpenGraph;

abstract class TwitterType extends TwitterBaseObject
{
    protected const PREFIX = 'twitter';

    public function __construct(?string $title = null)
    {
        $this->setName(self::PREFIX, 'card', $this->type);
        $this->when($title)->title($title);
    }

    public static function make(?string $title = null)
    {
        return new static($title);
    }

    public function title(string $title)
    {
        $this->setName(self::PREFIX, 'title', $title);

        return $this;
    }

    public function site(string $site)
    {
        $this->setName(self::PREFIX, 'site', $site);

        return $this;
    }

    public function description(string $description)
    {
        $this->setName(self::PREFIX, 'description', $description);

        return $this;
    }

    public function image(string $image, ?string $alt = null)
    {
        $this->setName(self::PREFIX, 'image', $image);
        $this->when($alt)->setName(self::PREFIX, 'image:alt', $alt);

        return $this;
    }
}
