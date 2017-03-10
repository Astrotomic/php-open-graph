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
        return "<meta property=\"{$this->getProperty()}\" content=\"{$this->getContent()}\">";
    }

    public function getProperty(): string
    {
        $property = $this->property ? ":{$this->property}" : '';
        return $this->prefix.$property;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
