<?php

namespace Spatie\OpenGraph;

class OpenGraph extends OpenGraphObject
{
    /** @var string */
    protected $type = 'website';

    public function __construct(string $title, string $url, $image)
    {
        $this->addTag('type', $this->type, 'og');
        $this->addTag('title', $title, 'og');
        $this->addTag('url', $url, 'og');

        $this->image($image);
    }

    public static function create(string $title, string $url, $image)
    {
        return new static(...func_get_args());
    }

    public function image($image)
    {
        if (is_string($image)) {
            $image = new OpenGraphImage($image);
        }

        $this->objects[] = $image;

        return $this;
    }

    public function description(string $description)
    {
        $this->addTag('description', $description);

        return $this;
    }

    public function determiner(string $determiner)
    {
        $this->addTag('determiner', $determiner);

        return $this;
    }

    public function locale(string $locale = 'en_US')
    {
        $this->addTag('locale', $locale);

        return $this;
    }

    public function alternateLocale(string $locale = 'en_US')
    {
        $this->addTag('locale:alternate', $locale);

        return $this;
    }

    public function siteName(string $siteName)
    {
        $this->addTag('site_name', $siteName);

        return $this;
    }
}
