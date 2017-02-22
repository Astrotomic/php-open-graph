<?php

namespace Spatie\OpenGraph;

abstract class OpenGraphObject
{
    /** @var string */
    protected $prefix = 'og';

    /** @var PropertyTag[] */
    protected $tags = [];

    /** @var OpenGraphObject[] */
    protected $objects = [];

    public function getMetaTags(): string
    {
        $html = '';
        foreach ($this->getTags() as $tag) {
            $html .= $tag->renderHtml().PHP_EOL;
        }

        return $html;
    }

    protected function addTag(string $property, string $content, $prefix = null)
    {
        if(empty($property) || empty($content))
        {
            return;
        }

        $this->tags[] = PropertyTag::create($prefix ?? $this->prefix, $property, $content);
    }

    protected function getTags(): array
    {
        $objectTags = [];
        foreach($this->objects as $object) {
            $objectTags = array_merge($objectTags, $object->getTags());
        }

        return array_merge($this->tags, $objectTags);
    }
}
