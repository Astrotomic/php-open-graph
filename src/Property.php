<?php

namespace Astrotomic\OpenGraph;

class Property
{
    /** @var string */
    protected $prefix = 'og';

    /** @var string|null */
    protected $property;

    /** @var string */
    protected $content;

    public function __construct(string $prefix, ?string $property, string $content)
    {
        $this->prefix = $prefix;
        $this->property = $property;
        $this->content = $content;
    }

    public static function make(string $prefix, ?string $property, string $content)
    {
        return new static($prefix, $property, $content);
    }

    public function __toString(): string
    {
        $property = $this->property ? "$this->prefix:$this->property" : $this->prefix;

        return "<meta property=\"{$property}\" content=\"{$this->content}\">";
    }
}
