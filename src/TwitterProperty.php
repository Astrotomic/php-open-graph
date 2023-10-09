<?php

namespace Astrotomic\OpenGraph;

class TwitterProperty extends Property
{
    /** @var string */
    protected $prefix = 'twitter';

    public function __toString(): string
    {
        $content = str_replace('"', '&quot;', $this->content);

        return "<meta name=\"{$this->prefix}:{$this->property}\" content=\"{$content}\">";
    }
}
