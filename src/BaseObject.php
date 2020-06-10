<?php

namespace Astrotomic\OpenGraph;

use Closure;

abstract class BaseObject
{
    /** @var BaseObject[] */
    protected array $tags = [];

    /**
     * @param $condition
     * @param Closure|null $callback
     *
     * @return $this|ConditionalProxy
     */
    public function when($condition, ?Closure $callback = null)
    {
        if ($callback === null) {
            return new ConditionalProxy($this, boolval($condition));
        }

        if ($condition) {
            $callback($this);
        }

        return $this;
    }

    protected function setProperty(string $prefix, string $property, string $content)
    {
        $this->tags[$prefix.':'.$property] = Property::make($prefix, $property, $content);
    }

    protected function addProperty(string $prefix, string $property, string $content)
    {
        $this->tags[] = Property::make($prefix, $property, $content);
    }

    public function __toString(): string
    {
        return implode(PHP_EOL, array_map('strval', $this->tags));
    }
}
