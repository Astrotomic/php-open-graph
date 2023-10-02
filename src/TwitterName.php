<?php

namespace Astrotomic\OpenGraph;

class TwitterName
{
    /** @var string */
    protected $prefix = 'twitter';

    /** @var string */
    protected $name;

    /** @var string */
    protected $content;

    public function __construct(string $prefix, string $name, string $content)
    {
        $this->prefix = $prefix;
        $this->name = $name;
        $this->content = $content;
    }

    public static function make(string $prefix, string $name, string $content)
    {
        return new static($prefix, $name, $content);
    }

    public function __toString(): string
    {
        $content = str_replace('"', '&quot;', $this->content);

        return "<meta name=\"{$this->prefix}:{$this->name}\" content=\"{$content}\">";
    }
}
