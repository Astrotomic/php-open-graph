<?php

namespace Spatie\OpenGraph;

use ErrorException;
use Spatie\OpenGraph\Objects\OpenGraphImage;

class OpenGraph
{
    /** @var string */
    protected $type;

    /** @var string */
    protected $title;

    /** @var string */
    protected $url;

    /** @var string */
    protected $description;

    /** @var string */
    protected $site_name;

    /** @var string */
    protected $determiner;

    /** @var array */
    protected $locale;

    /** @var array */
    protected $images;

    /** @var array */
    protected $videos;

    /** @var array */
    protected $audio;

    /** @var  OpenGraphObject */
    protected $content;

    public function __construct(string $type, string $title, string $url, $image)
    {
        $this->type = $type;
        $this->title = $title;
        $this->url = $url;

        if (typeof($image) === string) {
            $this->addImage(new OpenGraphImage($image));
        }

        if ($image instanceof OpenGraphImage) {
            $this->addImage($image);
        }
    }

    public static function create(string $type, string $title, string $url, string $image)
    {
        return new static(...func_get_args());
    }

    public static function __callStatic($methodName, $arguments)
    {
        $type = OpenGraphTypes::getTypeFromCamelCase($methodName);

        if (! in_array($type, OpenGraphTypes::getAll())) {
            throw new ErrorException("Type {$type} doesn't exist.");
        }

        return new static($type, ...$arguments);
    }

    public function addImage(OpenGraphImage $image)
    {
        $this->images[] = $image;
    }
}
