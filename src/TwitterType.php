<?php

namespace Astrotomic\OpenGraph;

abstract class TwitterType extends BaseObject
{
    protected const PREFIX = 'twitter';

    public function __construct(?string $title = null)
    {
        $this->setProperty(self::PREFIX, 'card', $this->type);
        $this->when(!empty($title), fn () => $this->title($title));
    }

    public static function make(?string $title = null)
    {
        return new static($title);
    }

    public function title(string $title)
    {
        $this->setProperty(self::PREFIX, 'title', $title);

        return $this;
    }

    public function site(string $site)
    {
        $this->setProperty(self::PREFIX, 'site', $site);

        return $this;
    }

    public function description(string $description)
    {
        $this->setProperty(self::PREFIX, 'description', $description);

        return $this;
    }

    public function image(string $image, ?string $alt = null)
    {
        $this->setProperty(self::PREFIX, 'image', $image);
        $this->when(!empty($alt), fn () => $this->setProperty(self::PREFIX, 'image:alt', $alt));

        return $this;
    }
}
