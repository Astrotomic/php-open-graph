<?php

namespace Astrotomic\OpenGraph;

use Astrotomic\ConditionalProxy\HasConditionalCalls;

abstract class TwitterBaseObject
{
    use HasConditionalCalls;

    /** @var BaseObject[] */
    protected $tags = [];

    public function setName(string $prefix, string $name, string $content)
    {
        $this->tags[$prefix.':'.$name] = TwitterName::make($prefix, $name, $content);
    }

    public function __toString(): string
    {
        return implode(PHP_EOL, array_map('strval', $this->tags));
    }
}
