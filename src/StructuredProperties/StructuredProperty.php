<?php

namespace Astrotomic\OpenGraph\StructuredProperties;

use Astrotomic\OpenGraph\BaseObject;

abstract class StructuredProperty extends BaseObject
{
    public function __construct(string $url, bool $withUrlSuffix = true)
    {
        if ($withUrlSuffix) {
            $this->setProperty(static::PREFIX, 'url', $url);
        } else {
            $prefix = explode(':', static::PREFIX, 2);
            $this->setProperty($prefix[0], $prefix[1], $url);
        }
    }

    public static function make(string $url, bool $withUrlSuffix = true)
    {
        return new static($url, $withUrlSuffix);
    }
}
