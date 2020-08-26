<?php

namespace Astrotomic\OpenGraph;

use Astrotomic\ConditionalProxy\HasConditionalCalls;

abstract class BaseObject
{
    use HasConditionalCalls;

    /** @var BaseObject[] */
    protected $tags = [];

    public function setProperty(string $prefix, ?string $property, string $content)
    {
        $key = $property ? $prefix.':'.$property : $prefix;
        $this->tags[$key] = Property::make($prefix, $property, $content);
    }

    public function addProperty(string $prefix, string $property, string $content)
    {
        $this->tags[] = Property::make($prefix, $property, $content);
    }

    public function __toString(): string
    {
        return implode(PHP_EOL, array_map('strval', $this->tags));
    }
}
