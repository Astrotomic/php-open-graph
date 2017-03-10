<?php

namespace Spatie\OpenGraph\Types;


use Spatie\OpenGraph\StructuredProperties\OpenGraphImage;
use Spatie\OpenGraph\OpenGraphObject;

abstract class OpenGraphBaseType extends OpenGraphObject
{
    /** @var string */
    protected $type;

    /** @var string */
    protected $prefix;

    public function __construct(?string $title = null)
    {
        $this->type($this->type);
        $this->title($title);
    }

    /**
     * Creates a new Open Graph object with the correct Open Graph object type.<br><br>
     *
     * Please note that the `url` and `image` parameters are also required by Open Graph.<br>
     * You can set them using the `setUrl` and `addImage` methods on the returned OpenGraphBaseType
     * instance.
     *
     * @param null|string $title
     *
     * @return OpenGraphBaseType
     */
    public static function create(?string $title = null)
    {
        return new static($title);
    }

    public function title($title)
    {
        $this->setProperty('title', $title, 'og');

        return $this;
    }

    public function url($title)
    {
        $this->setProperty('url', $title, 'og');

        return $this;
    }

    /**
     * @param string|\Spatie\OpenGraph\StructuredProperties\OpenGraphImage $image
     *
     * @return $this
     */
    public function addImage($image)
    {
        if (is_string($image)) {
            $image = new OpenGraphImage($image);
        }

        $this->addObject($image);

        return $this;
    }

    public function description(string $description)
    {
        $this->setProperty('description', $description, 'og');

        return $this;
    }

    public function determiner(string $determiner)
    {
        $this->setProperty('determiner', $determiner, 'og');

        return $this;
    }

    public function locale(string $locale = 'en_US')
    {
        $this->setProperty('locale', $locale, 'og');

        return $this;
    }

    public function addAlternateLocale(string $locale = 'en_US')
    {
        $this->addProperty('locale:alternate', $locale, 'og');

        return $this;
    }

    public function siteName(string $siteName)
    {
        $this->setProperty('site_name', $siteName, 'og');

        return $this;
    }

    protected function type(string $type)
    {
        $this->setProperty('type', $type, 'og');

        return $this;
    }

    protected function prepareTags()
    {
        if (empty($this->getProperty('url', 'og')->content)) {
            $this->setProperty('url', $this->getOrigin(), 'og');
        }
    }

    protected function getOrigin(): string
    {
        $useSsl = (! empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on');

        $serverProtocol = strtolower($_SERVER['SERVER_PROTOCOL']);
        $urlProtocol = substr($serverProtocol, 0, strpos($serverProtocol, '/')).(($useSsl) ? 's' : '');
        $url = "{$urlProtocol}://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

        return htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
    }
}
