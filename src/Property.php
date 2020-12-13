<?php

namespace Astrotomic\OpenGraph;

class Property
{
    /** @var string */
    protected $prefix = 'og';

    /** @var string */
    protected $property;

    /** @var string */
    protected $content;

    public function __construct(string $prefix, string $property, string $content)
    {
        $this->prefix = $prefix;
        $this->property = $property;
        $this->content = $content;
    }

    public static function make(string $prefix, string $property, string $content)
    {
        return new static($prefix, $property, $content);
    }

    public function __toString(): string
    {
        $content = str_replace('"', '&quot;', $this->content);

        return "<meta property=\"{$this->prefix}:{$this->property}\" content=\"{$content}\">";
    }
}
