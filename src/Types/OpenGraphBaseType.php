<?php

namespace Spatie\OpenGraph\Types;


use Spatie\OpenGraph\OpenGraphImage;
use Spatie\OpenGraph\OpenGraphObject;

abstract class OpenGraphBaseType extends OpenGraphObject
{
    /** @var string */
    protected $type;

    public function __construct(?string $title = '', ?string $url, $image = null)
    {
        $this->type($this->type);
        $this->title($title);
        $this->url($url);
        $this->image($image);
    }

    /**
     * Creates a new Open Graph object with the correct Open Graph object type.
     *
     * This method's `title`, `url` and `image` parameters are required
     * properties for an Open Graph object.
     * You can set them here or use the methods on the returned OpenGraphBaseType
     * instance.
     *
     * @param null|string $title
     * @param null|string $url
     * @param null|string|\Spatie\OpenGraph\OpenGraphImage $image
     *
     * @return OpenGraphBaseType
     */
    public static function create(?string $title = '', ?string $url, $image = null)
    {
        return new static(...func_get_args());
    }

    public function title($title)
    {
        $this->addTag('title', $title, 'og');

        return $this;
    }

    public function url($title)
    {
        $this->addTag('url', $title, 'og');

        return $this;
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
        $this->addTag('description', $description, 'og');

        return $this;
    }

    public function determiner(string $determiner)
    {
        $this->addTag('determiner', $determiner, 'og');

        return $this;
    }

    public function locale(string $locale = 'en_US')
    {
        $this->addTag('locale', $locale, 'og');

        return $this;
    }

    public function alternateLocale(string $locale = 'en_US')
    {
        $this->addTag('locale:alternate', $locale, 'og');

        return $this;
    }

    public function siteName(string $siteName)
    {
        $this->addTag('site_name', $siteName, 'og');

        return $this;
    }

    protected function type(string $type)
    {
        $this->addTag('type', $type, 'og');

        return $this;
    }
}
