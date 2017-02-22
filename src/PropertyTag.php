<?php

namespace Spatie\OpenGraph;

class PropertyTag
{
    /** @var string */
    public $property;

    /** @var string */
    public $content;

    /** @var string */
    public $prefix;

    function __construct(string $prefix = 'og', string $property, string $content)
    {
        $this->prefix = $prefix;
        $this->property = $property;
        $this->content = $content;
    }

    public static function create(string $prefix = 'og', string $property, string $content)
    {
        return new static(...func_get_args());
    }

    public function renderHtml(): string
    {
        return "<meta property=\"{$this->prefix}:{$this->property}\" content=\"{$this->content}\">";
    }
}
